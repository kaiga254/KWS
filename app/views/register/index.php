<!-- Page Header -->
<section class="bg-brand-dark text-white py-16 md:py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Register a Child</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Secure a spot for your child in our upcoming digital literacy bootcamps. Fill out the details below to begin.
        </p>
    </div>
</section>

<!-- Registration Form -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            
            <?php if (isset($data['message']) && $data['message'] === 'success'): ?>
            <div class="p-8 bg-green-50 border-b border-green-200 text-center">
                <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center text-white mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-brand-dark mb-2">Registration Successful!</h2>
                <p class="text-gray-600">Thank you! We will contact you soon with further details.</p>
                <a href="/public/home" class="inline-block mt-6 text-brand-blue font-bold hover:underline">Return to Home</a>
            </div>
            <?php else: ?>
            
            <div class="p-8 md:p-12">
                <?php if (isset($data['message']) && $data['message'] !== ''): ?>
                    <div class="mb-8 p-4 bg-red-50 text-red-600 border border-red-200 rounded-lg">
                        <?php echo htmlspecialchars($data['message']); ?>
                    </div>
                <?php endif; ?>

                <form action="/public/register" method="POST" id="registration-form" class="space-y-10">
                    
                    <!-- Parent Details -->
                    <div>
                        <h3 class="text-xl font-bold text-brand-dark mb-6 border-b pb-2 flex items-center gap-2">
                            <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            Parent/Guardian Details
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                                <input type="text" name="first_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                                <input type="text" name="last_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" name="phone_number" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                        </div>
                    </div>

                    <!-- Child Details -->
                    <div>
                        <h3 class="text-xl font-bold text-brand-dark mb-6 border-b pb-2 flex items-center gap-2">
                            <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            Child Details
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                                <input type="text" name="child_first_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                                <input type="text" name="child_last_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Age *</label>
                                <input type="number" name="child_age" required min="5" max="18" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Gender</label>
                                <div class="flex items-center gap-6 mt-3">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="child_gender" value="Male" class="w-4 h-4 text-brand-green border-gray-300 focus:ring-brand-green">
                                        <span>Male</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="child_gender" value="Female" class="w-4 h-4 text-brand-green border-gray-300 focus:ring-brand-green">
                                        <span>Female</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" name="child_gender" value="Other" class="w-4 h-4 text-brand-green border-gray-300 focus:ring-brand-green">
                                        <span>Other</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program Selection -->
                    <div>
                        <h3 class="text-xl font-bold text-brand-dark mb-6 border-b pb-2 flex items-center gap-2">
                            <svg class="w-6 h-6 text-brand-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                            Program Details
                        </h3>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Select Module/Bootcamp</label>
                            <select name="module" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-green focus:border-brand-green transition-colors outline-none bg-gray-50 focus:bg-white text-gray-700">
                                <option value="">Select a program...</option>
                                <option value="Basic Computer Skills">Basic Computer Skills (8-12 yrs)</option>
                                <option value="Coding for Kids">Coding for Kids (10-15 yrs)</option>
                                <option value="Digital Literacy & Safety">Digital Literacy & Safety (13-18 yrs)</option>
                                <option value="Other">Other / Not Sure Yet</option>
                            </select>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-brand-green hover:bg-green-600 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all text-lg transform hover:-translate-y-1">
                            Submit Registration
                        </button>
                    </div>
                </form>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
