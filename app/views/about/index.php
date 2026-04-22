<?php
$highlights = [
    ['label' => 'Children reached', 'value' => '200+'],
    ['label' => 'Bootcamps delivered', 'value' => '5+'],
    ['label' => 'Partner organizations', 'value' => '5+'],
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
        'name' => 'Patricia Mulinya',
        'role' => 'Program Director',
        'focus' => 'Parent communication, cohort planning, child safeguarding',
        'summary' => 'Oversees the learning experience and ensures every cohort stays organized, supportive, and parent-friendly.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-2.jpg',
        'name' => 'Peter Muchiri',
        'role' => 'Lead Instructor',
        'focus' => 'Digital foundations, beginner support, practical teaching',
        'summary' => 'Guides children through core computer skills with a hands-on, calm, and patient teaching style.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-3.jpg',
        'name' => 'Emily Chen',
        'role' => 'Learning Coach',
        'focus' => 'Coding exercises, feedback, learner confidence',
        'summary' => 'Supports children during class work and helps them build confidence as they complete projects.',
    ],
    [
        'image' => $baseUrl . '/img/founders/dir-4.jpg',
        'name' => 'Michael Lee',
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
                <p class="mt-4 text-base leading-8 text-brand-muted">We believe every child should have the opportunity to develop strong digital skills that will serve them throughout their lives.</p>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-8 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/65">Our Vision</p>
                <h2 class="mt-3 text-3xl font-extrabold text-white">A world where digital literacy is practical, age-appropriate, and accessible for all children.</h2>
                <p class="mt-4 text-base leading-8 text-white/75">We envision a future where every child has the opportunity to build confidence with technology in a way that is safe, supportive, and empowering.</p>
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
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Our Team</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">Meet our team</h2>
            <p class="mt-4 text-base leading-8 text-brand-muted">Our team brings together learning support, child-safe facilitation, community coordination, and parent communication so every cohort runs smoothly.</p>
        </div>

        <div class="mt-10 grid gap-6 lg:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($team as $member): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-brand-surface shadow-soft">
                    <img src="<?php echo htmlspecialchars($member['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>" class="h-56 w-full object-cover">
                    <div class="p-6">
                                                <h3 class="text-xl font-bold text-brand-ink"><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?></h3>
                        <p class="text-sm font-semibold text-brand-muted"><?php echo htmlspecialchars($member['role'], ENT_QUOTES); ?></p>
                        <p class="mt-2 text-sm font-semibold text-brand-blue"><?php echo htmlspecialchars($member['focus'], ENT_QUOTES); ?></p>
                        <p class="mt-4 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($member['summary'], ENT_QUOTES); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>


