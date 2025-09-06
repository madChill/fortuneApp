<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fortune Telling - Your Destiny Awaits | MingMing Fortune</title>
    <meta name="description" content="Discover your future with professional Chinese fortune telling. Get your Zi Wei Dou Shu, Bazi analysis, love compatibility and more.">
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&family=crimson-text:400,600" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-serif {
            font-family: 'Crimson Text', serif;
        }
        .bg-mystical {
            background: linear-gradient(135deg, rgb(109, 87, 122) 0%, rgb(151, 101, 69) 100%);
            position: relative;
        }
        .bg-mystical::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/attached_assets/generated_images/Purple_mountain_landscape_background_807c11a3.png') center/cover no-repeat;
            opacity: 0.3;
            z-index: 1;
        }
        .bg-mystical > * {
            position: relative;
            z-index: 2;
        }
        .bg-gradient-main {
            background: linear-gradient(135deg, #f5f3ff 0%, #fdf2f8 50%, #fef7ed 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .floating-stars {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .floating-stars::before,
        .floating-stars::after {
            content: '✨';
            position: absolute;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            animation: float 6s ease-in-out infinite;
        }
        .floating-stars::before {
            top: 15%;
            left: 8%;
            animation-delay: -2s;
        }
        .floating-stars::after {
            top: 70%;
            right: 12%;
            animation-delay: -4s;
        }
        .star-scattered {
            position: absolute;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            animation: twinkle 4s ease-in-out infinite;
        }
        .star-1 { top: 25%; left: 20%; animation-delay: -1s; }
        .star-2 { top: 45%; right: 25%; animation-delay: -3s; }
        .star-3 { top: 65%; left: 75%; animation-delay: -5s; }
        .star-4 { top: 35%; left: 60%; animation-delay: -2.5s; }
        .star-5 { top: 80%; right: 40%; animation-delay: -4.5s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.8; }
            50% { transform: translateY(-20px) rotate(10deg); opacity: 1; }
        }
        @keyframes twinkle {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }
        .mystical-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-mystical min-h-screen">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-purple-100 shadow-sm">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shadow-lg">
                        <i class="fas fa-sparkles text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                            MingMing Fortune
                        </h1>
                        <p class="text-xs text-gray-500 -mt-1">Your Destiny Awaits</p>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-gray-600 hover:text-purple-600 transition-colors font-medium">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-purple-600 transition-colors font-medium">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-purple-600 transition-colors font-medium">Contact</a>
                </div>
                
                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="text-gray-600 hover:text-purple-600 transition-colors font-medium">
                                Sign In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                   class="px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                    Get Started
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </header>

    <!-- Hero Banner Section -->
    <section class="py-16 px-4 relative overflow-hidden">
        <div class="floating-stars"></div>
        <div class="star-scattered star-1">⭐</div>
        <div class="star-scattered star-2">✨</div>
        <div class="star-scattered star-3">⭐</div>
        <div class="star-scattered star-4">✨</div>
        <div class="star-scattered star-5">⭐</div>
        
        <!-- Three Featured Cards Layout -->
        <div class="container mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- 2025 Yearly Fortune Analysis -->
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        <img src="/attached_assets/generated_images/Anime_fortune_teller_girl_348a2a59.png" 
                             alt="2025 Yearly Fortune Analysis" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-3 left-3">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-orange-500 to-red-500 text-white">
                                Paid online fortune-telling
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">2025 Yearly Fortune Analysis</h3>
                        <p class="text-sm text-gray-600">Fortune for the Year of the Snake</p>
                    </div>
                </div>

                <!-- 2025 Love Fortune Analysis -->
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        <img src="/attached_assets/generated_images/Anime_couple_love_fortune_cae20115.png" 
                             alt="2025 Love Fortune Analysis" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-3 left-3">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-yellow-500 to-orange-500 text-white">
                                Free online fortune-telling
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">2025 Love Fortune Analysis</h3>
                        <p class="text-sm text-gray-600">Includes yearly love fortune prediction</p>
                    </div>
                </div>

                <!-- Free Zi Wei Dou Shu Fortune-telling -->
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        <img src="/attached_assets/generated_images/Anime_Zi_Wei_fortune_wheel_a4dff8a1.png" 
                             alt="Free Zi Wei Dou Shu Fortune-telling" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-3 left-3">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-emerald-500 text-white">
                                Free online fortune-telling
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Free Zi Wei Dou Shu Fortune-telling</h3>
                        <p class="text-sm text-gray-600">Destiny Analysis with Free Yearly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services Grid -->
    <section id="services" class="py-20 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Fortune Telling Services
                </h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Choose from our comprehensive range of fortune telling services designed to guide your life journey
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Zi Wei Dou Shu -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_Zi_Wei_fortune_wheel_a4dff8a1.png" 
                             alt="Zi Wei Dou Shu Fortune Wheel" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-emerald-500 text-white">
                                Free
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center mr-3">
                                <i class="fas fa-yin-yang text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">Free Zi Wei Dou Shu Fortune-telling</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Destiny Analysis with Free Yearly Forecast</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">Free</span>
                            <a href="/ziwei" class="px-6 py-2 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Try Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2025 Yearly Fortune -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_fortune_teller_girl_348a2a59.png" 
                             alt="2025 Yearly Fortune Analysis" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                                Paid
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-600 to-indigo-700 flex items-center justify-center mr-3">
                                <i class="fas fa-calendar-star text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">2025 Yearly Fortune Analysis</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Fortune for the Year of the Snake</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">$29.99</span>
                            <a href="/yearly-fortune" class="px-6 py-2 bg-gradient-to-r from-purple-600 to-indigo-700 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Get Reading
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Love Fortune -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_couple_love_fortune_cae20115.png" 
                             alt="2025 Love Fortune Analysis" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                                Paid
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center mr-3">
                                <i class="fas fa-heart text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">2025 Love Fortune Analysis</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Includes yearly love fortune prediction</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">$19.99</span>
                            <a href="/love-fortune" class="px-6 py-2 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Find Love
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bazi Fortune -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_Bazi_fortune_telling_a7d95221.png" 
                             alt="Free Bazi Fortune Telling" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-emerald-500 text-white">
                                Free
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center mr-3">
                                <i class="fas fa-user-circle text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">Free Bazi Fortune Telling</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Analyze your personality traits</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-violet-600 to-purple-600 bg-clip-text text-transparent">Free</span>
                            <a href="/bazi" class="px-6 py-2 bg-gradient-to-r from-violet-500 to-purple-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Analyze
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Compatibility -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_couple_love_fortune_cae20115.png" 
                             alt="Couple Compatibility Analysis" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-purple-500 to-pink-500 text-white">
                                Paid
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center mr-3">
                                <i class="fas fa-heart-circle-check text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">Couple Compatibility Analysis</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Detailed analysis of compatibility</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">$24.99</span>
                            <a href="/compatibility" class="px-6 py-2 bg-gradient-to-r from-rose-500 to-pink-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Test Match
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Career Divination -->
                <div class="group relative overflow-hidden rounded-3xl mystical-card shadow-lg card-hover border border-purple-200">
                    <div class="relative overflow-hidden rounded-t-3xl h-48">
                        <img src="/attached_assets/generated_images/Anime_career_fortune_girl_4e94ccac.png" 
                             alt="Career Divination" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4">
                            <div class="px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-emerald-500 text-white">
                                Free
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center mr-3">
                                <i class="fas fa-briefcase text-white text-lg"></i>
                            </div>
                            <h4 class="text-lg font-bold text-gray-800">Career Divination</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Divination on your opportunities</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Free</span>
                            <a href="/career" class="px-6 py-2 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-medium rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center px-6 py-3 bg-white/80 backdrop-blur rounded-full shadow-lg border border-purple-100">
                    <i class="fas fa-shield-check text-purple-600 mr-2"></i>
                    <span class="text-gray-700 font-medium">Secure • Private • Accurate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Love Divination Section -->
    <section class="py-20 bg-gradient-to-br from-pink-50 to-purple-50 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-6 bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent">
                    Free Love Divination
                </h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    You can choose your current relationship status to predict your fortune!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Love Relationship -->
                <div class="bg-white rounded-3xl p-6 shadow-lg card-hover border border-pink-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-center mb-2">Love Relationship Divination</h4>
                    <p class="text-sm text-gray-600 text-center mb-4">Understand and explore relationship development</p>
                    <div class="space-y-2 text-xs text-gray-500 mb-4">
                        <div>In a Honeymoon Phase</div>
                        <div>In Marriage</div>
                        <div>In a Stable Relationship</div>
                    </div>
                    <a href="/love-divination/relationship" class="block w-full text-center py-2 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-full font-medium hover:shadow-lg transition-all">
                        Start Reading
                    </a>
                </div>

                <!-- Ambiguous Relationship -->
                <div class="bg-white rounded-3xl p-6 shadow-lg card-hover border border-purple-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-question-circle text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-center mb-2">Ambiguous Relationship Divination</h4>
                    <p class="text-sm text-gray-600 text-center mb-4">Explore inner feelings and possibilities</p>
                    <div class="space-y-2 text-xs text-gray-500 mb-4">
                        <div>Having a Secret Crush</div>
                        <div>Mutual Affection</div>
                        <div>Uncertain</div>
                    </div>
                    <a href="/love-divination/ambiguous" class="block w-full text-center py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-full font-medium hover:shadow-lg transition-all">
                        Explore Feelings
                    </a>
                </div>

                <!-- Reunion Possibility -->
                <div class="bg-white rounded-3xl p-6 shadow-lg card-hover border border-emerald-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-undo text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-center mb-2">Reunion Possibility Divination</h4>
                    <p class="text-sm text-gray-600 text-center mb-4">Explore deep feelings and reunion possibility</p>
                    <div class="space-y-2 text-xs text-gray-500 mb-4">
                        <div>Broken up</div>
                        <div>In the process of healing</div>
                        <div>Testing the waters</div>
                    </div>
                    <a href="/love-divination/reunion" class="block w-full text-center py-2 bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-full font-medium hover:shadow-lg transition-all">
                        Check Reunion
                    </a>
                </div>

                <!-- Relationship Deterioration -->
                <div class="bg-white rounded-3xl p-6 shadow-lg card-hover border border-orange-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-heart-crack text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-center mb-2">Relationship Deterioration Divination</h4>
                    <p class="text-sm text-gray-600 text-center mb-4">Explore signs and possibility of reconciliation</p>
                    <div class="space-y-2 text-xs text-gray-500 mb-4">
                        <div>In a Cold War</div>
                        <div>Deteriorating</div>
                        <div>Fading</div>
                    </div>
                    <a href="/love-divination/deterioration" class="block w-full text-center py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full font-medium hover:shadow-lg transition-all">
                        Get Guidance
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
        <div class="container mx-auto text-center">
            <div class="bg-white/80 backdrop-blur rounded-3xl p-12 shadow-2xl border border-purple-100 max-w-4xl mx-auto">
                <h3 class="text-3xl font-bold mb-4 bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                    2025 Personal Fortune Telling Service Now Accepting Reservations
                </h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    The 2025 Yi-Si Year fortune telling service is now available for reservation. In addition to analyzing your annual fortune, you can also inquire about career, romance, immigration, family, or children-related issues.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <a href="/service/year-analysis" class="p-4 bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-2xl hover:shadow-lg transition-all">
                        <div class="font-semibold">Annual Fortune Telling Service</div>
                    </a>
                    <a href="/service/personal" class="p-4 bg-gradient-to-br from-indigo-500 to-purple-500 text-white rounded-2xl hover:shadow-lg transition-all">
                        <div class="font-semibold">Online Personal Fortune Service</div>
                    </a>
                    <a href="/service/baby-analysis" class="p-4 bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-2xl hover:shadow-lg transition-all">
                        <div class="font-semibold">Newborn Fortune & Name Service</div>
                    </a>
                    <a href="/service/feng-shui" class="p-4 bg-gradient-to-br from-emerald-500 to-teal-500 text-white rounded-2xl hover:shadow-lg transition-all">
                        <div class="font-semibold">Feng Shui Luck Enhancement</div>
                    </a>
                </div>
                <p class="text-sm text-gray-500">Due to high demand, please be patient while waiting for your reservation.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto text-center">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shadow-lg">
                    <i class="fas fa-sparkles text-white text-lg"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        MingMing Fortune
                    </h4>
                    <p class="text-xs text-gray-400 -mt-1">Your Destiny Awaits</p>
                </div>
            </div>
            <p class="text-gray-400 mb-6 max-w-2xl mx-auto">
                Professional Chinese fortune telling services with modern technology. Discover your destiny with our accurate predictions and personalized guidance.
            </p>
            <div class="flex justify-center space-x-6 text-sm text-gray-400">
                <a href="/privacy" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="/terms" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="/contact" class="hover:text-white transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>