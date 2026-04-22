<?php
$contactCards = [
    ['label' => 'Email', 'value' => 'info@kidswithsolution.org', 'href' => 'mailto:info@kidswithsolution.org'],
    ['label' => 'Phone', 'value' => '+1 (234) 567-890', 'href' => 'tel:+1234567890'],
    ['label' => 'Location', 'value' => '123 Innovation Drive, Tech City, TC 10010', 'href' => null],
];
?>

<section class="bg-brand-surface pattern-bg">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
        <div>
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Contact</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Talk to us before you register.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">If you want help choosing a bootcamp, have a question about child safety, or need more clarity on the registration process, our team is ready to help.</p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-7 py-4 text-base font-bold text-white shadow-soft">Register Now</a>
                <a href="mailto:info@kidswithsolution.org" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-brand-ink">Email Us</a>
            </div>
        </div>

        <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
            <img src="<?php echo $baseUrl; ?>/img/hero/contact_us.jpeg" alt="Family contacting the bootcamp team" class="h-[380px] w-full object-cover">
            <div class="grid gap-4 border-t border-slate-200 p-6 sm:grid-cols-3">
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Response time</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Within 1 business day</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Support</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Parent questions welcome</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Next step</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Registration guidance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <h2 class="text-3xl font-extrabold text-brand-ink">Quick contact details</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">Use the channel that is easiest for you. We keep communication simple and practical so parents can get answers quickly.</p>
                <div class="mt-8 space-y-5">
                    <?php foreach ($contactCards as $card): ?>
                        <div class="rounded-2xl border border-slate-200 bg-brand-surface p-5 shadow-soft">
                            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-muted"><?php echo htmlspecialchars($card['label'], ENT_QUOTES); ?></p>
                            <?php if ($card['href'] !== null): ?>
                                <a href="<?php echo htmlspecialchars($card['href'], ENT_QUOTES); ?>" class="mt-2 block text-lg font-semibold text-brand-blue"><?php echo htmlspecialchars($card['value'], ENT_QUOTES); ?></a>
                            <?php else: ?>
                                <p class="mt-2 text-lg font-semibold text-brand-ink"><?php echo htmlspecialchars($card['value'], ENT_QUOTES); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-8 rounded-3xl border border-slate-200 bg-brand-blue p-7 text-white shadow-soft">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/70">Quick tip</p>
                    <p class="mt-3 text-base leading-8 text-white/85">Parents use this page when they want a straightforward answer before registering. We recommend choosing the right program first, then completing the form once you are comfortable.</p>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-brand-surface p-8 shadow-soft">
                <h2 class="text-3xl font-extrabold text-brand-ink">Send us a message</h2>
                <p class="mt-4 text-base leading-8 text-brand-muted">Tell us what you need and we will respond with the most relevant next step.</p>
                <form action="#" method="POST" class="mt-8 space-y-6">
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-slate-700">First name</label>
                            <input type="text" id="first_name" name="first_name" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15" required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-slate-700">Last name</label>
                            <input type="text" id="last_name" name="last_name" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15" required>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700">Email address</label>
                        <input type="email" id="email" name="email" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15" required>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-700">What do you need help with?</label>
                        <select id="subject" name="subject" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            <option>Program registration question</option>
                            <option>Age and suitability</option>
                            <option>Schedule and cohort details</option>
                            <option>General enquiry</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="5" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15" required></textarea>
                    </div>
                    <button type="submit" class="w-full rounded-full bg-brand-green px-6 py-4 text-base font-bold text-white shadow-soft">Send Message</button>
                    <p class="text-center text-sm text-brand-muted">By sending this form you agree to us using your details to respond to your enquiry.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-brand-ink py-16 text-white">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/60">Prefer to register now?</p>
            <h2 class="mt-3 text-3xl font-extrabold">You can move straight to registration once you have the answers you need.</h2>
        </div>
        <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-4 text-base font-bold text-brand-blue">Register Now</a>
    </div>
</section>
