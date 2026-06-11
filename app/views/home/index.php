<?php
$programs = [
    [
        'title' => 'Digital Literacy',
        'description' => 'Build practical confidence with computers, digital tools, and responsible technology use.',
        'focus' => 'Access, confidence, and practical foundations',
        'image' => $baseUrl . '/img/illustrations/program-digital-literacy.jpg',
    ],
    [
        'title' => 'Coding & Robotics',
        'description' => 'Encourage problem-solving and creativity through hands-on technology projects.',
        'focus' => 'Experimentation, logic, and collaboration',
        'image' => $baseUrl . '/img/illustrations/program-coding-robotics.jpg',
    ],
    [
        'title' => 'Financial Literacy',
        'description' => 'Help young people build the knowledge needed to make thoughtful financial decisions.',
        'focus' => 'Everyday money skills and informed choices',
        'image' => $baseUrl . '/img/illustrations/program-financial-literacy.jpg',
    ],
    [
        'title' => 'Leadership & Innovation',
        'description' => 'Nurture questioning, observation, creation, experimentation, and networking skills.',
        'focus' => 'Discover, Imagine, Create, and Evolve',
        'image' => $baseUrl . '/img/illustrations/program-design-thinking.jpg',
    ],
];

$faqs = [
    [
        'question' => 'Who are the programs designed for?',
        'answer' => 'KWSF focuses on children and young people, with particular attention to communities that face barriers to quality digital and financial literacy education.',
    ],
    [
        'question' => 'Which program is right for a learner?',
        'answer' => 'Our programs are designed to support learners at different ages and skill levels, from foundational digital literacy to coding, robotics, financial literacy, and innovation. If you are unsure where to begin, contact our team and we will help identify the most suitable learning pathway based on the learner’s interests, goals, and experience.',
    ],
    [
        'question' => 'How does KWSF approach learner safety?',
        'answer' => 'The safety and well-being of every learner is a priority. KWSF provides a respectful, inclusive, and age-appropriate learning environment guided by safeguarding practices that promote learner protection, positive engagement, and responsible supervision throughout all programs and activities.',
    ],
    [
        'question' => 'How can an organization support the work?',
        'answer' => 'Organizations can partner with KWSF to expand opportunities for young people through funding, technology resources, learning materials, mentorship, volunteer support, or strategic collaborations. We welcome partnerships that help increase access to quality digital and innovation education for underserved communities.'
    ],
];
?>

<section class="relative overflow-hidden pattern-bg bg-brand-surface border-b border-slate-200/60 py-16 sm:py-20 lg:py-24">
    <!-- Background image and overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $baseUrl; ?>/img/illustrations/hero-learning-hub.jpg" alt="Young learners exploring laptops and robotics with a mentor" class="h-full w-full object-cover object-right opacity-90 lg:opacity-100">
        <!-- Subtle overlay to integrate the image with the brand surface and guarantee text accessibility -->
        <div class="absolute inset-0 bg-brand-surface/30 lg:bg-gradient-to-r lg:from-brand-surface lg:via-brand-surface/85 lg:to-transparent"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/85 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Kids With Solutions Foundation</p>
            <h1 class="mt-5 max-w-3xl text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl lg:text-6xl">Empowering young minds with skills for tomorrow.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Kids With Solutions Foundation, Ltd. is a Kenyan social enterprise helping young people in underserved communities build digital literacy, financial literacy, coding, robotics, and innovation skills. We focus on the tools learners need to pursue opportunity with confidence.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Enroll a Learner</a>
                <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink transition-colors hover:border-brand-blue hover:text-brand-blue shadow-sm">Learn About Our Programs</a>
            </div>
        </div>

        <!-- <div class="lg:flex lg:justify-end">
            <div class="w-full max-w-md rounded-[2rem] border border-slate-200 bg-white/85 p-8 backdrop-blur-md shadow-soft transition-transform duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-green/10 text-brand-green">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </span>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-brand-green">Our purpose</p>
                </div>
                <p class="mt-4 text-xl font-bold leading-snug text-brand-ink">Equip young people with the skills and tools to thrive in the 21st century.</p>
                <p class="mt-3 text-sm leading-relaxed text-brand-muted">Through hands-on training, mentorship, and community-centered initiatives, we prepare students for future digital and economic opportunities.</p>
            </div>
        </div> -->
    </div>
</section>



<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div class="max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Program areas</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">Skills that help young people learn, create, and adapt</h2>
                <p class="mt-4 text-lg leading-8 text-brand-muted">KWSF combines practical learning with a design-thinking mindset so learners can grow from technology users into confident problem-solvers.</p>
            </div>
            <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue">View program details <span aria-hidden="true">&rarr;</span></a>
        </div>

        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <?php foreach ($programs as $program): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="<?php echo htmlspecialchars($program['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?> illustration" class="h-64 w-full object-cover">
                    <div class="p-7">
                        <h3 class="text-2xl font-bold text-brand-ink"><?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($program['description'], ENT_QUOTES); ?></p>
                        <p class="mt-5 text-sm font-semibold text-brand-blue"><?php echo htmlspecialchars($program['focus'], ENT_QUOTES); ?></p>
                        <a href="<?php echo $baseUrl; ?>/register" class="mt-6 inline-flex rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Register Interest</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="bg-brand-surface py-24 overflow-hidden border-t border-slate-100">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
        <!-- Sticky Left Column: Title and SVG Diagram -->
        <div class="lg:sticky lg:top-28 self-start">
            <p class="text-xs font-bold uppercase tracking-[0.25em] text-brand-blue bg-brand-blue/5 inline-flex px-3 py-1.5 rounded-full">How Learning Develops</p>
            <h2 class="mt-6 text-3xl font-extrabold tracking-tight text-brand-ink sm:text-4xl">Our four-step approach to innovation</h2>
            <p class="mt-4 text-base leading-relaxed text-brand-muted max-w-md">At KWSF, we cultivate a design-thinking approach that develops questioning, observation, creation, experimentation, and networking skills.</p>
            
            <!-- Interactive SVG Circular Diagram -->
            <div class="relative mt-12 hidden lg:flex items-center justify-center p-4 bg-white rounded-3xl border border-slate-100 shadow-soft max-w-[360px] mx-auto">
                <svg viewBox="0 0 200 200" class="w-full h-auto overflow-visible select-none">
                    <defs>
                        <marker id="arrow-discover" viewBox="0 0 10 10" refX="22" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#1f4e79" />
                        </marker>
                        <marker id="arrow-imagine" viewBox="0 0 10 10" refX="22" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#8b5cf6" />
                        </marker>
                        <marker id="arrow-create" viewBox="0 0 10 10" refX="22" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#2f855a" />
                        </marker>
                        <marker id="arrow-evolve" viewBox="0 0 10 10" refX="22" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#d97706" />
                        </marker>
                        <marker id="arrow-default" viewBox="0 0 10 10" refX="22" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#cbd5e1" />
                        </marker>
                    </defs>

                    <!-- Background Dotted Ring -->
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#f1f5f9" stroke-width="4" />
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#e2e8f0" stroke-width="1.5" stroke-dasharray="4 4" />

                    <!-- Connecting Paths -->
                    <path id="svg-path-discover" d="M 100 30 A 70 70 0 0 1 170 100" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" marker-end="url(#arrow-default)" class="cycle-path" />
                    <path id="svg-path-imagine" d="M 170 100 A 70 70 0 0 1 100 170" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" marker-end="url(#arrow-default)" class="cycle-path" />
                    <path id="svg-path-create" d="M 100 170 A 70 70 0 0 1 30 100" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" marker-end="url(#arrow-default)" class="cycle-path" />
                    <path id="svg-path-evolve" d="M 30 100 A 70 70 0 0 1 100 30" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" marker-end="url(#arrow-default)" class="cycle-path" />

                    <!-- Central Hub -->
                    <circle cx="100" cy="100" r="24" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1.5" />
                    <text x="100" y="97" font-size="5" font-weight="800" letter-spacing="0.05em" fill="#94a3b8" text-anchor="middle">KWSF</text>
                    <text x="100" y="105" font-size="5" font-weight="800" letter-spacing="0.05em" fill="#1f4e79" text-anchor="middle">CYCLE</text>

                    <!-- Node 1: Discover -->
                    <g id="svg-node-discover" class="cycle-node" data-step="discover">
                        <circle cx="100" cy="30" r="16" fill="#ffffff" stroke="#cbd5e1" stroke-width="1.5" />
                        <text x="100" y="34" font-size="10" font-weight="bold" text-anchor="middle" fill="#64748b">01</text>
                        <text x="100" y="9" font-size="6" font-weight="bold" letter-spacing="0.05em" fill="#64748b" text-anchor="middle" class="cycle-text">DISCOVER</text>
                    </g>

                    <!-- Node 2: Imagine -->
                    <g id="svg-node-imagine" class="cycle-node" data-step="imagine">
                        <circle cx="170" cy="100" r="16" fill="#ffffff" stroke="#cbd5e1" stroke-width="1.5" />
                        <text x="170" y="104" font-size="10" font-weight="bold" text-anchor="middle" fill="#64748b">02</text>
                        <text x="170" y="123" font-size="6" font-weight="bold" letter-spacing="0.05em" fill="#64748b" text-anchor="middle" class="cycle-text">IMAGINE</text>
                    </g>

                    <!-- Node 3: Create -->
                    <g id="svg-node-create" class="cycle-node" data-step="create">
                        <circle cx="100" cy="170" r="16" fill="#ffffff" stroke="#cbd5e1" stroke-width="1.5" />
                        <text x="100" y="174" font-size="10" font-weight="bold" text-anchor="middle" fill="#64748b">03</text>
                        <text x="100" y="193" font-size="6" font-weight="bold" letter-spacing="0.05em" fill="#64748b" text-anchor="middle" class="cycle-text">CREATE</text>
                    </g>

                    <!-- Node 4: Evolve -->
                    <g id="svg-node-evolve" class="cycle-node" data-step="evolve">
                        <circle cx="30" cy="100" r="16" fill="#ffffff" stroke="#cbd5e1" stroke-width="1.5" />
                        <text x="30" y="104" font-size="10" font-weight="bold" text-anchor="middle" fill="#64748b">04</text>
                        <text x="30" y="123" font-size="6" font-weight="bold" letter-spacing="0.05em" fill="#64748b" text-anchor="middle" class="cycle-text">EVOLVE</text>
                    </g>
                </svg>
            </div>
        </div>

        <!-- Right Column: Vertical Timeline Stack -->
        <div class="relative border-l-2 border-dashed border-slate-200 pl-8 ml-4 lg:ml-12 space-y-8 py-2">
            <!-- Card 1: Discover -->
            <div id="card-discover" class="step-card step-card-discover group relative rounded-3xl border border-slate-200 bg-white p-8 shadow-soft" data-step="discover">
                <!-- Timeline Dot -->
                <div class="timeline-dot absolute -left-[42px] top-1/2 -translate-y-1/2 h-5 w-5 rounded-full border-4 border-slate-100 bg-slate-300 shadow-sm"></div>
                
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <!-- Icon -->
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-brand-blue/10 text-brand-blue transition-all duration-300 group-hover:scale-110">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-blue">Discover</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Identify challenges, ask questions, and uncover opportunities.</p>
                    </div>
                </div>
                <!-- Large Background Number -->
                <span class="absolute top-4 right-6 text-6xl font-extrabold tracking-tight text-slate-100/70 select-none transition-colors duration-300 group-hover:text-brand-blue/5">01</span>
            </div>

            <!-- Card 2: Imagine -->
            <div id="card-imagine" class="step-card step-card-imagine group relative rounded-3xl border border-slate-200 bg-white p-8 shadow-soft" data-step="imagine">
                <!-- Timeline Dot -->
                <div class="timeline-dot absolute -left-[42px] top-1/2 -translate-y-1/2 h-5 w-5 rounded-full border-4 border-slate-100 bg-slate-300 shadow-sm"></div>
                
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <!-- Icon -->
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-purple-50 text-purple-600 transition-all duration-300 group-hover:scale-110">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-[#8b5cf6]">Imagine</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Generate creative ideas and envision innovative solutions.</p>
                    </div>
                </div>
                <!-- Large Background Number -->
                <span class="absolute top-4 right-6 text-6xl font-extrabold tracking-tight text-slate-100/70 select-none transition-colors duration-300 group-hover:text-[#8b5cf6]/5">02</span>
            </div>

            <!-- Card 3: Create -->
            <div id="card-create" class="step-card step-card-create group relative rounded-3xl border border-slate-200 bg-white p-8 shadow-soft" data-step="create">
                <!-- Timeline Dot -->
                <div class="timeline-dot absolute -left-[42px] top-1/2 -translate-y-1/2 h-5 w-5 rounded-full border-4 border-slate-100 bg-slate-300 shadow-sm"></div>
                
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <!-- Icon -->
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green transition-all duration-300 group-hover:scale-110">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-green">Create</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Design, build, and test solutions through hands-on learning.</p>
                    </div>
                </div>
                <!-- Large Background Number -->
                <span class="absolute top-4 right-6 text-6xl font-extrabold tracking-tight text-slate-100/70 select-none transition-colors duration-300 group-hover:text-brand-green/5">03</span>
            </div>

            <!-- Card 4: Evolve -->
            <div id="card-evolve" class="step-card step-card-evolve group relative rounded-3xl border border-slate-200 bg-white p-8 shadow-soft" data-step="evolve">
                <!-- Timeline Dot -->
                <div class="timeline-dot absolute -left-[42px] top-1/2 -translate-y-1/2 h-5 w-5 rounded-full border-4 border-slate-100 bg-slate-300 shadow-sm"></div>
                
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <!-- Icon -->
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-amber-50 text-brand-amber transition-all duration-300 group-hover:scale-110">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.21 7.89M9 11l3 3L22 4" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-brand-ink transition-colors duration-300 group-hover:text-brand-amber">Evolve</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Reflect, improve, and refine ideas through continuous learning.</p>
                    </div>
                </div>
                <!-- Large Background Number -->
                <span class="absolute top-4 right-6 text-6xl font-extrabold tracking-tight text-slate-100/70 select-none transition-colors duration-300 group-hover:text-brand-amber/5">04</span>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.step-card');
        const nodes = document.querySelectorAll('.cycle-node');

        const activeClasses = {
            discover: {
                node: 'node-active-discover',
                path: 'path-active-discover'
            },
            imagine: {
                node: 'node-active-imagine',
                path: 'path-active-imagine'
            },
            create: {
                node: 'node-active-create',
                path: 'path-active-create'
            },
            evolve: {
                node: 'node-active-evolve',
                path: 'path-active-evolve'
            }
        };

        const highlightStep = (step) => {
            // Remove active class from all nodes and paths
            Object.keys(activeClasses).forEach(key => {
                const nodeClass = activeClasses[key].node;
                const pathClass = activeClasses[key].path;
                document.getElementById(`svg-node-${key}`)?.classList.remove(nodeClass);
                document.getElementById(`svg-path-${key}`)?.classList.remove(pathClass);
            });

            // Add active class to target node and path
            if (step && activeClasses[step]) {
                const targetNode = document.getElementById(`svg-node-${step}`);
                const targetPath = document.getElementById(`svg-path-${step}`);
                targetNode?.classList.add(activeClasses[step].node);
                targetPath?.classList.add(activeClasses[step].path);
            }
        };

        // Hover listeners on step cards
        cards.forEach(card => {
            const step = card.dataset.step;
            card.addEventListener('mouseenter', () => {
                highlightStep(step);
            });
            card.addEventListener('mouseleave', () => {
                highlightStep(null);
            });
        });

        // Hover listeners on SVG nodes (bi-directional!)
        nodes.forEach(node => {
            const step = node.dataset.step;
            node.addEventListener('mouseenter', () => {
                highlightStep(step);
                const card = document.getElementById(`card-${step}`);
                if (card) {
                    card.classList.add(`js-active-${step}`);
                }
            });
            node.addEventListener('mouseleave', () => {
                highlightStep(null);
                const card = document.getElementById(`card-${step}`);
                if (card) {
                    card.classList.remove(`js-active-${step}`);
                }
            });
        });
    });
</script>

<section id="partners" class="scroll-mt-28 bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Our Trusted Partners</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">Working together to build digital and financial opportunities</h2>
            <p class="mt-4 text-lg leading-8 text-brand-muted">KWSF collaborates with leading academic institutions, community trusts, and organizations to scale access to high-quality skills training for young people.</p>
        </div>
        
        <div class="mt-12 grid grid-cols-2 gap-6 md:grid-cols-4 lg:gap-8">
            <?php 
            $partners = [
                ['name' => 'ACWICT', 'image' => 'ACWICT.jpg'],
                ['name' => 'Africa Ability Trust', 'image' => 'Africa Abilty Trust.jpg'],
                ['name' => 'OAKS', 'image' => 'OAKS.jpg'],
                ['name' => 'USIU-Africa', 'image' => 'usiu.png'],
                ['image' => 'MoFund Africa', 'image' => 'MFA.png'],
            ];
            foreach ($partners as $partner): 
            ?>
                <div class="group flex h-32 items-center justify-center rounded-2xl border border-slate-200/85 bg-white p-6 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:border-brand-blue/30 hover:shadow-md">
                    <img src="<?php echo $baseUrl; ?>/img/logos/<?php echo rawurlencode($partner['image']); ?>" 
                         alt="<?php echo htmlspecialchars($partner['name'], ENT_QUOTES); ?> logo" 
                         class="max-h-full max-w-full object-contain filter grayscale opacity-75 transition-all duration-300 group-hover:scale-105 group-hover:grayscale-0 group-hover:opacity-100">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- <section class="bg-white py-20">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Frequently asked questions</p>
            
        <div class="mt-10 space-y-4">
            <?php foreach ($faqs as $faq): ?>
                <div class="rounded-2xl border border-slate-200 bg-brand-surface p-6">
                    <h3 class="text-lg font-bold text-brand-ink"><?php echo htmlspecialchars($faq['question'], ENT_QUOTES); ?></h3>
                    <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($faq['answer'], ENT_QUOTES); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<section class="bg-brand-blue py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Build opportunity with us</p>
            <h2 class="mt-3 text-3xl font-extrabold">Enroll a learner, sponsor digital skills training, or partner with KWSF.</h2>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white">Enroll a Learner</a>
            <a href="<?php echo $baseUrl; ?>/donate" class="inline-flex items-center justify-center rounded-full border border-white/20 px-7 py-4 text-base font-semibold text-white">Support Our Work</a>
        </div>
    </div>
</section>
