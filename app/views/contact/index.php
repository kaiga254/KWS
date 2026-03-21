<!-- Page Header -->
<section class="bg-brand-dark text-white py-16 md:py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Contact Us</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Have questions about our programs, want to volunteer, or simply want to say hello? We'd love to hear from you.
        </p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-16">
        
        <!-- Contact Information -->
        <div class="lg:w-1/3">
            <h2 class="text-3xl font-bold text-brand-dark mb-8">Get In Touch</h2>
            <p class="text-gray-600 mb-10 text-lg">Our team is always ready to assist you. Reach out via email, phone, or fill out the form.</p>
            
            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-green-100 text-brand-green rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-brand-dark">Email</h4>
                        <a href="mailto:info@kidswithsolution.org" class="text-brand-blue hover:text-blue-700">info@kidswithsolution.org</a>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-blue-100 text-brand-blue rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-brand-dark">Phone</h4>
                        <a href="tel:+1234567890" class="text-gray-600 hover:text-brand-dark">+1 (234) 567-890</a>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-purple-100 text-brand-purple rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-brand-dark">Location</h4>
                        <p class="text-gray-600">123 Innovation Drive,<br>Tech City, TC 10010</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:w-2/3">
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border border-gray-100">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none" required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none" required>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-white">
                            <option>General Inquiry</option>
                            <option>Program Registration Question</option>
                            <option>Donation & Sponsorship</option>
                            <option>Volunteer Opportunities</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none resize-none" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brand-green hover:bg-green-600 text-white font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-lg transition-all text-lg">
                        Send Message
                    </button>
                    <p class="text-sm text-gray-500 text-center mt-4 text-balance">By submitting this form, you agree to our privacy policy regarding data collection.</p>
                </form>
            </div>
        </div>
        
    </div>
</section>
