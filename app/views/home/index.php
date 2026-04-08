<?php
$programs = [
    [
        'title' => 'Digital Foundations',
        'age' => 'Ages 6-9',
        'duration' => '4 weeks',
        'schedule' => 'Saturday mornings',
        'location' => 'Partner school labs',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => 'Keyboard confidence, safe device use, early problem-solving',
        'image' => $baseUrl . '/img/programs/basic_computer_skills.jpeg',
        'accent' => 'bg-brand-blue/10 text-brand-blue',
    ],
    [
        'title' => 'Coding for Kids',
        'age' => 'Ages 10-13',
        'duration' => '8 weeks',
        'schedule' => 'After-school sessions',
        'location' => 'Foundation learning hub',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => 'Scratch logic, creative thinking, web basics',
        'image' => $baseUrl . '/img/programs/coding_for_kids.jpeg',
        'accent' => 'bg-brand-green/10 text-brand-green',
    ],
    [
        'title' => 'Digital Literacy & Safety',
        'age' => 'Ages 13-17',
        'duration' => '2 weeks',
        'schedule' => 'Holiday bootcamp',
        'location' => 'School or community venue',
        'pricing' => 'Subsidized cohort fee',
        'outcomes' => 'Online safety, privacy, responsible digital habits',
        'image' => $baseUrl . '/img/programs/digital_literacy.jpeg',
        'accent' => 'bg-brand-amber/10 text-brand-amber',
    ],
];

$benefits = [
    'Small classes with guided support',
    'Practical outcomes parents can see at home',
    'Age-appropriate content and safe learning spaces',
    'Regular parent updates and progress feedback',
];

$testimonials = [
    [
        'quote' => 'The bootcamp gave my son confidence with computers and showed me that he was learning in a safe, structured environment.',
        'name' => 'Amina, Parent',
    ],
    [
        'quote' => 'The lessons were fun, and I now understand how to use the internet safely and build simple projects on my own.',
        'name' => 'Brian, Age 12',
    ],
    [
        'quote' => 'Their communication with parents is excellent, and the children come home excited to show what they learned.',
        'name' => 'Ms. Grace, Teacher',
    ],
];

$faqs = [
    [
        'question' => 'Is the program safe for my child?',
        'answer' => 'Yes. Sessions are supervised, age-appropriate, and designed to keep children focused on practical digital learning in a child-safe environment.',
    ],
    [
        'question' => 'Does my child need prior computer experience?',
        'answer' => 'No. We teach beginners and intermediate learners, and every module is structured to meet children where they are.',
    ],
    [
        'question' => 'How do I know which bootcamp is right?',
        'answer' => 'Use the age band and outcomes shown on each card, or contact us and we will help you choose the best cohort for your child.',
    ],
    [
        'question' => 'What happens after registration?',
        'answer' => 'Our team confirms the intake, shares cohort details, and follows up with the next steps for payment, scheduling, and venue information.',
    ],
];
?>

<section class="bg-brand-surface pattern-bg">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
        <div>
            <span class="inline-flex items-center rounded-full border border-brand-blue/15 bg-white px-4 py-2 text-sm font-semibold text-brand-blue shadow-soft">Trusted digital literacy bootcamps for parents who want clarity</span>
            <h1 class="mt-6 max-w-3xl text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl lg:text-6xl">Give your child practical digital skills in a program you can trust.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Kids With Solution Foundation helps children ages 6-17 build confidence with technology, learn safely, and gain real-world skills through small-group bootcamps guided by supportive instructors.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Register Now</a>
                <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink transition-colors hover:border-brand-blue hover:text-brand-blue">Explore Programs</a>
            </div>
            <div class="mt-8 grid gap-4 sm:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-soft">
                    <p class="text-2xl font-extrabold text-brand-blue">500+</p>
                    <p class="mt-1 text-sm text-brand-muted">Children trained</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-soft">
                    <p class="text-2xl font-extrabold text-brand-green">15+</p>
                    <p class="mt-1 text-sm text-brand-muted">Partner schools</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-soft">
                    <p class="text-2xl font-extrabold text-brand-amber">4.9/5</p>
                    <p class="mt-1 text-sm text-brand-muted">Parent satisfaction</p>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
                <img src="<?php echo $baseUrl; ?>/img/hero/programs.jpeg" alt="Children learning in a digital literacy bootcamp" class="h-[420px] w-full object-cover">
            </div>
            <div class="absolute -bottom-8 left-6 right-6 rounded-3xl border border-slate-200 bg-white p-5 shadow-soft">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-muted">What parents get</p>
                        <p class="mt-1 text-lg font-bold text-brand-ink">Safe classes, measurable progress, clear communication</p>
                    </div>
                    <div class="flex items-center gap-3 text-sm font-semibold text-brand-green">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-brand-green/10">✓</span>
                        Secure registration
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-y border-slate-200 bg-white py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-slate-200 bg-brand-surface p-5 text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-muted">Trusted by</p>
                <p class="mt-2 text-lg font-bold text-brand-ink">Parents and schools</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-4 flex items-center justify-center"><img src="<?php echo $baseUrl; ?>/img/logos/ACWICT.jpg" alt="ACWICT logo" class="max-h-12 w-auto object-contain"></div>
            <div class="rounded-2xl border border-slate-200 bg-white p-4 flex items-center justify-center"><img src="<?php echo $baseUrl; ?>/img/logos/usiu.png" alt="USIU logo" class="max-h-12 w-auto object-contain"></div>
            <div class="rounded-2xl border border-slate-200 bg-white p-4 flex items-center justify-center"><img src="<?php echo $baseUrl; ?>/img/logos/ACWICT_1.jpg" alt="ACWICT partner logo" class="max-h-12 w-auto object-contain"></div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Programs</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">Clear bootcamp options parents can scan in seconds.</h2>
                <p class="mt-4 text-lg text-brand-muted">Every program card shows the age group, duration, schedule, location, and what your child will actually learn.</p>
            </div>
            <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue">View all details <span aria-hidden="true">→</span></a>
        </div>

        <div class="mt-10 grid gap-8 lg:grid-cols-3">
            <?php foreach ($programs as $program): ?>
                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft">
                    <img src="<?php echo htmlspecialchars($program['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?>" class="h-52 w-full object-cover">
                    <div class="p-7">
                        <div class="flex items-center justify-between gap-3">
                            <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold <?php echo $program['accent']; ?>"><?php echo htmlspecialchars($program['age'], ENT_QUOTES); ?></span>
                            <span class="text-sm font-semibold text-brand-muted"><?php echo htmlspecialchars($program['duration'], ENT_QUOTES); ?></span>
                        </div>
                        <h3 class="mt-5 text-2xl font-bold text-brand-ink"><?php echo htmlspecialchars($program['title'], ENT_QUOTES); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($program['outcomes'], ENT_QUOTES); ?></p>
                        <dl class="mt-6 space-y-3 text-sm text-slate-700">
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><dt class="text-slate-500">Schedule</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['schedule'], ENT_QUOTES); ?></dd></div>
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><dt class="text-slate-500">Location</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['location'], ENT_QUOTES); ?></dd></div>
                            <div class="flex justify-between gap-4"><dt class="text-slate-500">Pricing</dt><dd class="font-semibold text-right"><?php echo htmlspecialchars($program['pricing'], ENT_QUOTES); ?></dd></div>
                        </dl>
                        <a href="<?php echo $baseUrl; ?>/register" class="mt-6 inline-flex w-full items-center justify-center rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white">Register for this cohort</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Why parents choose us</p>
                <h2 class="mt-3 text-3xl font-extrabold text-brand-ink">A child-friendly experience with parent-level clarity.</h2>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <?php foreach ($benefits as $benefit): ?>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-soft">
                            <p class="text-sm font-semibold text-brand-ink"><?php echo htmlspecialchars($benefit, ENT_QUOTES); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-8 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/70">How the learning feels</p>
                <ul class="mt-6 space-y-4 text-sm leading-7 text-white/85">
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15">1</span><span>Friendly instructors explain every step so children do not get lost.</span></li>
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15">2</span><span>Hands-on practice helps learners build confidence quickly.</span></li>
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15">3</span><span>Parents receive a straightforward update on progress and next steps.</span></li>
                    <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15">4</span><span>Children leave with practical skills they can use at home and at school.</span></li>
                </ul>
                <a href="<?php echo $baseUrl; ?>/register" class="mt-8 inline-flex rounded-full bg-white px-6 py-3 text-sm font-bold text-brand-blue">Book a Slot</a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="bg-brand-surface py-20 scroll-mt-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Testimonials</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">Parents and learners describe the experience as clear, safe, and worthwhile.</h2>
        </div>
        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            <?php foreach ($testimonials as $testimonial): ?>
                <figure class="rounded-3xl border border-slate-200 bg-white p-7 shadow-soft">
                    <div class="flex gap-1 text-brand-amber" aria-hidden="true">★★★★★</div>
                    <blockquote class="mt-5 text-base leading-8 text-slate-700">"<?php echo htmlspecialchars($testimonial['quote'], ENT_QUOTES); ?>"</blockquote>
                    <figcaption class="mt-6 text-sm font-semibold text-brand-ink"><?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES); ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">FAQ</p>
            <h2 class="mt-3 text-3xl font-extrabold text-brand-ink md:text-4xl">Questions parents usually ask before registering.</h2>
        </div>
        <div class="mt-10 space-y-4">
            <?php foreach ($faqs as $faq): ?>
                <div class="rounded-2xl border border-slate-200 bg-brand-surface p-6">
                    <h3 class="text-lg font-bold text-brand-ink"><?php echo htmlspecialchars($faq['question'], ENT_QUOTES); ?></h3>
                    <p class="mt-3 text-sm leading-7 text-brand-muted"><?php echo htmlspecialchars($faq['answer'], ENT_QUOTES); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-brand-ink py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Ready when you are</p>
            <h2 class="mt-3 text-3xl font-extrabold">Secure a place for your child in the next cohort.</h2>
            <p class="mt-4 text-white/75">If you are unsure which bootcamp fits best, our team can help you choose in one conversation.</p>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white">Register Now</a>
            <a href="<?php echo $baseUrl; ?>/contact" class="inline-flex items-center justify-center rounded-full border border-white/20 px-7 py-4 text-base font-semibold text-white">Talk to Us</a>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="py-20 bg-gradient-to-r from-brand-green to-brand-blue text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Join Us in Making a Difference</h2>
        <p class="text-xl mb-10 opacity-90">Whether you are registering a student or donating to support our cause, every action counts.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="/KidsWithSolutions-master/public/register" class="bg-white text-brand-dark font-bold py-4 px-10 rounded-full shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-1">
                Register For Bootcamp
            </a>
            <a href="/KidsWithSolutions-master/public/donate" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-brand-dark font-bold py-4 px-10 rounded-full transition-all">
                Make a Donation
            </a>
        </div>
    </div>
</section>
