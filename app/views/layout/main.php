<?php
$baseUrl = '/KidsWithSolutions-master/public';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$navItems = [
    ['label' => 'Home', 'href' => $baseUrl . '/home'],
    ['label' => 'Programs', 'href' => $baseUrl . '/programs'],
    ['label' => 'About', 'href' => $baseUrl . '/about'],
    ['label' => 'Instructors', 'href' => $baseUrl . '/about#instructors'],
    ['label' => 'Testimonials', 'href' => $baseUrl . '/home#testimonials'],
    ['label' => 'Contact', 'href' => $baseUrl . '/contact'],
];

$isActive = function (string $href) use ($currentPath): bool {
    $targetPath = parse_url($href, PHP_URL_PATH) ?? $href;
    return rtrim($currentPath, '/') === rtrim($targetPath, '/');
};
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kids With Solution Foundation delivers parent-trusted digital literacy bootcamps for children ages 6-17.">
    <title>Kids With Solution Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            blue: '#1f4e79',
                            green: '#2f855a',
                            amber: '#d97706',
                            ink: '#0f172a',
                            surface: '#f6f8fb',
                            muted: '#64748b',
                        }
                    },
                    boxShadow: {
                        soft: '0 12px 30px rgba(15, 23, 42, 0.08)'
                    }
                }
            }
        }
    </script>
    <style>
        .pattern-bg {
            background-image: radial-gradient(circle at 1px 1px, rgba(31, 78, 121, 0.08) 1px, transparent 0);
            background-size: 28px 28px;
        }
    </style>
</head>
<body class="font-sans bg-brand-surface text-brand-ink antialiased flex min-h-screen flex-col">
    <div class="bg-brand-blue text-white text-sm">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 sm:px-6 lg:px-8">
            <p class="font-medium">Parent-first digital literacy bootcamps for children ages 6-17.</p>
            <p class="hidden sm:block text-white/80">Small groups, practical skills, and clear parent communication.</p>
        </div>
    </div>

    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between gap-4">
                <a href="<?php echo $baseUrl; ?>/home" class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-brand-blue text-lg font-extrabold text-white shadow-soft">K</div>
                    <div>
                        <span class="block text-sm font-semibold uppercase tracking-[0.2em] text-brand-muted">Kids With Solution</span>
                        <span class="block text-sm font-medium text-brand-ink sm:text-base">Foundation</span>
                    </div>
                </a>

                <nav class="hidden items-center gap-7 md:flex" aria-label="Primary">
                    <?php foreach ($navItems as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>" class="text-sm font-semibold transition-colors <?php echo $isActive($item['href']) ? 'text-brand-blue' : 'text-slate-600 hover:text-brand-blue'; ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?></a>
                    <?php endforeach; ?>
                </nav>

                <div class="hidden items-center gap-3 md:flex">
                    <a href="<?php echo $baseUrl; ?>/contact" class="text-sm font-semibold text-brand-blue transition-colors hover:text-brand-green">Talk to Us</a>
                    <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Register Now</a>
                </div>

                <button id="mobile-menu-btn" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 text-slate-700 md:hidden" aria-label="Open menu" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white md:hidden">
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6">
                <div class="grid gap-2">
                    <?php foreach ($navItems as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>" class="rounded-xl px-4 py-3 text-base font-semibold text-slate-700 hover:bg-slate-50 hover:text-brand-blue"><?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="mt-4 grid gap-3 border-t border-slate-200 pt-4">
                    <a href="<?php echo $baseUrl; ?>/contact" class="rounded-full border border-slate-200 px-4 py-3 text-center text-sm font-bold text-brand-blue">Talk to Us</a>
                    <a href="<?php echo $baseUrl; ?>/register" class="rounded-full bg-brand-green px-4 py-3 text-center text-sm font-bold text-white">Register Now</a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1 pt-0">
        <?php if (isset($data['view'])) require_once __DIR__ . '/../' . $data['view'] . '.php'; ?>
    </main>

    <footer class="border-t border-slate-800 bg-brand-ink text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-lg font-extrabold text-brand-blue">K</div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-white/65">Kids With Solution</p>
                            <h2 class="text-xl font-bold">Foundation</h2>
                        </div>
                    </div>
                    <p class="mt-5 max-w-xl text-sm leading-7 text-white/75">We help parents make a confident decision about digital education by offering child-safe, practical bootcamps that build real skills, improve confidence, and open future opportunities.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="<?php echo $baseUrl; ?>/register" class="rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white">Register a Child</a>
                        <a href="<?php echo $baseUrl; ?>/programs" class="rounded-full border border-white/15 px-5 py-3 text-sm font-semibold text-white">View Programs</a>
                    </div>
                    <div class="mt-8 flex gap-4 text-white/70">
                        <a href="#" class="transition-colors hover:text-white" aria-label="Facebook"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="transition-colors hover:text-white" aria-label="Instagram"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="transition-colors hover:text-white" aria-label="YouTube"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a2.999 2.999 0 00-2.113-2.12C19.514 3.5 12 3.5 12 3.5s-7.514 0-9.385.566a2.999 2.999 0 00-2.113 2.12A31.145 31.145 0 000 12a31.145 31.145 0 00.502 5.814 2.999 2.999 0 002.113 2.12C4.486 20.5 12 20.5 12 20.5s7.514 0 9.385-.566a2.999 2.999 0 002.113-2.12A31.145 31.145 0 0024 12a31.145 31.145 0 00-.502-5.814zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/></svg></a>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Quick Links</h3>
                    <ul class="mt-5 space-y-3 text-sm text-white/75">
                        <li><a href="<?php echo $baseUrl; ?>/home" class="transition-colors hover:text-white">Home</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/programs" class="transition-colors hover:text-white">Programs</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/about" class="transition-colors hover:text-white">About</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact" class="transition-colors hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Support</h3>
                    <ul class="mt-5 space-y-3 text-sm text-white/75">
                        <li><a href="<?php echo $baseUrl; ?>/register" class="transition-colors hover:text-white">Register a Child</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/about#instructors" class="transition-colors hover:text-white">Instructors</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/home#testimonials" class="transition-colors hover:text-white">Testimonials</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact" class="transition-colors hover:text-white">Help & Questions</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Contact</h3>
                    <div class="mt-5 space-y-3 text-sm text-white/75">
                        <p>Info: info@kidswithsolution.org</p>
                        <p>Phone: +1 (234) 567-890</p>
                        <p>Location: 123 Innovation Drive, Tech City</p>
                    </div>
                    <a href="<?php echo $baseUrl; ?>/register" class="mt-6 inline-flex rounded-full bg-white px-5 py-3 text-sm font-bold text-brand-blue">Book a Slot</a>
                </div>
            </div>

            <div class="mt-14 border-t border-white/10 pt-6 text-sm text-white/55 sm:flex sm:items-center sm:justify-between">
                <p>© <?php echo date('Y'); ?> Kids With Solution Foundation. All rights reserved.</p>
                <div class="mt-3 flex gap-5 sm:mt-0">
                    <a href="#" class="transition-colors hover:text-white">Privacy Policy</a>
                    <a href="#" class="transition-colors hover:text-white">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function () {
                const isHidden = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', String(isHidden));
            });

            mobileMenu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    mobileMenu.classList.add('hidden');
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                });
            });
        }
    </script>
</body>
</html>
