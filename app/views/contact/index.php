<?php
$message = $data['message'] ?? '';
$old = $data['old'] ?? [];
$value = function (string $key) use ($old): string {
    return htmlspecialchars((string) ($old[$key] ?? ''), ENT_QUOTES);
};
$selected = function (string $key, string $choice) use ($old): string {
    return (($old[$key] ?? '') === $choice) ? 'selected' : '';
};

$contactCards = [
    ['label' => 'Email', 'value' => 'KIDSWITHSOLUTIONSFOUNDATIONLTD@gmail.com'],
    ['label' => 'Phone', 'value' => '+254 780 941 397'],
    ['label' => 'WhatsApp', 'value' => '+254 780 941 397'],
];
?>

<section class="relative overflow-hidden pattern-bg bg-brand-surface border-b border-slate-200/60 py-16 sm:py-20 lg:py-24">
    <!-- Background image and overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $baseUrl; ?>/img/illustrations/hero-contact-partnerships.jpg" alt="Two adults discussing a learning partnership" class="h-full w-full object-cover object-right opacity-90 lg:opacity-100">
        <!-- Subtle overlay to integrate the image with the brand surface and guarantee text accessibility -->
        <div class="absolute inset-0 bg-brand-surface/30 lg:bg-gradient-to-r lg:from-brand-surface lg:via-brand-surface/85 lg:to-transparent"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/90 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Contact KWSF</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Start a conversation about learning, support, or partnership.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Whether you are a parent, donor, school, company, institute, or community organization, we're excited to hear from you and help you plan the next step.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Enroll a Learner</a>
                <a href="<?php echo $baseUrl; ?>/donate" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink shadow-sm transition-colors hover:border-brand-blue hover:text-brand-blue">Support Our Work</a>
            </div>
        </div>
        <div></div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Our contact details</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Publish the right contact information</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">The supplied documents do not include public contact details. Replace the placeholders below with KWSF-approved information before launch.</p>
                <div class="mt-8 space-y-5">
                    <?php foreach ($contactCards as $card): ?>
                        <div class="rounded-2xl border border-slate-200 bg-brand-surface p-5 shadow-soft">
                            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-muted"><?php echo htmlspecialchars($card['label'], ENT_QUOTES); ?></p>
                            <p class="mt-2 text-lg font-semibold text-brand-ink"><?php echo htmlspecialchars($card['value'], ENT_QUOTES); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Enquiry form</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Send us a message</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">Tell us what you need and we will respond with the most relevant next step.</p>

                <?php if ($message === 'success'): ?>
                    <div class="mt-6 rounded-3xl border border-emerald-200 bg-emerald-50 p-8 text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-brand-green text-white shadow-soft">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h2 class="mt-5 text-2xl font-extrabold text-brand-ink">Message sent</h2>
                        <p class="mt-3 text-base leading-7 text-brand-muted font-medium">Thank you. Your message has been saved. The KWSF team will get back to you shortly.</p>
                        <div class="mt-6">
                            <a href="<?php echo $baseUrl; ?>/home" class="inline-flex items-center justify-center rounded-full bg-brand-blue px-6 py-3 text-sm font-bold text-white shadow-soft">Back to Home</a>
                        </div>
                    </div>
                <?php else: ?>
                    <?php if ($message !== ''): ?>
                        <div class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-5 py-4 text-sm font-medium text-rose-700">
                            <?php echo htmlspecialchars($message, ENT_QUOTES); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo $baseUrl; ?>/contact" method="POST" id="contact-form" class="mt-8 space-y-6" novalidate>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label for="contact_name" class="block text-sm font-semibold text-slate-700">Name *</label>
                                <input type="text" id="contact_name" name="contact_name" value="<?php echo $value('contact_name'); ?>" required pattern="^[a-zA-Z\s\-\']{2,100}$" aria-describedby="contact_name-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="contact_name-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Name must be 2-100 characters (letters, spaces, hyphens, or apostrophes only).
                                </div>
                            </div>
                            <div>
                                <label for="contact_email" class="block text-sm font-semibold text-slate-700">Email address *</label>
                                <input type="email" id="contact_email" name="contact_email" value="<?php echo $value('contact_email'); ?>" required aria-describedby="contact_email-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="contact_email-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Please enter a valid email address.
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="contact_subject" class="block text-sm font-semibold text-slate-700">I want to discuss *</label>
                            <select id="contact_subject" name="contact_subject" required aria-describedby="contact_subject-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <option value="" <?php echo $selected('contact_subject', ''); ?>>Select a topic...</option>
                                <option value="Learner enrollment" <?php echo $selected('contact_subject', 'Learner enrollment'); ?>>Learner enrollment</option>
                                <option value="School or community partnership" <?php echo $selected('contact_subject', 'School or community partnership'); ?>>School or community partnership</option>
                                <option value="Donor or sponsor support" <?php echo $selected('contact_subject', 'Donor or sponsor support'); ?>>Donor or sponsor support</option>
                                <option value="Equipment or volunteer support" <?php echo $selected('contact_subject', 'Equipment or volunteer support'); ?>>Equipment or volunteer support</option>
                                <option value="General enquiry" <?php echo $selected('contact_subject', 'General enquiry'); ?>>General enquiry</option>
                            </select>
                            <div id="contact_subject-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                Please select a topic to discuss.
                            </div>
                        </div>
                        <div>
                            <label for="contact_message" class="block text-sm font-semibold text-slate-700">Message *</label>
                            <textarea id="contact_message" name="contact_message" rows="5" required minlength="10" maxlength="2000" aria-describedby="contact_message-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15"><?php echo $value('contact_message'); ?></textarea>
                            <div id="contact_message-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                Message must be between 10 and 2000 characters.
                            </div>
                        </div>
                        <button type="submit" class="w-full rounded-full bg-brand-green px-6 py-4 text-base font-bold text-white transition-transform hover:-translate-y-0.5 shadow-soft">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-blue py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Partnerships matter</p>
            <h2 class="mt-3 text-3xl font-extrabold">Help expand access to IT skills and learning tools.</h2>
        </div>
        <a href="<?php echo $baseUrl; ?>/donate" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-4 text-base font-bold text-brand-blue">Explore Ways to Support</a>
    </div>
</section>

<script>
    (function () {
        const form = document.getElementById('contact-form');
        if (!form) return;

        const syncValidationState = (el) => {
            if (!el.checkValidity) return;
            const isValid = el.checkValidity();
            el.setAttribute('aria-invalid', isValid ? 'false' : 'true');
        };

        // Validate on blur
        form.addEventListener('blur', (e) => {
            if (e.target.matches('input, select, textarea')) {
                e.target.setAttribute('data-touched', 'true');
                syncValidationState(e.target);
            }
        }, true);

        // Validate on input if already touched
        form.addEventListener('input', (e) => {
            if (e.target.matches('input, select, textarea')) {
                if (e.target.getAttribute('data-touched') === 'true') {
                    syncValidationState(e.target);
                }
            }
        });

        // Validate on form submit
        form.addEventListener('submit', (e) => {
            const fields = Array.from(form.querySelectorAll('input, select, textarea'));
            let formValid = true;
            let firstInvalidField = null;

            for (const field of fields) {
                field.setAttribute('data-touched', 'true');
                syncValidationState(field);
                if (!field.checkValidity()) {
                    formValid = false;
                    if (!firstInvalidField) {
                        firstInvalidField = field;
                    }
                }
            }

            if (!formValid) {
                e.preventDefault();
                if (firstInvalidField) {
                    firstInvalidField.focus();
                }
            }
        });
    })();
</script>
