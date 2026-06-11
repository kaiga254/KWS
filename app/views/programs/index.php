<?php
$programs = [
    [
        'title' => 'Digital Literacy',
        'description' => 'Practical foundations for using computers and digital tools with greater confidence.',
        'outcomes' => [
            'Core computer and digital literacy skills',
            'Confidence using technology for learning',
            'Responsible digital habits',
        ],
        'image' => $baseUrl . '/img/illustrations/program-digital-literacy.jpg',
        'accent' => 'text-brand-blue bg-brand-blue/10',
    ],
    [
        'title' => 'Coding & Robotics',
        'description' => 'Hands-on projects that develop logic, creativity, experimentation, and teamwork.',
        'outcomes' => [
            'Introduction to coding concepts',
            'Practical robotics activities',
            'Creative problem-solving through projects',
        ],
        'image' => $baseUrl . '/img/illustrations/program-coding-robotics.jpg',
        'accent' => 'text-brand-green bg-brand-green/10',
    ],
    [
        'title' => 'Financial Literacy',
        'description' => 'Learning experiences that help young people make more thoughtful financial decisions.',
        'outcomes' => [
            'Everyday financial literacy foundations',
            'Confidence discussing money decisions',
            'Practical habits for informed choices',
        ],
        'image' => $baseUrl . '/img/illustrations/program-financial-literacy.jpg',
        'accent' => 'text-brand-amber bg-brand-amber/10',
    ],
    [
        'title' => 'Leadership & Innovation',
        'description' => 'A design-thinking approach that helps young people see themselves as solution providers.',
        'outcomes' => [
            'Questioning and observation skills',
            'Creating and experimenting with ideas',
            'Networking, reflection, and improvement',
        ],
        'image' => $baseUrl . '/img/illustrations/program-design-thinking.jpg',
        'accent' => 'text-brand-blue bg-brand-blue/10',
    ],
];

$faqItems = [
    [
        'question' => 'What ages can join?',
        'answer' => 'The supplied organization materials do not specify current age bands. Contact KWSF for the approved intake criteria for each active program.',
    ],
    [
        'question' => 'Where and when do sessions run?',
        'answer' => 'Schedules, venues, and delivery formats should be confirmed for each intake. Register your interest or contact KWSF for current details.',
    ],
    [
        'question' => 'How much does a program cost?',
        'answer' => 'Current fees and any sponsored-place criteria should be published by KWSF before enrollment. Contact the team for verified information.',
    ],
    [
        'question' => 'Can a school or community organization partner with KWSF?',
        'answer' => 'Yes. The KWSF materials describe partnerships as an important part of delivery. Contact the team to discuss a school, institute, company, or community partnership.',
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
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/90 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Programs</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Practical learning for confident young solution providers.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">KWSF combines digital, financial, and innovation learning to help young people develop skills they can carry into school, work, and everyday life.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Enroll a Learner</a>
                <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink shadow-sm transition-colors hover:border-brand-blue hover:text-brand-blue">Ask About Current Intakes</a>
            </div>
        </div>
        <div></div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Our programs</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">We a offfer a connected set of skills for the 21st century</h2>
            <!-- <p class="mt-4 text-base leading-8 text-brand-muted">These program areas come directly from the supplied KWSF profile and pitch deck. Current schedules, venues, fees, and learner age bands still need to be confirmed for publication.</p> -->
        </div>

        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <?php foreach ($programs as $program): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
                    <img src="<?php echo htmlspecialchars($program['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?> illustration" class="h-64 w-full object-cover">
                    <div class="p-7">
                        <!-- <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold <?php echo $program['accent']; ?>">Program area</span> -->
                        <h3 class="mt-5 text-2xl font-bold text-brand-ink"><?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($program['description'], ENT_QUOTES); ?></p>
                        <ul class="mt-5 space-y-3 text-sm leading-7 text-slate-700">
                            <?php foreach ($program['outcomes'] as $outcome): ?>
                                <li class="flex gap-3"><span class="mt-1 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-green/10 text-brand-green">&#10003;</span><span><?php echo htmlspecialchars($outcome, ENT_QUOTES); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo $baseUrl; ?>/register" class="mt-6 inline-flex rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white">Register Interest</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <!-- TODO: Add approved age bands, curriculum detail, schedules, venues, fees, and sponsored-place criteria. -->
    </div>
</section>


<section class="bg-brand-surface py-24 overflow-hidden border-t border-slate-100">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
        <!-- Sticky Left Column: Title and SVG Diagram -->
        <div class="lg:sticky lg:top-28 self-start">
            <p class="text-xs font-bold uppercase tracking-[0.25em] text-brand-blue bg-brand-blue/5 inline-flex px-3 py-1.5 rounded-full">KWSF Teaching Approach</p>
            <h2 class="mt-6 text-3xl font-extrabold tracking-tight text-brand-ink sm:text-4xl">Discover. Imagine. Create. Evolve.</h2>
            <p class="mt-4 text-base leading-relaxed text-brand-muted max-w-md">KWSF uses an interactive, design-thinking based methodology to nurture critical thinking and hands-on skills that drive youth-led innovation.</p>
            
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
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Explore real-world challenges, ask critical questions, and gather foundational insights about the community and environment.</p>
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
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Think creatively beyond boundaries, brainstorm unique approaches, and sketch potential visual or logical solutions.</p>
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
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Build, write, prototype, and refine. Transform concepts into functioning software, digital assets, or physical mechanisms.</p>
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
                        <p class="mt-3 text-sm leading-relaxed text-brand-muted">Evaluate feedback, analyze results, scale functionality, and iterate to adapt the solution for wider impact.</p>
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

<!-- <section class="bg-white py-20">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Program questions</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Get the details you need before enrollment</h2>
        </div>
        <div class="mt-10 space-y-4">
            <?php foreach ($faqItems as $item): ?>
                <div class="rounded-2xl border border-slate-200 bg-brand-surface p-6">
                    <h3 class="text-lg font-bold text-brand-ink"><?php echo htmlspecialchars($item['question'], ENT_QUOTES); ?></h3>
                    <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($item['answer'], ENT_QUOTES); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<section class="bg-brand-blue py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Ready to take the next step?</p>
            <h2 class="mt-3 text-3xl font-extrabold">Register interest or talk to KWSF about a partnership.</h2>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white">Enroll a Learner</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full border border-white/20 px-7 py-4 text-base font-semibold text-white">Partner With Us</a>
        </div>
    </div>
</section>
