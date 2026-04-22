<?php
$programs = [
    [
        'title' => 'Digital Foundations',
        'tag' => 'Beginner',
        'age' => '6-9 years',
        'duration' => '4 weeks',
        'schedule' => 'Saturday mornings',
        'location' => 'Partner school labs',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => [
            'Keyboard and mouse confidence',
            'Intro to devices and safe browsing',
            'Simple problem-solving and digital etiquette',
        ],
        'image' => $baseUrl . '/img/programs/basic_computer_skills.jpeg',
        'accent' => 'text-brand-blue bg-brand-blue/10',
    ],
    [
        'title' => 'Coding for Kids',
        'tag' => 'Intermediate',
        'age' => '10-13 years',
        'duration' => '8 weeks',
        'schedule' => 'After-school sessions',
        'location' => 'Foundation learning hub',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => [
            'Scratch logic and project building',
            'HTML and CSS introduction',
            'Creative thinking and collaboration',
        ],
        'image' => $baseUrl . '/img/programs/coding_for_kids.jpeg',
        'accent' => 'text-brand-green bg-brand-green/10',
    ],
    [
        'title' => 'Digital Literacy & Safety',
        'tag' => 'All levels',
        'age' => '13-17 years',
        'duration' => '2 weeks',
        'schedule' => 'Holiday bootcamp',
        'location' => 'School or community venue',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => [
            'Online safety and privacy habits',
            'Cyberbullying awareness and response',
            'Responsible digital footprint management',
        ],
        'image' => $baseUrl . '/img/programs/digital_literacy.jpeg',
        'accent' => 'text-brand-amber bg-brand-amber/10',
    ],
];

$faqItems = [
    [
        'question' => 'Does my child need computer experience before joining?',
        'answer' => 'No. We have beginner-friendly pathways and support every learner according to age and experience.',
    ],
    [
        'question' => 'How large are the classes?',
        'answer' => 'Classes are intentionally kept small so instructors can guide children closely and answer questions in real time.',
    ],
    [
        'question' => 'What do parents receive after registration?',
        'answer' => 'Our team shares cohort details, start dates, and next-step information so you always know what happens next.',
    ],
    [
        'question' => 'Can I talk to someone before I register?',
        'answer' => 'Yes. Contact us and we will help you select the right track and answer any safety or schedule questions.',
    ],
];
?>

<section class="bg-brand-surface pattern-bg">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
        <div>
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Programs / Bootcamps</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Choose a bootcamp that matches your child’s age, pace, and interests.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Each program is designed to be easy for parents to compare and easy for children to enjoy. You get a clear age range, learning outcome, schedule, location, and intake fee guidance before you register.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft">Register Now</a>
                <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink">Ask a Question</a>
            </div>
        </div>

        <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
            <img src="<?php echo $baseUrl; ?>/img/hero/programs.jpeg" alt="Children learning in a guided bootcamp" class="h-[380px] w-full object-cover">
            <div class="grid gap-4 border-t border-slate-200 p-6 sm:grid-cols-3">
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Parent focus</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Simple decisions</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Child focus</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Practical learning</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Trust focus</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Safe cohort setup</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3">
            <?php foreach ($programs as $program): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
                    <img src="<?php echo htmlspecialchars($program['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?>" class="h-56 w-full object-cover">
                    <div class="p-7">
                        <div class="flex items-center justify-between gap-4">
                            <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold <?php echo $program['accent']; ?>"><?php echo htmlspecialchars($program['tag'], ENT_QUOTES); ?></span>
                            <span class="text-sm font-semibold text-brand-muted"><?php echo htmlspecialchars($program['duration'], ENT_QUOTES); ?></span>
                        </div>
                        <h2 class="mt-5 text-2xl font-bold text-brand-ink"><?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?></h2>
                        <p class="mt-2 text-sm font-semibold text-brand-muted">Age group: <?php echo htmlspecialchars($program['age'], ENT_QUOTES); ?></p>
                        <ul class="mt-5 space-y-3 text-sm leading-7 text-slate-700">
                            <?php foreach ($program['outcomes'] as $outcome): ?>
                                <li class="flex gap-3"><span class="mt-1 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-green/10 text-brand-green">✓</span><span><?php echo htmlspecialchars($outcome, ENT_QUOTES); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <dl class="mt-6 space-y-3 text-sm text-slate-700">
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><dt class="text-slate-500">Schedule</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['schedule'], ENT_QUOTES); ?></dd></div>
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><dt class="text-slate-500">Location</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['location'], ENT_QUOTES); ?></dd></div>
                            <div class="flex justify-between gap-4"><dt class="text-slate-500">Pricing</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['pricing'], ENT_QUOTES); ?></dd></div>
                        </dl>
                        <a href="<?php echo $baseUrl; ?>/register" class="mt-6 inline-flex w-full items-center justify-center rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white">Register Now</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<section class="bg-white py-20">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">FAQ</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Common program questions</h2>
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
</section>

<section class="bg-brand-ink py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Need help deciding?</p>
            <h2 class="mt-3 text-3xl font-extrabold">Talk to us before you register.</h2>
            <p class="mt-4 text-white/75">We can recommend the right bootcamp based on age, experience, and what your child needs most.</p>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-4 text-base font-bold text-brand-blue">Contact Our Team</a>
            <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full border border-white/20 px-7 py-4 text-base font-semibold text-white">Register Now</a>
        </div>
    </div>
</section>
