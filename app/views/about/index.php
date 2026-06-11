<?php

$values = [
    [
        'title' => 'Creativity',
        'description' => 'We encourage young people to question, observe, imagine, create, and improve.',
    ],
    [
        'title' => 'Integrity',
        'description' => 'We want our work, partnerships, and communication to be clear and responsible.',
    ],
    [
        'title' => 'Professionalism',
        'description' => 'We aim to deliver structured learning experiences that families and partners can understand.',
    ],
    [
        'title' => 'Access',
        'description' => 'We focus on helping level the playing field for young people who face barriers to opportunity.',
    ],
];
?>

<section class="relative overflow-hidden pattern-bg bg-brand-surface border-b border-slate-200/60 py-16 sm:py-20 lg:py-24">
    <!-- Background image and overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $baseUrl; ?>/img/illustrations/hero-learning-hub.jpg" alt="Young learners working with laptops and a robotics kit" class="h-full w-full object-cover object-right opacity-90 lg:opacity-100">
        <!-- Subtle overlay to integrate the image with the brand surface and guarantee text accessibility -->
        <div class="absolute inset-0 bg-brand-surface/30 lg:bg-gradient-to-r lg:from-brand-surface lg:via-brand-surface/85 lg:to-transparent"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/90 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">About KWSF</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">We are a social enterprise helping young people build the skills to shape their future.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Kids With Solutions Foundation, Ltd. was founded in 2018 and registered in Kenya in 2019 as a company limited by guarantee under the Companies Act, 2015. KWSF was created to equip young people with practical skills and tools that can strengthen confidence and open pathways to opportunity in the 21st century.</p>
        </div>
        <div></div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Our mission</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Equip young people with the skills and tools to thrive in the 21st century.</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">KWSF works to empower a youthful generation with digital literacy, financial literacy, leadership, and innovation skills that can support learning, confidence, and long-term opportunity.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-8 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/65">Our vision</p>
                <h2 class="mt-3 text-3xl font-extrabold text-white">Use technology to help level the playing field.</h2>
                <p class="mt-4 text-base leading-8 text-white/75">KWSF envisions young people in underprivileged communities across Africa and beyond having more room to pursue their dreams through creativity, integrity, and professionalism.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-surface py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Why KWSF</p>
        <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">KWSF focuses on closing opportunity gaps through practical learning</h2>
            <p class="mt-4 text-base leading-8 text-brand-muted">KWSF is build on the fundamental belief that young people should not miss out on technology education because of access disparities. Our focus is on communities that face barriers to quality technology and financial literacy.</p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($values as $value): ?>
                <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-soft">
                    <h3 class="text-xl font-bold text-brand-ink"><?php echo htmlspecialchars($value['title'], ENT_QUOTES); ?></h3>
                    <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($value['description'], ENT_QUOTES); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Founder Story (Full width banner card) -->
        <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8 md:p-12 shadow-soft">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Founder story</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">A practical response to unequal access</h2>
            <p class="mt-6 text-lg leading-8 text-brand-muted max-w-4xl">The KWSF pitch deck identifies Patricia Mulinya as the founder and CEO. It explains that the foundation was inspired by the need to give more Kenyan children an opportunity to become technologically capable, especially where access to technology education remained limited.</p>
        </div>

        <!-- Founders Grid -->
        <div class="mt-16">
            <div class="text-center mb-12">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Leadership</p>
                <h3 class="mt-3 text-3xl font-extrabold text-brand-ink">Meet Our Founders & Directors</h3>
                <p class="mt-4 text-base text-brand-muted max-w-2xl mx-auto">The dedicated team driving digital literacy, financial capability, and practical innovation for the youth.</p>
            </div>
            
            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card 1 -->
                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative overflow-hidden h-72 w-full">
                        <img src="<?php echo $baseUrl; ?>/img/founders/dir-1.jpg" alt="Patricia Mulinya" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-blue">Patricia Mulinya</h4>
                        <p class="mt-1.5 text-xs font-bold uppercase tracking-[0.2em] text-brand-blue">Managing Director & CEO</p>
                        <p class="mt-4 text-sm leading-6 text-brand-muted">Responsible for Client Recruitment, Sales and Marketing and Operations. She is also involved in supervision and motivation of the staff.</p>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative overflow-hidden h-72 w-full">
                        <img src="<?php echo $baseUrl; ?>/img/founders/dir-2.jpg" alt="Brian Muchiri" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-blue">Brian Muchiri</h4>
                        <p class="mt-1.5 text-xs font-bold uppercase tracking-[0.2em] text-brand-blue">Chairman & Special Programs Director</p>
                        <p class="mt-4 text-sm leading-6 text-brand-muted">Responsible in generating new business leads by leveraging on existing relationships, prospecting, conducting market analysis and launching campaigns in prospective markets.</p>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative overflow-hidden h-72 w-full">
                        <img src="<?php echo $baseUrl; ?>/img/founders/dir-3.jpg" alt="Loise Machira" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-blue">Loise Machira</h4>
                        <p class="mt-1.5 text-xs font-bold uppercase tracking-[0.2em] text-brand-blue">Communication & Resource Director</p>
                        <p class="mt-4 text-sm leading-6 text-brand-muted">Oversees internal and external communications, public relations, community engagement, and manages fundraising and resource development efforts to support KWSF's mission.</p>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative overflow-hidden h-72 w-full">
                        <img src="<?php echo $baseUrl; ?>/img/founders/dir-4.jpg" alt="Samuel Kihara" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-blue">Samuel Kihara</h4>
                        <p class="mt-1.5 text-xs font-bold uppercase tracking-[0.2em] text-brand-blue">Smart & IT Innovation Director</p>
                        <p class="mt-4 text-sm leading-6 text-brand-muted">Drives technology strategy, leads curriculum development for coding and robotics programs, and implements innovative IT solutions to enhance learning outcomes for children.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-blue py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/65">Work with KWSF</p>
            <h2 class="mt-3 text-3xl font-extrabold">Help expand access to practical IT and innovation skills.</h2>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo $baseUrl; ?>/donate" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-4 text-base font-bold text-brand-blue">Support Our Work</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full border border-white/20 px-7 py-4 text-base font-semibold text-white">Partner With Us</a>
        </div>
    </div>
</section>
