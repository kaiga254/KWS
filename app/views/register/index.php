<?php
$message = $data['message'] ?? '';
$old = $data['old'] ?? [];
$value = function (string $key) use ($old): string {
    return htmlspecialchars((string) ($old[$key] ?? ''), ENT_QUOTES);
};
$selected = function (string $key, string $choice) use ($old): string {
    return (($old[$key] ?? '') === $choice) ? 'selected' : '';
};
?>

<section class="relative overflow-hidden pattern-bg bg-brand-surface border-b border-slate-200/60 py-16 sm:py-20 lg:py-24">
    <!-- Background image and overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $baseUrl; ?>/img/illustrations/hero-register-interest.jpg" alt="Parent and learner speaking with a program coordinator" class="h-full w-full object-cover object-right opacity-90 lg:opacity-100">
        <!-- Subtle overlay to integrate the image with the brand surface and guarantee text accessibility -->
        <div class="absolute inset-0 bg-brand-surface/30 lg:bg-gradient-to-r lg:from-brand-surface lg:via-brand-surface/85 lg:to-transparent"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="w-full rounded-[2rem] border border-slate-200/60 bg-white/90 p-8 backdrop-blur-md shadow-soft lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none lg:backdrop-blur-none">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-green">Learner enrollment</p>
            <h1 class="mt-4 text-4xl font-extrabold leading-tight text-brand-ink sm:text-5xl">Enroll your child for our programs.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-muted">Share a few details and the KWSF team will do a follow up to confirm your registration.</p>
        </div>
        <div></div>
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
                    <h2 class="mt-5 text-3xl font-extrabold text-brand-ink">Interest submitted</h2>
                    <p class="mt-3 text-base leading-8 text-brand-muted">Thank you. The KWSF team should review your submission and contact you with the relevant next steps.</p>
                    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                        <a href="<?php echo $baseUrl; ?>/home" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-bold text-brand-ink">Back to Home</a>
                        <a href="<?php echo $baseUrl; ?>/programs" class="inline-flex items-center justify-center rounded-full bg-brand-green px-6 py-3 text-sm font-bold text-white">View Programs</a>
                    </div>
                </div>
            <?php else: ?>
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-brand-blue">Registration of interest</p>
                    <h2 class="mt-2 text-3xl font-extrabold text-brand-ink">Complete the form in three steps</h2>
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

                <form action="<?php echo $baseUrl; ?>/register" method="POST" id="registration-form" class="mt-8 space-y-8" novalidate>
                    <section data-step-panel="1" class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Parent or guardian details</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">Provide the contact details KWSF should use for follow-up.</p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-slate-700">First name *</label>
                                <input type="text" id="first_name" name="first_name" value="<?php echo $value('first_name'); ?>" required pattern="^[a-zA-Z\s\-\']{2,50}$" aria-describedby="first_name-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="first_name-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    First name must be 2-50 characters (letters, spaces, hyphens, or apostrophes only).
                                </div>
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-slate-700">Last name *</label>
                                <input type="text" id="last_name" name="last_name" value="<?php echo $value('last_name'); ?>" required pattern="^[a-zA-Z\s\-\']{2,50}$" aria-describedby="last_name-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="last_name-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Last name must be 2-50 characters (letters, spaces, hyphens, or apostrophes only).
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700">Email address *</label>
                                <input type="email" id="email" name="email" value="<?php echo $value('email'); ?>" required aria-describedby="email-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="email-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div>
                                <label for="phone_number" class="block text-sm font-semibold text-slate-700">Phone number *</label>
                                <input type="tel" id="phone_number" name="phone_number" value="<?php echo $value('phone_number'); ?>" required pattern="^\+?[0-9\s\-()]{9,15}$" aria-describedby="phone_number-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="phone_number-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Please enter a valid phone number (9 to 15 digits).
                                </div>
                            </div>
                        </div>
                    </section>

                    <section data-step-panel="2" class="hidden space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Learner details</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">These details help KWSF discuss the appropriate program options with you.</p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label for="child_first_name" class="block text-sm font-semibold text-slate-700">Learner first name *</label>
                                <input type="text" id="child_first_name" name="child_first_name" value="<?php echo $value('child_first_name'); ?>" required pattern="^[a-zA-Z\s\-\']{2,50}$" aria-describedby="child_first_name-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="child_first_name-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Learner first name must be 2-50 characters (letters, spaces, hyphens, or apostrophes only).
                                </div>
                            </div>
                            <div>
                                <label for="child_last_name" class="block text-sm font-semibold text-slate-700">Learner last name *</label>
                                <input type="text" id="child_last_name" name="child_last_name" value="<?php echo $value('child_last_name'); ?>" required pattern="^[a-zA-Z\s\-\']{2,50}$" aria-describedby="child_last_name-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="child_last_name-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Learner last name must be 2-50 characters (letters, spaces, hyphens, or apostrophes only).
                                </div>
                            </div>
                            <div>
                                <label for="child_age" class="block text-sm font-semibold text-slate-700">Learner age *</label>
                                <input type="number" id="child_age" name="child_age" min="3" max="20" value="<?php echo $value('child_age'); ?>" required aria-describedby="child_age-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <div id="child_age-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Learner age must be a number between 3 and 20.
                                </div>
                            </div>
                            <div>
                                <label for="child_gender" class="block text-sm font-semibold text-slate-700">Learner gender *</label>
                                <select id="child_gender" name="child_gender" required aria-describedby="child_gender-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                    <option value="" <?php echo $selected('child_gender', ''); ?>>Select gender...</option>
                                    <option value="Male" <?php echo $selected('child_gender', 'Male'); ?>>Male</option>
                                    <option value="Female" <?php echo $selected('child_gender', 'Female'); ?>>Female</option>
                                </select>
                                <div id="child_gender-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                    <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    Please select the learner's gender.
                                </div>
                            </div>
                        </div>
                    </section>

                    <section data-step-panel="3" class="hidden space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-brand-ink">Program interest</h3>
                            <p class="mt-2 text-sm leading-7 text-brand-muted">Choose the area you want to discuss. KWSF should confirm current intake details before enrollment.</p>
                        </div>
                        <div>
                            <label for="module" class="block text-sm font-semibold text-slate-700">Preferred program area *</label>
                            <select id="module" name="module" required aria-describedby="module-error" class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/15">
                                <option value="" <?php echo $selected('module', ''); ?>>Select a program area...</option>
                                <option value="Digital Literacy" <?php echo $selected('module', 'Digital Literacy'); ?>>Digital Literacy</option>
                                <option value="Coding & Robotics" <?php echo $selected('module', 'Coding & Robotics'); ?>>Coding & Robotics</option>
                                <option value="Financial Literacy" <?php echo $selected('module', 'Financial Literacy'); ?>>Financial Literacy</option>
                                <option value="Leadership & Innovation" <?php echo $selected('module', 'Leadership & Innovation'); ?>>Leadership & Innovation</option>
                                <option value="Not sure yet" <?php echo $selected('module', 'Not sure yet'); ?>>Not sure yet</option>
                            </select>
                            <div id="module-error" class="error-msg hidden items-center gap-1.5 mt-1.5 text-xs font-semibold text-rose-600" aria-live="polite">
                                <svg class="h-4 w-4 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                Please select a preferred program area.
                            </div>
                        </div>
                        <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5 text-sm leading-7 text-amber-900">
                            <p class="font-bold">Privacy notice</p>
                            <p class="mt-2">We will only use the information you submit to confirm your child’s place and contact you with cohort details.</p>
                        </div>
                    </section>

                    <div class="flex flex-col gap-3 border-t border-slate-200 pt-6 sm:flex-row sm:justify-between">
                        <button type="button" id="step-back" class="hidden rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-bold text-brand-ink">Back</button>
                        <div class="flex-1"></div>
                        <button type="button" id="step-next" class="rounded-full bg-brand-blue px-6 py-3 text-sm font-bold text-white">Continue</button>
                        <button type="submit" id="step-submit" class="hidden rounded-full bg-brand-green px-6 py-3 text-sm font-bold text-white">Submit Interest</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>

        <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">
            <div class="rounded-3xl border border-slate-200 bg-brand-blue p-7 text-white shadow-soft">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-white/70">Need guidance?</p>
                <p class="mt-3 text-base leading-8 text-white/85">If you are not sure which program to pick, contact us first and we will help you choose the right cohort.</p>
                <a href="<?php echo $baseUrl; ?>/contact" class="mt-5 inline-flex rounded-full bg-white px-5 py-3 text-sm font-bold text-brand-blue">Contact KWSF</a>
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

        const syncValidationState = (el) => {
            if (!el.checkValidity) return;
            const isValid = el.checkValidity();
            el.setAttribute('aria-invalid', isValid ? 'false' : 'true');
        };

        // Blur tracking and validation
        form.addEventListener('blur', (e) => {
            if (e.target.matches('input, select, textarea')) {
                e.target.setAttribute('data-touched', 'true');
                syncValidationState(e.target);
            }
        }, true);

        // Instant correction validation if touched
        form.addEventListener('input', (e) => {
            if (e.target.matches('input, select, textarea')) {
                if (e.target.getAttribute('data-touched') === 'true') {
                    syncValidationState(e.target);
                }
            }
        });

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
            let stepValid = true;
            let firstInvalidField = null;

            for (const field of fields) {
                field.setAttribute('data-touched', 'true');
                syncValidationState(field);
                if (!field.checkValidity()) {
                    stepValid = false;
                    if (!firstInvalidField) {
                        firstInvalidField = field;
                    }
                }
            }

            if (!stepValid && firstInvalidField) {
                firstInvalidField.focus();
                return false;
            }
            return true;
        }

        nextButton.addEventListener('click', function () {
            if (validateStep(currentStep) && currentStep < totalSteps) {
                showStep(currentStep + 1);
            }
        });
        backButton.addEventListener('click', function () {
            if (currentStep > 1) {
                showStep(currentStep - 1);
            }
        });

        form.addEventListener('submit', function (e) {
            // First validate current panel
            if (!validateStep(currentStep)) {
                e.preventDefault();
                return;
            }

            // Then check all other panels (backward search to find the earliest invalid panel)
            for (let i = 1; i <= totalSteps; i++) {
                const panel = panels.find(p => Number(p.getAttribute('data-step-panel')) === i);
                const fields = Array.from(panel.querySelectorAll('input, select, textarea'));
                const isPanelValid = fields.every(f => f.checkValidity());
                if (!isPanelValid) {
                    e.preventDefault();
                    showStep(i);
                    validateStep(i); // Highlights the invalid fields and focuses first invalid
                    return;
                }
            }
        });

        showStep(1);
    })();
</script>
