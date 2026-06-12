<?php
$documentRoot = rtrim(str_replace('\\', '/', (string) ($_SERVER['DOCUMENT_ROOT'] ?? '')), '/');
$scriptFilename = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_FILENAME'] ?? ''));
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
if ($documentRoot !== '' && str_starts_with($scriptFilename, $documentRoot)) {
    $scriptDir = dirname(substr($scriptFilename, strlen($documentRoot)));
}
$baseUrl = $scriptDir === '/' || $scriptDir === '.' ? '' : rtrim($scriptDir, '/');
$currentRoute = trim((string) ($_GET['url'] ?? 'home'), '/');
$currentRoute = $currentRoute === '' ? 'home' : explode('/', $currentRoute)[0];
$navItems = [
    ['label' => 'Home', 'route' => 'home', 'href' => $baseUrl . '/home'],
    ['label' => 'About', 'route' => 'about', 'href' => $baseUrl . '/about'],
    ['label' => 'Programs', 'route' => 'programs', 'href' => $baseUrl . '/programs'],
    ['label' => 'Support', 'route' => 'donate', 'href' => $baseUrl . '/donate'],
    ['label' => 'Contact', 'route' => 'contact', 'href' => $baseUrl . '/contact'],
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kids With Solutions Foundation, Ltd. is a Kenyan social enterprise equipping young people with practical digital, financial, and innovation skills.">
    <title>Kids With Solutions Foundation, Ltd.</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/innovation-cycle.css">
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

        /* Custom Input Validation Styles */
        input:user-invalid, select:user-invalid, textarea:user-invalid,
        input[data-touched="true"]:invalid, select[data-touched="true"]:invalid, textarea[data-touched="true"]:invalid {
            border-color: #ef4444 !important; /* rose-500 */
            background-color: #fef2f2 !important; /* rose-50 */
            outline: none !important;
        }
        input:user-invalid:focus, select:user-invalid:focus, textarea:user-invalid:focus,
        input[data-touched="true"]:invalid:focus, select[data-touched="true"]:invalid:focus, textarea[data-touched="true"]:invalid:focus {
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.15) !important;
        }
        input:user-invalid ~ .error-msg, select:user-invalid ~ .error-msg, textarea:user-invalid ~ .error-msg,
        input[data-touched="true"]:invalid ~ .error-msg, select[data-touched="true"]:invalid ~ .error-msg, textarea[data-touched="true"]:invalid ~ .error-msg {
            display: flex !important;
        }
    </style>
</head>
<body class="font-sans flex min-h-screen flex-col bg-brand-surface text-brand-ink antialiased">
    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between gap-4">
                <a href="<?php echo $baseUrl; ?>/home" class="flex items-center gap-3">
                    <img src="<?php echo $baseUrl; ?>/img/logos/logo.jpg" alt="Kids With Solutions Foundation logo" class="h-11 w-auto rounded-xl object-contain">
                    <div>
                        <span class="block text-xs font-semibold uppercase tracking-[0.2em] text-brand-muted sm:text-sm">Kids With Solutions</span>
                        <span class="block text-sm font-medium text-brand-ink sm:text-base">Foundation, Ltd.</span>
                    </div>
                </a>

                <nav class="hidden items-center gap-6 md:flex" aria-label="Primary">
                    <?php foreach ($navItems as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES); ?>" class="text-sm font-semibold transition-colors <?php echo $currentRoute === $item['route'] ? 'text-brand-blue' : 'text-slate-600 hover:text-brand-blue'; ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES); ?></a>
                    <?php endforeach; ?>
                </nav>

                <div class="hidden items-center gap-3 md:flex">
                    <a href="<?php echo $baseUrl; ?>/donate" class="text-sm font-semibold text-brand-blue transition-colors hover:text-brand-green">Support Our Work</a>
                    <a href="<?php echo $baseUrl; ?>/register" class="inline-flex items-center justify-center rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white shadow-soft transition-transform hover:-translate-y-0.5">Enroll a Learner</a>
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
                    <a href="<?php echo $baseUrl; ?>/donate" class="rounded-full border border-slate-200 px-4 py-3 text-center text-sm font-bold text-brand-blue">Support Our Work</a>
                    <a href="<?php echo $baseUrl; ?>/register" class="rounded-full bg-brand-green px-4 py-3 text-center text-sm font-bold text-white">Enroll a Learner</a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1">
        <?php if (isset($data['view'])) require_once __DIR__ . '/../' . $data['view'] . '.php'; ?>
    </main>

    <footer class="border-t border-slate-800 bg-brand-ink text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-3">
                        <img src="<?php echo $baseUrl; ?>/img/logos/logo.jpg" alt="Kids With Solutions Foundation logo" class="h-11 w-auto rounded-xl object-contain">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-white/65">Kids With Solutions</p>
                            <h2 class="text-xl font-bold">Foundation, Ltd.</h2>
                        </div>
                    </div>
                    <p class="mt-5 max-w-xl text-sm leading-7 text-white/75">A Kenyan social enterprise equipping young people with practical skills and tools to thrive in the 21st century. Our work is rooted in access, creativity, integrity, and professionalism.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="<?php echo $baseUrl; ?>/register" class="rounded-full bg-brand-green px-5 py-3 text-sm font-bold text-white">Enroll a Learner</a>
                        <a href="<?php echo $baseUrl; ?>/donate" class="rounded-full border border-white/15 px-5 py-3 text-sm font-semibold text-white">Support Our Work</a>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Explore</h3>
                    <ul class="mt-5 space-y-3 text-sm text-white/75">
                        <li><a href="<?php echo $baseUrl; ?>/about" class="transition-colors hover:text-white">About KWSF</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/programs" class="transition-colors hover:text-white">Programs</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/home#partners" class="transition-colors hover:text-white">Our Partners</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact" class="transition-colors hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Take Action</h3>
                    <ul class="mt-5 space-y-3 text-sm text-white/75">
                        <li><a href="<?php echo $baseUrl; ?>/register" class="transition-colors hover:text-white">Enroll a Learner</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/donate" class="transition-colors hover:text-white">Sponsor Training</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact" class="transition-colors hover:text-white">Partner With Us</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/55">Contact</h3>
                    <!-- TODO: Replace these placeholders with verified KWSF contact details before launch. -->
                    <div class="mt-5 space-y-3 text-sm text-white/75">
                        <p class="break-all">Email: <a href="mailto:KIDSWITHSOLUTIONSFOUNDATIONLTD@gmail.com" class="hover:text-brand-green transition-colors">KIDSWITHSOLUTIONSFOUNDATIONLTD@gmail.com</a></p>
                        <p>Phone: <a href="tel:+254780941397" class="hover:text-brand-green transition-colors">+254 780 941 397</a></p>
                        <p>Location: USIU Road off Thika Road(Exit 7)</p>
                    </div>
                    <a href="<?php echo $baseUrl; ?>/contact" class="mt-6 inline-flex rounded-full bg-white px-5 py-3 text-sm font-bold text-brand-blue">Contact KWSF</a>
                </div>
            </div>

            <div class="mt-14 border-t border-white/10 pt-6 text-sm text-white/55 sm:flex sm:items-center sm:justify-between">
                <p>&copy; <?php echo date('Y'); ?> Kids With Solutions Foundation, Ltd. All rights reserved.</p>
                <!-- <p class="mt-3 sm:mt-0">[Add approved privacy and safeguarding links before launch]</p> -->
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
