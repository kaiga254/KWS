<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids With Solution Foundation</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            green: '#22c55e', // learning, growth (tailwind green-500)
                            blue: '#3b82f6', // trust, stability (tailwind blue-500)
                            purple: '#a855f7', // creativity (tailwind purple-500)
                            dark: '#1e293b', // slate 800
                            light: '#f8fafc', // slate 50
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Styles if needed beyond Tailwind */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .hover-lift {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="font-sans text-brand-dark bg-white flex flex-col min-h-screen">

    <!-- Header / Navigation -->
    <header class="fixed w-full top-0 z-50 glass-nav border-b border-gray-100 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/public/" class="flex items-center gap-2">
                        <!-- Placeholder Logo Icon -->
                        <div class="w-10 h-10 rounded-lg bg-brand-green flex items-center justify-center text-white font-bold text-xl shadow-md">
                            K
                        </div>
                        <span class="font-bold text-xl md:text-2xl text-brand-dark hidden sm:block">Kids With Solution</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/KidsWithSolutions-master/public/home" class="text-brand-dark hover:text-brand-green font-medium transition-colors">Home</a>
                    <a href="/KidsWithSolutions-master/public/programs" class="text-brand-dark hover:text-brand-green font-medium transition-colors">Programs</a>
                    <a href="/KidsWithSolutions-master/public/about" class="text-brand-dark hover:text-brand-green font-medium transition-colors">About Us</a>
                    <a href="/KidsWithSolutions-master/public/contact" class="text-brand-dark hover:text-brand-green font-medium transition-colors">Contact Us</a>
                </nav>

                <!-- CTAs -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/KidsWithSolutions-master/public/donate" class="text-brand-blue font-semibold hover:text-blue-700 transition-colors">Donate</a>
                    <a href="/KidsWithSolutions-master/public/register" class="bg-brand-green hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">Register</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-500 hover:text-brand-dark focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-green p-2 rounded-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/KidsWithSolutions-master/public/home" class="block px-3 py-2 rounded-md text-base font-medium text-brand-dark hover:text-brand-green hover:bg-gray-50">Home</a>
                <a href="/KidsWithSolutions-master/public/programs" class="block px-3 py-2 rounded-md text-base font-medium text-brand-dark hover:text-brand-green hover:bg-gray-50">Programs</a>
                <a href="/KidsWithSolutions-master/public/about" class="block px-3 py-2 rounded-md text-base font-medium text-brand-dark hover:text-brand-green hover:bg-gray-50">About Us</a>
                <a href="/KidsWithSolutions-master/public/contact" class="block px-3 py-2 rounded-md text-base font-medium text-brand-dark hover:text-brand-green hover:bg-gray-50">Contact Us</a>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-col gap-2 px-3">
                    <a href="/KidsWithSolutions-master/public/donate" class="block text-center text-brand-blue font-semibold py-2">Donate</a>
                    <a href="/KidsWithSolutions-master/public/register" class="block text-center bg-brand-green text-white font-bold py-2 px-4 rounded-full shadow-md">Register</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        <?php if(isset($data['view'])) require_once __DIR__ . '/../' . $data['view'] . '.php'; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded bg-brand-green flex items-center justify-center text-white font-bold text-lg">K</div>
                        <span class="font-bold text-xl">Kids With Solution</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">Equipping children and young people with basic digital literacy skills through structured bootcamps to prepare them for the future.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-brand-blue transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-brand-purple transition-colors">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/KidsWithSolutions-master/public/home" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/KidsWithSolutions-master/public/programs" class="text-gray-400 hover:text-white transition-colors">Programs</a></li>
                        <li><a href="/KidsWithSolutions-master/public/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="/KidsWithSolutions-master/public/contact" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="/KidsWithSolutions-master/public/donate" class="text-brand-green font-medium hover:text-green-400 transition-colors">Donate Now</a></li>
                        <li><a href="/KidsWithSolutions-master/public/register" class="text-gray-400 hover:text-white transition-colors">Register a Child</a></li>
                        <li><a href="/KidsWithSolutions-master/public/contact" class="text-gray-400 hover:text-white transition-colors">Volunteer</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">© <?php echo date('Y'); ?> Kids With Solution Foundation. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0 text-gray-500 text-sm">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
