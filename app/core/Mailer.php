<?php
class Mailer {
    /**
     * Send email using PHP mail() with headers optimized for cPanel.
     * 
     * @param string $to Recipient email address
     * @param string $subject Email subject line
     * @param string $htmlContent Email body content in HTML format
     * @param string $replyToEmail Reply-To email address
     * @return bool True if mail was accepted for delivery, false otherwise
     */
    public static function sendMail($to, $subject, $htmlContent, $replyToEmail) {
        if (!defined('MAIL_FROM_EMAIL') || !defined('MAIL_TO_EMAIL')) {
            return false;
        }

        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=UTF-8',
            'From: ' . MAIL_FROM_NAME . ' <' . MAIL_FROM_EMAIL . '>',
            'Reply-To: ' . $replyToEmail,
            'X-Mailer: PHP/' . phpversion()
        ];
        
        $headersString = implode("\r\n", $headers);
        
        // Use standard envelope sender -f flag to match MAIL_FROM_EMAIL
        // This is critical for cPanel SPF, DKIM, and DMARC alignment.
        $additionalParams = '-f' . MAIL_FROM_EMAIL;
        
        return @mail($to, $subject, $htmlContent, $headersString, $additionalParams);
    }

    /**
     * Reusable wrapper for HTML email branding
     * 
     * @param string $title Header title
     * @param string $bodyContent Core message body HTML
     * @return string Complete HTML document
     */
    private static function getEmailHtml($title, $bodyContent) {
        return '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . htmlspecialchars($title) . '</title>
            <style>
                body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; color: #1e293b; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
                .wrapper { width: 100%; table-layout: fixed; background-color: #f8fafc; padding: 40px 0; }
                .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.02); }
                .header { background-color: #0c4a6e; padding: 32px; text-align: center; color: #ffffff; }
                .header h1 { margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.025em; }
                .header p { margin: 8px 0 0 0; font-size: 14px; color: #bae6fd; font-weight: 500; }
                .content { padding: 32px; line-height: 1.6; }
                .content h2 { margin-top: 0; font-size: 20px; font-weight: 700; color: #0f172a; }
                .content p { font-size: 16px; color: #475569; margin: 16px 0; }
                .table-container { margin: 24px 0; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }
                .data-table { width: 100%; border-collapse: collapse; }
                .data-table th, .data-table td { padding: 12px 16px; text-align: left; font-size: 15px; }
                .data-table th { background-color: #f1f5f9; color: #475569; font-weight: 600; width: 35%; border-bottom: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; }
                .data-table td { color: #1e293b; border-bottom: 1px solid #e2e8f0; }
                .data-table tr:last-child th, .data-table tr:last-child td { border-bottom: none; }
                .footer { background-color: #f1f5f9; padding: 24px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0; }
                .footer p { margin: 4px 0; }
            </style>
        </head>
        <body>
            <div class="wrapper">
                <div class="container">
                    <div class="header">
                        <h1>Kids With Solutions Foundation</h1>
                        <p>Empowering the next generation with digital skills</p>
                    </div>
                    <div class="content">
                        ' . $bodyContent . '
                    </div>
                    <div class="footer">
                        <p>&copy; ' . date('Y') . ' Kids With Solutions Foundation. All rights reserved.</p>
                        <p>Contact us: info@kwsf.com | +254 780 941 397</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';
    }

    /**
     * Send contact enquiry to admin and auto-reply to the user.
     * 
     * @param array $data Contact data containing name, email, subject, message
     * @return bool True if admin notification was successfully sent
     */
    public static function sendEnquiryEmail($data) {
        // 1. Send admin notification
        $adminSubject = 'New Enquiry: ' . $data['subject'];
        $adminBody = '
            <h2>New Enquiry Received</h2>
            <p>A new enquiry has been submitted through the Kids With Solutions Foundation website contact form.</p>
            <div class="table-container">
                <table class="data-table">
                    <tr><th>Name</th><td>' . htmlspecialchars($data['name']) . '</td></tr>
                    <tr><th>Email</th><td><a href="mailto:' . htmlspecialchars($data['email']) . '">' . htmlspecialchars($data['email']) . '</a></td></tr>
                    <tr><th>Topic</th><td>' . htmlspecialchars($data['subject']) . '</td></tr>
                    <tr><th>Message</th><td>' . nl2br(htmlspecialchars($data['message'])) . '</td></tr>
                </table>
            </div>
        ';
        $adminHtml = self::getEmailHtml($adminSubject, $adminBody);
        $adminSent = self::sendMail(MAIL_TO_EMAIL, $adminSubject, $adminHtml, $data['email']);

        // 2. Send user auto-reply
        $userSubject = 'We received your enquiry - Kids With Solutions Foundation';
        $userBody = '
            <h2>Hello ' . htmlspecialchars($data['name']) . ',</h2>
            <p>Thank you for reaching out to Kids With Solutions Foundation. We have received your enquiry regarding <strong>' . htmlspecialchars($data['subject']) . '</strong>.</p>
            <p>Our team is currently reviewing your message and we will get back to you as soon as possible.</p>
            <p>Here is a copy of the message you submitted:</p>
            <div class="table-container" style="background-color: #f8fafc; padding: 16px; border-radius: 8px; border: 1px solid #e2e8f0; font-style: italic; color: #475569;">
                ' . nl2br(htmlspecialchars($data['message'])) . '
            </div>
            <p>Best regards,<br>The Kids With Solutions Foundation Team</p>
        ';
        $userHtml = self::getEmailHtml($userSubject, $userBody);
        self::sendMail($data['email'], $userSubject, $userHtml, MAIL_FROM_EMAIL);

        return $adminSent;
    }

    /**
     * Send registration details to admin and auto-reply to parent/guardian.
     * 
     * @param array $data Registration details
     * @return bool True if admin notification was successfully sent
     */
    public static function sendRegistrationEmail($data) {
        // 1. Send admin notification
        $adminSubject = 'New Learner Registration: ' . $data['child_first_name'] . ' ' . $data['child_last_name'];
        $adminBody = '
            <h2>New Learner Enrollment Details</h2>
            <p>A new learner interest has been registered on the website.</p>
            
            <h3 style="color: #0f172a; margin-top: 24px; font-size: 18px;">Parent/Guardian Information</h3>
            <div class="table-container">
                <table class="data-table">
                    <tr><th>Parent Name</th><td>' . htmlspecialchars($data['first_name'] . ' ' . $data['last_name']) . '</td></tr>
                    <tr><th>Email</th><td><a href="mailto:' . htmlspecialchars($data['email']) . '">' . htmlspecialchars($data['email']) . '</a></td></tr>
                    <tr><th>Phone</th><td>' . htmlspecialchars($data['phone_number']) . '</td></tr>
                </table>
            </div>

            <h3 style="color: #0f172a; margin-top: 24px; font-size: 18px;">Learner Information</h3>
            <div class="table-container">
                <table class="data-table">
                    <tr><th>Learner Name</th><td>' . htmlspecialchars($data['child_first_name'] . ' ' . $data['child_last_name']) . '</td></tr>
                    <tr><th>Age</th><td>' . htmlspecialchars($data['child_age']) . ' years old</td></tr>
                    <tr><th>Gender</th><td>' . htmlspecialchars($data['child_gender']) . '</td></tr>
                    <tr><th>Preferred Program</th><td><strong>' . htmlspecialchars($data['module']) . '</strong></td></tr>
                </table>
            </div>
        ';
        $adminHtml = self::getEmailHtml($adminSubject, $adminBody);
        $adminSent = self::sendMail(MAIL_TO_EMAIL, $adminSubject, $adminHtml, $data['email']);

        // 2. Send user auto-reply
        $userSubject = 'Learner Registration Received - Kids With Solutions Foundation';
        $userBody = '
            <h2>Hello ' . htmlspecialchars($data['first_name']) . ',</h2>
            <p>Thank you for your interest in enrolling ' . htmlspecialchars($data['child_first_name']) . ' in our <strong>' . htmlspecialchars($data['module']) . '</strong> program.</p>
            <p>We have successfully received your registration of interest. Our team will review the details and contact you shortly to confirm placement, class schedules, and next steps.</p>
            
            <h3 style="color: #0f172a; margin-top: 24px; font-size: 18px;">Summary of Submitted Details:</h3>
            <div class="table-container">
                <table class="data-table">
                    <tr><th>Learner Name</th><td>' . htmlspecialchars($data['child_first_name'] . ' ' . $data['child_last_name']) . '</td></tr>
                    <tr><th>Program Area</th><td>' . htmlspecialchars($data['module']) . '</td></tr>
                    <tr><th>Contact Phone</th><td>' . htmlspecialchars($data['phone_number']) . '</td></tr>
                </table>
            </div>

            <p>If you have any questions in the meantime, feel free to reply directly to this email.</p>
            <p>Best regards,<br>The Kids With Solutions Foundation Team</p>
        ';
        $userHtml = self::getEmailHtml($userSubject, $userBody);
        self::sendMail($data['email'], $userSubject, $userHtml, MAIL_FROM_EMAIL);

        return $adminSent;
    }
}
