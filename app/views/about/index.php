<?php
$highlights = [
    ['label' => 'Children reached', 'value' => '500+'],
    ['label' => 'Bootcamps delivered', 'value' => '25+'],
    ['label' => 'Partner schools', 'value' => '15+'],
];

$values = [
    [
        'title' => 'Trust',
        'description' => 'We communicate clearly with parents and keep every cohort structured and supervised.',
    ],
    [
        'title' => 'Clarity',
        'description' => 'Families see the age group, duration, and outcomes before they register.',
    ],
    [
        'title' => 'Growth',
        'description' => 'Children leave with practical digital skills they can use at school and at home.',
    ],
    [
        'title' => 'Safety',
        'description' => 'Learning content is age-appropriate and designed around child-friendly guidance.',
    ],
];

$team = [
    [
        'image' => $baseUrl . '/img/founders/dir-1.jpg',
        'role' => 'Program Director',
        'focus' => 'Parent communication, cohort planning, child safeguarding',
        'summary' => 'Oversees the learning experience and ensures every cohort stays organized, supportive, and parent-friendly.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-2.jpg',
        'role' => 'Lead Instructor',
        'focus' => 'Digital foundations, beginner support, practical teaching',
        'summary' => 'Guides children through core computer skills with a hands-on, calm, and patient teaching style.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-3.jpg',
        'role' => 'Learning Coach',
        'focus' => 'Coding exercises, feedback, learner confidence',
        'summary' => 'Supports children during class work and helps them build confidence as they complete projects.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-4.jpg',
        'role' => 'Community Liaison',
        'focus' => 'School partnerships, parent support, outreach',
        'summary' => 'Maintains relationships with schools and parents so communication stays simple and responsive.',
    ],
];
?>

<section class="bg-brand-surface pattern-bg">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">About Us</p>
                <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">A trusted learning partner for parents who want their children to thrive online.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Kids With Solution Foundation exists to make digital literacy practical, age-appropriate, and accessible. We help children build confidence with technology while giving parents the clarity they need to feel comfortable registering.</p>
                <div class="mt-8 grid gap-4 sm:grid-cols-3">
                    <?php foreach ($highlights as $highlight): ?>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-soft">
                            <p class="text-2xl font-extrabold text-brand-blue"><?php echo htmlspecialchars($highlight['value'], ENT_QUOTES); ?></p>
                            <p class="mt-1 text-sm text-brand-muted"><?php echo htmlspecialchars($highlight['label'], ENT_QUOTES); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
                <img src="<?php echo $baseUrl; ?>/img/hero/programs.jpeg" alt="Children learning in a guided technology session" class="h-[420px] w-full object-cover">
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Our mission</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Give every child a strong digital foundation.</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">Our programs focus on practical skills, not jargon. Children learn how to use technology safely, think creatively, and approach new tools with confidence. Parents get a straightforward picture of what is being taught and why it matters.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-8 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/65">Our approach</p>
                <ul class="mt-6 space-y-4 text-sm leading-7 text-white/85">
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15 font-bold">1</span><span>Small classes so each child can ask questions and practice with support.</span></li>
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15 font-bold">2</span><span>Clear outcomes that parents can understand without a technical background.</span></li>
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15 font-bold">3</span><span>Safe, structured learning spaces with a friendly team and parent communication.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-surface py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Values</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">What we stand for</h2>
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

<section id="instructors" class="bg-white py-20 scroll-mt-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Instructors</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">People parents can feel comfortable trusting with their children.</h2>
            <p class="mt-4 text-base leading-8 text-brand-muted">Our team brings together learning support, child-safe facilitation, community coordination, and parent communication so every cohort runs smoothly.</p>
        </div>

        <div class="mt-10 grid gap-6 lg:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($team as $member): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-brand-surface shadow-soft">
                    <img src="<?php echo htmlspecialchars($member['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($member['role'], ENT_QUOTES); ?>" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-brand-ink"><?php echo htmlspecialchars($member['role'], ENT_QUOTES); ?></h3>
                        <p class="mt-2 text-sm font-semibold text-brand-blue"><?php echo htmlspecialchars($member['focus'], ENT_QUOTES); ?></p>
                        <p class="mt-4 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($member['summary'], ENT_QUOTES); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-brand-surface py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[1.3fr_0.7fr] lg:items-start">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Parent trust</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">We are built to reduce decision stress.</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">Instead of vague promises, we show you the age band, the bootcamp length, the learning outcome, and the registration path. That keeps the process simple for busy parents and helps children enter a learning environment that fits them.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-8 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/65">Trust signals</p>
                <ul class="mt-6 space-y-4 text-sm leading-7 text-white/85">
                    <li>Partner school collaborations</li>
                    <li>Visible cohort structure and support</li>
                    <li>Parent-focused communication</li>
                    <li>Age-appropriate bootcamp design</li>
                </ul>
                <a href="<?php echo $baseUrl; ?>/register" class="mt-8 inline-flex rounded-full bg-white px-6 py-3 text-sm font-bold text-brand-blue">Register Now</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-7 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Parents</p>
                <p class="mt-3 text-base leading-8 text-brand-muted">See what your child will learn and why it matters before you commit.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-7 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Children</p>
                <p class="mt-3 text-base leading-8 text-brand-muted">Enjoy hands-on, practical learning in a supportive environment.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-7 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-amber">Schools</p>
                <p class="mt-3 text-base leading-8 text-brand-muted">Partner with a team that values structure, safety, and communication.</p>
            </div>
        </div>
    </div>
</section>
