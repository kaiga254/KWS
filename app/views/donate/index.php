<section class="relative overflow-hidden pattern-bg bg-brand-surface border-b border-slate-200/60 py-16 sm:py-20 lg:py-24">
    <!-- Background image and overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $baseUrl; ?>/img/illustrations/hero-support-access.jpg" alt="Staff reviewing laptops and learning equipment for a digital skills program" class="h-full w-full object-cover object-right opacity-90 lg:opacity-100">
        <!-- Subtle overlay to integrate the image with the brand surface and guarantee text accessibility -->
        <div class="absolute inset-0 bg-brand-surface/30 lg:bg-gradient-to-r lg:from-brand-surface lg:via-brand-surface/85 lg:to-transparent"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/90 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Support our work</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Help expand access to practical IT and innovation skills.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">KWSF works to reduce barriers to quality technology and financial literacy education. Support can help more young people access learning tools, practical programs, and spaces where they can build confidence.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="#giving-channels" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">View Giving Details</a>
                <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink shadow-sm transition-colors hover:border-brand-blue hover:text-brand-blue">Learn About Our Programs</a>
            </div>
        </div>
        <div></div>
    </div>
</section>

<section id="giving-channels" class="bg-white py-20 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Direct Support</p>
            <h2 class="mt-4 text-3xl font-extrabold text-brand-ink sm:text-4xl">Direct Donation Channels</h2>
            <p class="mt-4 text-lg text-brand-muted">Support our mission using the mobile money or bank transfer details below. Copy the details to your clipboard for convenience.</p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            <!-- M-Pesa Card -->
            <div class="group relative rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-[0_20px_50px_rgba(47,133,90,0.08)]">
                <!-- Top Accent Line -->
                <div class="absolute inset-x-0 top-0 h-1.5 bg-emerald-500 rounded-t-[2rem]"></div>
                
                <div class="flex items-center gap-4 mb-8">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-brand-ink">M-Pesa Mobile Money</h3>
                        <p class="text-sm text-brand-muted">Direct instant contribution</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Detail Item: Paybill -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 rounded-2xl border border-slate-100 bg-slate-50/50 p-4 transition-colors hover:bg-slate-50">
                        <div>
                            <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Paybill Number</span>
                            <span class="mt-1 block text-xl font-extrabold text-brand-ink">123456</span>
                        </div>
                        <button id="copy-paybill" onclick="copyToClipboard('123456', 'copy-paybill')" class="inline-flex items-center gap-1.5 self-start sm:self-center rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                            <span>Copy</span>
                        </button>
                    </div>

                    <!-- Detail Item: Account Name -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 rounded-2xl border border-slate-100 bg-slate-50/50 p-4 transition-colors hover:bg-slate-50">
                        <div>
                            <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Account Number</span>
                            <span class="mt-1 block text-lg font-bold text-brand-ink">KidsWithSolution</span>
                        </div>
                        <button id="copy-account" onclick="copyToClipboard('KidsWithSolution', 'copy-account')" class="inline-flex items-center gap-1.5 self-start sm:self-center rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                            <span>Copy</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bank Transfer Card -->
            <div class="group relative rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:border-brand-blue/30 hover:shadow-[0_20px_50px_rgba(31,78,121,0.08)]">
                <!-- Top Accent Line -->
                <div class="absolute inset-x-0 top-0 h-1.5 bg-brand-blue rounded-t-[2rem]"></div>

                <div class="flex items-center gap-4 mb-8">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-sky-50 text-brand-blue">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-brand-ink">Bank Wire Transfer</h3>
                        <p class="text-sm text-brand-muted">Local & international transfer options</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Common Details Grouped -->
                    <div class="grid gap-4 sm:grid-cols-2">
                        <!-- Detail Item: Bank Name -->
                        <div class="flex flex-col justify-between gap-1 rounded-2xl border border-slate-100 bg-slate-50/50 p-4 transition-colors hover:bg-slate-50">
                            <div>
                                <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Bank Name</span>
                                <span class="mt-1 block text-base font-bold text-brand-ink">ABSA BANK KENYA PLC</span>
                            </div>
                            <button id="copy-bank" onclick="copyToClipboard('ABSA BANK KENYA PLC', 'copy-bank')" class="mt-3 inline-flex items-center gap-1.5 self-start rounded-xl border border-slate-200 bg-white px-3 py-1.5 text-xs font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                                <span>Copy</span>
                            </button>
                        </div>

                        <!-- Detail Item: Account Name -->
                        <div class="flex flex-col justify-between gap-1 rounded-2xl border border-slate-100 bg-slate-50/50 p-4 transition-colors hover:bg-slate-50">
                            <div>
                                <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Account Name</span>
                                <span class="mt-1 block text-base font-bold text-brand-ink leading-tight">KIDS WITH SOLUTIONS FOUNDATION</span>
                            </div>
                            <button id="copy-account-name" onclick="copyToClipboard('KIDS WITH SOLUTIONS FOUNDATION', 'copy-account-name')" class="mt-3 inline-flex items-center gap-1.5 self-start rounded-xl border border-slate-200 bg-white px-3 py-1.5 text-xs font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                                <span>Copy</span>
                            </button>
                        </div>
                    </div>

                    <!-- Accounts Grid -->
                    <div class="border-t border-slate-100 pt-6">
                        <p class="text-xs font-bold uppercase tracking-[0.15em] text-brand-blue mb-4">Select Currency Account</p>
                        
                        <div class="grid gap-4 sm:grid-cols-2">
                            <!-- KES Account -->
                            <div class="rounded-2xl border border-emerald-100 bg-emerald-50/30 p-5 flex flex-col justify-between transition-colors hover:bg-emerald-50/50">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-800">
                                            <span class="mr-1.5 text-sm">🇰🇪</span> KES Account
                                        </span>
                                        <span class="text-[10px] font-semibold uppercase tracking-wider text-emerald-600">Local Transfer</span>
                                    </div>
                                    <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Account Number</span>
                                    <span class="mt-1 block text-2xl font-extrabold tracking-wider text-brand-ink">2041467226</span>
                                </div>
                                <button id="copy-account-num-ke" onclick="copyToClipboard('2041467226', 'copy-account-num-ke')" class="mt-6 inline-flex items-center justify-center gap-1.5 w-full rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                    <span>Copy KES Number</span>
                                </button>
                            </div>

                            <!-- USD Account -->
                            <div class="rounded-2xl border border-blue-100 bg-blue-50/30 p-5 flex flex-col justify-between transition-colors hover:bg-blue-50/50">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="inline-flex items-center rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-800">
                                            <span class="mr-1.5 text-sm">🇺🇸</span> USD Account
                                        </span>
                                        <span class="text-[10px] font-semibold uppercase tracking-wider text-blue-600">International</span>
                                    </div>
                                    <span class="block text-xs font-semibold uppercase tracking-[0.1em] text-brand-muted">Account Number</span>
                                    <span class="mt-1 block text-2xl font-extrabold tracking-wider text-brand-ink">2041467218</span>
                                </div>
                                <button id="copy-account-num-us" onclick="copyToClipboard('2041467218', 'copy-account-num-us')" class="mt-6 inline-flex items-center justify-center gap-1.5 w-full rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-600 transition-all hover:bg-slate-50 hover:text-brand-blue shadow-sm cursor-pointer">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                    </svg>
                                    <span>Copy USD Number</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-surface py-20 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-amber">Beyond Financial Giving</p>
            <h2 class="mt-4 text-3xl font-extrabold text-brand-ink sm:text-4xl">Support Can Take More Than One Form</h2>
            <p class="mt-4 text-lg text-brand-muted">Sustaining our reach requires diverse contributions. Explore how you can support KWSF in other meaningful ways.</p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Sponsor Training -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:shadow-md">
                <div class="h-12 w-12 rounded-2xl bg-amber-50 text-brand-amber flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-brand-ink mb-2">Sponsor Digital Skills Training</h3>
                <p class="text-sm text-brand-muted leading-relaxed">Directly fund program fees, curriculum development, and instruction costs for learners who face barriers.</p>
            </div>

            <!-- Provide Laptops & Equipment -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:shadow-md">
                <div class="h-12 w-12 rounded-2xl bg-emerald-50 text-brand-green flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-brand-ink mb-2">Provide Laptops & Hardware</h3>
                <p class="text-sm text-brand-muted leading-relaxed">Donate laptops, desktop units, robotics kits, and networking equipment to outfit our learning hubs.</p>
            </div>

            <!-- Offer Learning Space -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:shadow-md">
                <div class="h-12 w-12 rounded-2xl bg-sky-50 text-brand-blue flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-brand-ink mb-2">Offer a Suitable Learning Space</h3>
                <p class="text-sm text-brand-muted leading-relaxed">Provide safe, clean community or institutional spaces with power and desk setups where training can take place.</p>
            </div>

            <!-- Community & School Partnerships -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:shadow-md">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-brand-ink mb-2">School & Institutional Partnerships</h3>
                <p class="text-sm text-brand-muted leading-relaxed">Integrate KWSF programs into your school, institute, community center, or company outreach plan.</p>
            </div>

            <!-- Volunteer Support -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:shadow-md sm:col-span-2 lg:col-span-2">
                <div class="h-12 w-12 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-brand-ink mb-2">Volunteer Time & Specialist Support</h3>
                <p class="text-sm text-brand-muted leading-relaxed">Offer mentoring, project feedback, or administrative/technical expertise to support our students and operations.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-blue py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Partner with purpose</p>
            <h2 class="mt-3 text-3xl font-extrabold">Help young people gain the skills and tools to thrive.</h2>
        </div>
        <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Partner With Us</a>
    </div>
</section>

<script>
function copyToClipboard(text, buttonId) {
    navigator.clipboard.writeText(text).then(function() {
        const btn = document.getElementById(buttonId);
        if (!btn) return;
        
        const originalContent = btn.innerHTML;
        
        btn.innerHTML = `
            <svg class="h-4 w-4 text-emerald-600 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-xs font-bold text-emerald-600">Copied!</span>
        `;
        btn.classList.remove('bg-white', 'text-slate-600', 'hover:bg-slate-50', 'hover:text-brand-blue');
        btn.classList.add('bg-emerald-50', 'border-emerald-200');
        
        setTimeout(function() {
            btn.innerHTML = originalContent;
            btn.classList.add('bg-white', 'text-slate-600', 'hover:bg-slate-50', 'hover:text-brand-blue');
            btn.classList.remove('bg-emerald-50', 'border-emerald-200');
        }, 2000);
    }).catch(function(err) {
        console.error('Failed to copy text: ', err);
    });
}
</script>
