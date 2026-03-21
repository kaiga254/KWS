<!-- Page Header -->
<section class="bg-brand-dark text-white py-16 md:py-24 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-64 h-64 rounded-full bg-brand-purple opacity-20 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-brand-green opacity-20 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Bootcamps</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Structured, impact-driven programs designed to equip the youth with foundational to advanced digital skills. Choose a path that fits your child's age group and interests.
        </p>
    </div>
</section>

<!-- Programs Listing -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter/Categories (UI Mock) -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button class="px-6 py-2 rounded-full bg-brand-dark text-white font-medium shadow-md transition-all">All Programs</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:text-brand-dark hover:bg-gray-100 font-medium shadow-sm transition-all border border-gray-200">Ages 8-12</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:text-brand-dark hover:bg-gray-100 font-medium shadow-sm transition-all border border-gray-200">Ages 13-18</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-600 hover:text-brand-dark hover:bg-gray-100 font-medium shadow-sm transition-all border border-gray-200">Advanced</button>
        </div>

        <div class="grid grid-cols-1 gap-12">
            
            <!-- Program 1 (Detailed Card) -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 flex flex-col md:flex-row hover:shadow-xl transition-shadow">
                <div class="md:w-1/3 bg-blue-100 relative min-h-[250px] flex items-center justify-center p-8">
                    <svg class="w-24 h-24 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <div class="absolute top-4 left-4 bg-white/80 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-bold text-brand-blue shadow-sm">Beginner</div>
                </div>
                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                    <div class="flex flex-wrap justify-between items-start mb-4">
                        <div>
                            <h2 class="text-3xl font-bold text-brand-dark mb-2">Basic Computer Skills</h2>
                            <p class="text-gray-500 font-medium">Target Age: <span class="text-brand-green font-bold">8-12 years</span></p>
                        </div>
                        <span class="inline-block px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-semibold whitespace-nowrap"><svg class="w-4 h-4 inline-block mr-1 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 4 Weeks</span>
                    </div>
                    <p class="text-gray-600 mb-8 text-lg">
                        An introductory course designed to familiarize young learners with computer hardware, basic software operations, typing proficiency, and fundamental internet navigation skills.
                    </p>
                    <div class="mt-auto">
                        <a href="/public/register" class="inline-block bg-brand-green hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full shadow-md transition-all">Register Now</a>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 flex flex-col md:flex-row hover:shadow-xl transition-shadow">
                <div class="md:w-1/3 bg-purple-100 relative min-h-[250px] flex items-center justify-center p-8">
                    <svg class="w-24 h-24 text-brand-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <div class="absolute top-4 left-4 bg-white/80 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-bold text-brand-purple shadow-sm">Intermediate</div>
                </div>
                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                    <div class="flex flex-wrap justify-between items-start mb-4">
                        <div>
                            <h2 class="text-3xl font-bold text-brand-dark mb-2">Coding for Kids</h2>
                            <p class="text-gray-500 font-medium">Target Age: <span class="text-brand-green font-bold">10-15 years</span></p>
                        </div>
                        <span class="inline-block px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-semibold whitespace-nowrap"><svg class="w-4 h-4 inline-block mr-1 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 8 Weeks</span>
                    </div>
                    <p class="text-gray-600 mb-8 text-lg">
                        This bootcamp dives into the creative world of coding. Students will learn logic building using block-based programming (Scratch) and get introduced to front-end web development with HTML and CSS.
                    </p>
                    <div class="mt-auto">
                        <a href="/public/register" class="inline-block bg-brand-green hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full shadow-md transition-all">Register Now</a>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 flex flex-col md:flex-row hover:shadow-xl transition-shadow">
                <div class="md:w-1/3 bg-green-100 relative min-h-[250px] flex items-center justify-center p-8">
                    <svg class="w-24 h-24 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    <div class="absolute top-4 left-4 bg-white/80 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-bold text-brand-green shadow-sm">All Levels</div>
                </div>
                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                    <div class="flex flex-wrap justify-between items-start mb-4">
                        <div>
                            <h2 class="text-3xl font-bold text-brand-dark mb-2">Digital Literacy & Safety</h2>
                            <p class="text-gray-500 font-medium">Target Age: <span class="text-brand-green font-bold">13-18 years</span></p>
                        </div>
                        <span class="inline-block px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-semibold whitespace-nowrap"><svg class="w-4 h-4 inline-block mr-1 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 2 Weeks</span>
                    </div>
                    <p class="text-gray-600 mb-8 text-lg">
                        A critical module focusing on how to navigate the internet safely. Topics include identifying misinformation, preventing cyberbullying, online privacy, and maintaining a positive digital footprint.
                    </p>
                    <div class="mt-auto">
                        <a href="/public/register" class="inline-block bg-brand-green hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full shadow-md transition-all">Register Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-16 bg-brand-blue text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Not Sure Which Program is Right?</h2>
        <p class="text-xl mb-8 opacity-90">Reach out to us and we will help you decide the best track for you or your child.</p>
        <a href="/public/contact" class="bg-white text-brand-blue font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all">Contact Our Team</a>
    </div>
</section>
