<?php
$message = $data['message'] ?? '';
$old = $data['old'] ?? [];
$value = function (string $key) use ($old): string {
    return htmlspecialchars((string) ($old[$key] ?? ''), ENT_QUOTES);
};
$selected = function (string $key, string $choice) use ($old): string {
    return (($old[$key] ?? '') === $choice) ? 'selected' : '';
};
$checked = function (string $key, string $choice) use ($old): string {
    return (($old[$key] ?? '') === $choice) ? 'checked' : '';
};
?>

<section class="bg-brand-surface pattern-bg">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
        <div>
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Registration</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Register your child in a guided, parent-friendly flow.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">The form below is short, secure, and broken into simple steps so you can complete it without feeling overwhelmed.</p>
            <div class="mt-8 flex flex-wrap gap-3 text-sm font-semibold text-brand-ink">
                <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-2 shadow-soft">Secure registration</span>
                <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-2 shadow-soft">Ages 6-17</span>
                <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-2 shadow-soft">Parent updates included</span>
            </div>
        </div>

        <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
            <img src="<?php echo $baseUrl; ?>/img/hero/register.jpeg" alt="Registration support for parents" class="h-[380px] w-full object-cover">
            <div class="grid gap-4 border-t border-slate-200 p-6 sm:grid-cols-3">
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Step 1</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Parent details</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Step 2</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Child details</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-brand-muted">Step 3</p>
                    <p class="mt-1 text-base font-bold text-brand-ink">Choose a bootcamp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 sm:px-6 lg:grid-cols-[1.3fr_0.7fr] lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-brand-surface p-6 shadow-soft sm:p-8">
            <?php if ($message === 'success'): ?>
                <div class="rounded-3xl border border-emerald-200 bg-emerald-50 p-8 text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-brand-green text-white">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h2 class="mt-5 text-3xl font-extrabold text-brand-ink">Registration successful</h2>
                    <p class="mt-3 text-base leading-8 text-brand-muted">Thank you. Our team will review your submission and contact you with the next steps.</p>
                    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                        <a href="<?php echo $baseUrl; ?>/home" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-bold text-brand-ink">Back to Home</a>
                        <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center justify-center rounded-full bg-brand-green px-6 py-3 text-sm font-bold text-white">View Programs</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Secure form</p>
                        <h2 class="mt-2 text-3xl font-extrabold text-brand-ink">Complete registration in 3 steps</h2>
                    </div>
                    <div class="hidden rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-brand-muted sm:block">Ages 6-17</div>
                </div>

                <?php if ($message !== ''): ?>
                    <div class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-5 py-4 text-sm font-medium text-rose-700">
                        <?php echo htmlspecialchars($message, ENT_QUOTES); ?>
                    </div>
                <?php endif; ?>

                <div class="mt-8">
                    <div class="flex items-center justify-between text-sm font-semibold text-brand-muted">
                        <span>Progress</span>
                        <span id="step-label">Step 1 of 3</span>
                    </div>
                    <div class="mt-3 h-2 rounded-full bg-slate-200">
                        <div id="step-progress" class="h-2 rounded-full bg-brand-green transition-all" style="width: 33.333%"></div>
                    </div>
                </div>

                <form action="<?php echo $baseUrl; ?>/register" method="POST" id="registration-form" class="mt-8 space-y-8">
                    <section data-step-panel="1" class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Parent / guardian details</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">We use these details to confirm the cohort and share updates.</p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">First name *</label>
                                <input type="text" name="first_name" value="<?php echo $value('first_name'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Last name *</label>
                                <input type="text" name="last_name" value="<?php echo $value('last_name'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Email address *</label>
                                <input type="email" name="email" value="<?php echo $value('email'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Phone number *</label>
                                <input type="tel" name="phone_number" value="<?php echo $value('phone_number'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                        </div>
                    </section>

                    <section data-step-panel="2" class="hidden space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Child details</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">This helps us place your child in the right age group.</p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">First name *</label>
                                <input type="text" name="child_first_name" value="<?php echo $value('child_first_name'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Last name *</label>
                                <input type="text" name="child_last_name" value="<?php echo $value('child_last_name'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Age *</label>
                                <input type="number" name="child_age" min="6" max="17" value="<?php echo $value('child_age'); ?>" required class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Gender</label>
                                <div class="mt-3 flex flex-wrap gap-4">
                                    <label class="flex items-center gap-2 text-sm font-medium text-slate-700"><input type="radio" name="child_gender" value="Male" <?php echo $checked('child_gender', 'Male'); ?> class="h-4 w-4 border-slate-300 text-brand-green focus:ring-brand-green"> Male</label>
                                    <label class="flex items-center gap-2 text-sm font-medium text-slate-700"><input type="radio" name="child_gender" value="Female" <?php echo $checked('child_gender', 'Female'); ?> class="h-4 w-4 border-slate-300 text-brand-green focus:ring-brand-green"> Female</label>
                                    <label class="flex items-center gap-2 text-sm font-medium text-slate-700"><input type="radio" name="child_gender" value="Other" <?php echo $checked('child_gender', 'Other'); ?> class="h-4 w-4 border-slate-300 text-brand-green focus:ring-brand-green"> Other</label>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section data-step-panel="3" class="hidden space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Choose a bootcamp</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">Select the track that best matches your child’s age and interest.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700">Preferred program</label>
                            <select name="module" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <option value="" <?php echo $selected('module', ''); ?>>Select a program...</option>
                                <option value="Digital Foundations" <?php echo $selected('module', 'Digital Foundations'); ?>>Digital Foundations (6-9 years)</option>
                                <option value="Coding for Kids" <?php echo $selected('module', 'Coding for Kids'); ?>>Coding for Kids (10-13 years)</option>
                                <option value="Digital Literacy & Safety" <?php echo $selected('module', 'Digital Literacy & Safety'); ?>>Digital Literacy & Safety (13-17 years)</option>
                                <option value="Other" <?php echo $selected('module', 'Other'); ?>>Other / Not sure yet</option>
                            </select>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 text-sm leading-7 text-brand-muted">
                            <p class="font-bold text-brand-ink">Secure registration</p>
                            <p class="mt-2">We will only use the information you submit to confirm your child’s place and contact you with cohort details.</p>
                        </div>
                    </section>

                    <div class="flex flex-col gap-3 border-t border-slate-200 pt-6 sm:flex-row sm:justify-between">
                        <button type="button" id="step-back" class="hidden rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-bold text-brand-ink">Back</button>
                        <div class="flex-1"></div>
                        <button type="button" id="step-next" class="rounded-full bg-brand-blue px-6 py-3 text-sm font-bold text-white">Continue</button>
                        <button type="submit" id="step-submit" class="hidden rounded-full bg-brand-green px-6 py-3 text-sm font-bold text-white">Submit Registration</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>

        <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-7 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/70">Why parents choose this flow</p>
                <ul class="mt-5 space-y-4 text-sm leading-7 text-white/85">
                    <li>Clear steps reduce friction and confusion.</li>
                    <li>The age band is shown before you commit.</li>
                    <li>We keep the form short and relevant.</li>
                    <li>Our team follows up with next steps after submission.</li>
                </ul>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Need help?</p>
                <p class="mt-3 text-base leading-8 text-brand-muted">If you are not sure which program to pick, contact us first and we will help you choose the right cohort.</p>
                <a href="<?php echo $baseUrl; ?>/contact" class="mt-5 inline-flex rounded-full border border-slate-300 bg-brand-surface px-5 py-3 text-sm font-bold text-brand-ink">Contact Support</a>
            </div>
        </aside>
    </div>
</section>

<script>
    (function () {
        const form = document.getElementById('registration-form');
        if (!form) {
            return;
        }

        const panels = Array.from(form.querySelectorAll('[data-step-panel]'));
        const nextButton = document.getElementById('step-next');
        const backButton = document.getElementById('step-back');
        const submitButton = document.getElementById('step-submit');
        const stepLabel = document.getElementById('step-label');
        const stepProgress = document.getElementById('step-progress');
        let currentStep = 1;

        const totalSteps = panels.length;

        function showStep(step) {
            currentStep = step;

            panels.forEach(function (panel) {
                panel.classList.toggle('hidden', Number(panel.getAttribute('data-step-panel')) !== step);
            });

            backButton.classList.toggle('hidden', step === 1);
            nextButton.classList.toggle('hidden', step === totalSteps);
            submitButton.classList.toggle('hidden', step !== totalSteps);
            stepLabel.textContent = 'Step ' + step + ' of ' + totalSteps;
            stepProgress.style.width = ((step / totalSteps) * 100) + '%';
        }

        function validateStep(step) {
            const currentPanel = panels.find(function (panel) {
                return Number(panel.getAttribute('data-step-panel')) === step;
            });

            if (!currentPanel) {
                return true;
            }

            const fields = Array.from(currentPanel.querySelectorAll('input, select, textarea'));
            for (const field of fields) {
                if (!field.checkValidity()) {
                    field.reportValidity();
                    return false;
                }
            }

            return true;
        }

        nextButton.addEventListener('click', function () {
            if (!validateStep(currentStep)) {
                return;
            }

            if (currentStep < totalSteps) {
                showStep(currentStep + 1);
            }
        });

        backButton.addEventListener('click', function () {
            if (currentStep > 1) {
                showStep(currentStep - 1);
            }
        });

        showStep(1);
    })();
</script>
