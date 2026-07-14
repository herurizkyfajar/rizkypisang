<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizky Pisang - Pusat Grosir Pisang & Sembako Terlengkap di Cimahi</title>
    <meta name="description" content="Pusat grosir pisang dan sembako terlengkap di Cimahi sejak 1992. Menyediakan aneka pisang segar, olahan, dan kebutuhan pokok dengan harga grosir.">
    <link rel="icon" type="image/png" href="https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --green-deep: #0a2e1a;
            --green-dark: #134e2b;
            --green-mid: #1a7a42;
            --green-light: #25a958;
            --green-accent: #34d872;
            --yellow-warm: #fbbf24;
            --yellow-bright: #fcd34d;
        }

        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }

        /* Hero Background */
        .hero-bg {
            background: linear-gradient(160deg, #071a0e 0%, #0d3319 25%, #145c2e 50%, #1a7a42 75%, #0f4a24 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at 30% 50%, rgba(52, 216, 114, 0.08) 0%, transparent 60%),
                        radial-gradient(ellipse at 70% 20%, rgba(251, 191, 36, 0.06) 0%, transparent 50%),
                        radial-gradient(ellipse at 50% 80%, rgba(52, 216, 114, 0.05) 0%, transparent 60%);
            animation: heroGlow 8s ease-in-out infinite alternate;
        }
        @keyframes heroGlow {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(-2%, 2%) rotate(3deg); }
        }

        /* Grid Pattern Overlay */
        .grid-pattern {
            background-image:
                linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        /* Floating Particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: particleFloat linear infinite;
        }
        @keyframes particleFloat {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
        }

        /* Glowing Orbs */
        .glow-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: orbPulse 6s ease-in-out infinite;
        }
        @keyframes orbPulse {
            0%, 100% { transform: scale(1); opacity: 0.4; }
            50% { transform: scale(1.2); opacity: 0.7; }
        }

        /* Text Animations */
        .hero-title {
            animation: slideUp 0.8s ease-out both;
        }
        .hero-title-delay { animation-delay: 0.15s; }
        .hero-subtitle { animation: slideUp 0.8s ease-out 0.3s both; }
        .hero-desc { animation: slideUp 0.8s ease-out 0.45s both; }
        .hero-buttons { animation: slideUp 0.8s ease-out 0.6s both; }
        .hero-visual { animation: slideRight 1s ease-out 0.3s both; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideRight {
            from { opacity: 0; transform: translateX(60px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Badge Styles */
        .badge-glow {
            animation: badgeGlow 2s ease-in-out infinite;
        }
        @keyframes badgeGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(52, 216, 114, 0.2); }
            50% { box-shadow: 0 0 40px rgba(52, 216, 114, 0.4); }
        }

        /* Glass Card */
        .glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .glass-strong {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        /* Banana Visual */
        .banana-main {
            animation: bananaFloat 4s ease-in-out infinite;
        }
        @keyframes bananaFloat {
            0%, 100% { transform: translateY(0) rotate(-2deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }
        .banana-ring {
            animation: ringRotate 12s linear infinite;
        }
        @keyframes ringRotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .banana-ring-reverse {
            animation: ringRotateReverse 15s linear infinite;
        }
        @keyframes ringRotateReverse {
            from { transform: rotate(360deg); }
            to { transform: rotate(0deg); }
        }

        /* Floating Tags */
        .float-tag {
            animation: floatTag 3s ease-in-out infinite;
        }
        .float-tag-2 {
            animation: floatTag 3s ease-in-out 0.8s infinite;
        }
        .float-tag-3 {
            animation: floatTag 3s ease-in-out 1.6s infinite;
        }
        @keyframes floatTag {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #34d872, #fbbf24, #34d872);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
        }
        @keyframes gradientShift {
            0%, 100% { background-position: 0% center; }
            50% { background-position: 100% center; }
        }

        /* Button Effects */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -100%;
            width: 60%;
            height: 200%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: skewX(-25deg);
            animation: btnShine 3s ease-in-out infinite;
        }
        @keyframes btnShine {
            0% { left: -100%; }
            30%, 100% { left: 200%; }
        }

        /* Section Styles */
        .gradient-green {
            background: linear-gradient(135deg, var(--green-deep), var(--green-dark));
        }
        .text-gradient-green {
            background: linear-gradient(135deg, #134e2b, #25a958);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .nav-blur {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .category-btn { transition: all 0.3s ease; }
        .category-btn.active {
            background: #134e2b;
            color: white;
            transform: scale(1.05);
        }
        .product-image { transition: transform 0.5s ease; }
        .card-hover:hover .product-image { transform: scale(1.1); }
        .pulse-green {
            animation: pulseGreen 2s infinite;
        }
        @keyframes pulseGreen {
            0%, 100% { box-shadow: 0 0 0 0 rgba(52, 216, 114, 0.4); }
            50% { box-shadow: 0 0 0 15px rgba(52, 216, 114, 0); }
        }

        /* Scroll Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#" class="flex items-center gap-3 group">
                    <img src="https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang.png" alt="Rizky Pisang Logo" class="h-12 w-auto bg-white rounded-[5px] p-1 group-hover:scale-105 transition-transform duration-300">
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#beranda" class="text-white/70 hover:text-white transition-colors font-medium text-sm tracking-wide">Beranda</a>
                    <a href="#tentang" class="text-white/70 hover:text-white transition-colors font-medium text-sm tracking-wide">Tentang</a>
                    <a href="#produk" class="text-white/70 hover:text-white transition-colors font-medium text-sm tracking-wide">Produk</a>
                    <a href="#lokasi" class="text-white/70 hover:text-white transition-colors font-medium text-sm tracking-wide">Lokasi</a>
                    <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20produk%20Rizky%20Pisang" target="_blank"
                       class="bg-white/10 backdrop-blur-sm border border-white/20 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-white hover:text-green-900 transition-all duration-300 flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Hubungi
                    </a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-green-950/95 nav-blur border-t border-white/10">
            <div class="px-4 py-4 space-y-1">
                <a href="#beranda" class="block text-white py-3 px-4 rounded-xl hover:bg-white/10 transition-colors font-medium">Beranda</a>
                <a href="#tentang" class="block text-white py-3 px-4 rounded-xl hover:bg-white/10 transition-colors font-medium">Tentang</a>
                <a href="#produk" class="block text-white py-3 px-4 rounded-xl hover:bg-white/10 transition-colors font-medium">Produk</a>
                <a href="#lokasi" class="block text-white py-3 px-4 rounded-xl hover:bg-white/10 transition-colors font-medium">Lokasi</a>
                <a href="https://web.whatsapp.com/send?phone=6287824443944" target="_blank"
                   class="block bg-green-500 text-white text-center py-3 rounded-xl font-bold mt-3">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SECTION ==================== -->
    <section id="beranda" class="hero-bg min-h-screen flex items-center relative">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 grid-pattern"></div>

        <!-- Glowing Orbs -->
        <div class="glow-orb w-[500px] h-[500px] bg-green-500/20 top-[-10%] left-[-5%]"></div>
        <div class="glow-orb w-[400px] h-[400px] bg-yellow-400/10 bottom-[10%] right-[-5%]" style="animation-delay: 2s;"></div>
        <div class="glow-orb w-[300px] h-[300px] bg-green-400/15 top-[40%] left-[30%]" style="animation-delay: 4s;"></div>

        <!-- Floating Particles -->
        <div id="particles-container" class="absolute inset-0 pointer-events-none"></div>

        <!-- Diagonal Accent Line -->
        <div class="absolute top-0 right-0 w-1 h-[120%] bg-gradient-to-b from-transparent via-green-400/20 to-transparent transform rotate-12 translate-x-[30vw]"></div>
        <div class="absolute top-0 right-0 w-px h-[120%] bg-gradient-to-b from-transparent via-yellow-400/10 to-transparent transform rotate-12 translate-x-[40vw]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                <!-- Left Content -->
                <div class="space-y-8 lg:pr-8">
                    <!-- Badge -->
                    <div class="hero-title">
                        <div class="inline-flex items-center gap-2.5 glass rounded-full px-5 py-2.5 badge-glow">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-400"></span>
                            </span>
                            <span class="text-green-200 text-sm font-semibold tracking-wide">Pusat Grosir Pisang & Sembako Terpercaya</span>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="hero-title hero-title-delay">
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black text-white leading-[1.1] tracking-tight">
                            <span class="text-gradient">Pusat Grosir Pisang</span>
                            <span class="block text-3xl sm:text-4xl lg:text-5xl font-bold text-white/60 mt-2 tracking-normal">& Sembako Terlengkap</span>
                        </h1>
                    </div>

                    <!-- Subtitle -->
                    <p class="hero-subtitle text-lg text-green-100/60 max-w-lg leading-relaxed font-light">
                        Sejak <span class="text-yellow-400 font-semibold">1992</span>, Rizky Pisang menyediakan aneka pisang segar dan olahan, serta kebutuhan pokok berkualitas dengan harga grosir terbaik di <span class="text-green-300 font-medium">Cimahi</span>.
                    </p>

                    <!-- Buttons -->
                    <div class="hero-buttons flex flex-wrap gap-4">
                        <a href="#produk" class="btn-shine group bg-gradient-to-r from-yellow-400 to-yellow-500 text-green-950 px-8 py-4 rounded-2xl font-bold text-base hover:from-yellow-300 hover:to-yellow-400 transition-all duration-300 hover:shadow-[0_0_40px_rgba(251,191,36,0.3)] hover:scale-105 flex items-center gap-3">
                            <span class="w-10 h-10 bg-green-900/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">🛒</span>
                            Belanja Sekarang
                        </a>
                        <a href="#lokasi" class="glass text-white px-8 py-4 rounded-2xl font-bold text-base hover:bg-white/15 transition-all duration-300 flex items-center gap-3">
                            <span class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">📍</span>
                            Lihat Lokasi
                        </a>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="hero-visual relative hidden lg:flex items-center justify-center">
                    <div class="relative w-[480px] h-[480px]">
                        <!-- Outer Ring -->
                        <div class="absolute inset-0 banana-ring">
                            <div class="w-full h-full rounded-full border border-dashed border-green-400/20"></div>
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1 w-3 h-3 bg-green-400/40 rounded-full"></div>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1 w-2 h-2 bg-yellow-400/40 rounded-full"></div>
                            <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1 w-2 h-2 bg-green-300/30 rounded-full"></div>
                        </div>

                        <!-- Middle Ring -->
                        <div class="absolute inset-[60px] banana-ring-reverse">
                            <div class="w-full h-full rounded-full border-2 border-white/8"></div>
                        </div>

                        <!-- Inner Glow -->
                        <div class="absolute inset-[100px] rounded-full bg-gradient-to-br from-green-400/20 via-green-500/10 to-yellow-400/10 blur-xl"></div>

                        <!-- Main Circle with Sembako Image -->
                        <div class="absolute inset-[100px] flex items-center justify-center overflow-hidden">
                            <img src="https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-18.png" alt="Aneka Produk Rizky Pisang" class="w-full h-full object-contain drop-shadow-2xl">
                        </div>

                        <!-- Floating Tags -->
                        <div class="float-tag absolute top-8 right-0 glass-strong rounded-2xl px-5 py-3 shadow-2xl">
                            <div class="flex items-center gap-2">
                                <span class="text-xl">✅</span>
                                <div>
                                    <p class="text-white font-bold text-sm">Segar Setiap Hari</p>
                                    <p class="text-green-300/60 text-xs">Kualitas Terjamin</p>
                                </div>
                            </div>
                        </div>

                        <div class="float-tag-2 absolute bottom-16 left-0 glass-strong rounded-2xl px-5 py-3 shadow-2xl">
                            <div class="flex items-center gap-2">
                                <span class="text-xl">💰</span>
                                <div>
                                    <p class="text-white font-bold text-sm">Harga Grosir</p>
                                    <p class="text-green-300/60 text-xs">Harga Bersaing</p>
                                </div>
                            </div>
                        </div>

                        <div class="float-tag-3 absolute top-1/2 -left-8 -translate-y-1/2 glass-strong rounded-2xl px-5 py-3 shadow-2xl">
                            <div class="flex items-center gap-2">
                                <span class="text-xl">🏆</span>
                                <div>
                                    <p class="text-white font-bold text-sm">Sejak 1992</p>
                                    <p class="text-green-300/60 text-xs">Terpercaya 30+ Tahun</p>
                                </div>
                            </div>
                        </div>

                        <div class="float-tag-2 absolute -bottom-4 right-12 glass-strong rounded-2xl px-5 py-3 shadow-2xl">
                            <div class="flex items-center gap-2">
                                <span class="text-xl">🏪</span>
                                <div>
                                    <p class="text-white font-bold text-sm">2 Lokasi</p>
                                    <p class="text-green-300/60 text-xs">Cimahi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg viewBox="0 0 1440 140" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0 140L48 128C96 116 192 92 288 84C384 76 480 84 576 96C672 108 768 124 864 120C960 116 1056 92 1152 80C1248 68 1344 68 1392 68L1440 68V140H1392C1344 140 1248 140 1152 140C1056 140 960 140 864 140C768 140 672 140 576 140C480 140 384 140 288 140C192 140 96 140 48 140H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative reveal">
                    <div class="absolute -inset-4 bg-gradient-to-r from-green-600/20 to-green-400/20 rounded-3xl blur-xl"></div>
                    <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">
                        <img src="https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-18.png" alt="Aneka Produk Rizky Pisang" class="w-full h-80 object-contain bg-white">
                        <div class="p-8">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center"><span class="text-2xl">🏪</span></div>
                                <div>
                                    <h3 class="font-bold text-gray-800">2 Lokasi Toko</h3>
                                    <p class="text-gray-500 text-sm">Mudah dijangkau</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 rounded-xl p-4">
                                    <p class="text-sm text-green-800 font-medium">📍 Jl. KH Usman Dhomiri</p>
                                    <p class="text-xs text-green-600 mt-1">Depan Alfamart Cisangkan</p>
                                </div>
                                <div class="bg-green-50 rounded-xl p-4">
                                    <p class="text-sm text-green-800 font-medium">📍 Pasar Antri</p>
                                    <p class="text-xs text-green-600 mt-1">Los B 230 Cimahi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 reveal">
                    <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-4 py-2 text-green-700 text-sm font-semibold">🏆 Terpercaya Sejak 1992</div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 leading-tight">
                        Pusat Grosir Pisang dan Sembako <span class="text-gradient-green">Terlengkap di Cimahi!</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Rizky Pisang adalah pusat grosir pisang dan sembako terpercaya di Kota Cimahi, berdiri sejak tahun 1992. Kami menyediakan berbagai jenis pisang segar dan olahan, serta aneka kebutuhan pokok.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0"><span class="text-xl">🍌</span></div>
                            <div><h4 class="font-bold text-gray-800">Aneka Pisang</h4><p class="text-sm text-gray-500">Segar & olahan berkualitas</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0"><span class="text-xl">🛒</span></div>
                            <div><h4 class="font-bold text-gray-800">Sembako Lengkap</h4><p class="text-sm text-gray-500">Kebutuhan pokok harian</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0"><span class="text-xl">💰</span></div>
                            <div><h4 class="font-bold text-gray-800">Harga Grosir</h4><p class="text-sm text-gray-500">Harga bersaing</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0"><span class="text-xl">✅</span></div>
                            <div><h4 class="font-bold text-gray-800">Kualitas Terjamin</h4><p class="text-sm text-gray-500">Produk pilihan terbaik</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-4 py-2 text-green-700 text-sm font-semibold mb-4">🛍️ Koleksi Produk Kami</div>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">Produk Kami</h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">Berbagai produk berkualitas untuk kebutuhan Anda</p>
            </div>
            <div class="flex flex-wrap justify-center gap-3 mb-12 reveal" id="category-filter">
                <button onclick="filterProducts('all')" class="category-btn active px-6 py-3 rounded-full font-semibold border-2 border-green-800 transition-all text-sm" data-category="all">🌟 Semua Produk</button>
                @foreach($categories as $category)
                <button onclick="filterProducts('{{ $category->slug }}')" class="category-btn px-6 py-3 rounded-full font-semibold border-2 border-green-800 text-green-800 hover:bg-green-800 hover:text-white transition-all text-sm" data-category="{{ $category->slug }}">{{ $category->icon }} {{ $category->name }}</button>
                @endforeach
            </div>
            <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($categories as $category)
                    @foreach($category->products as $product)
                    <div class="product-card card-hover bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 reveal" data-category="{{ $category->slug }}">
                        <div class="relative overflow-hidden bg-gray-100 h-56">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image w-full h-full object-cover" loading="lazy">
                            <div class="absolute top-3 left-3"><span class="bg-green-800 text-white text-xs font-bold px-3 py-1 rounded-full">{{ $category->name }}</span></div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-gray-800 text-lg mb-3">{{ $product->name }}</h3>
                            <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20{{ urlencode($product->name) }}" target="_blank"
                               class="block w-full bg-green-800 text-white text-center py-3 rounded-xl font-bold hover:bg-green-700 transition-all hover:shadow-lg">💬 Pesan Sekarang</a>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="lokasi" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <div class="inline-flex items-center gap-2 bg-green-100 rounded-full px-4 py-2 text-green-700 text-sm font-semibold mb-4">📍 Kunjungi Toko Kami</div>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">Kami memiliki dua cabang di Cimahi untuk memudahkan Anda berbelanja</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden reveal">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center"><span class="text-2xl">🏪</span></div>
                            <div><h3 class="font-bold text-gray-800 text-lg">Rizky Pisang - Cabang Utama</h3><p class="text-green-600 text-sm font-medium">Depan Alfamart Cisangkan</p></div>
                        </div>
                        <div class="bg-green-50 rounded-xl p-4 mb-4"><p class="text-gray-700 text-sm leading-relaxed">📍 Jl. KH Usman Dhomiri RT 01 RW17 No 06<br>Kelurahan Padasuka, Kec. Cimahi Tengah<br>Kota Cimahi</p></div>
                        <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20kunjungi%20toko%20Rizky%20Pisang%20cabang%20utama" target="_blank" class="block w-full bg-green-800 text-white text-center py-3 rounded-xl font-bold hover:bg-green-700 transition-all text-sm">💬 Hubungi via WhatsApp</a>
                    </div>
                    <div class="h-64"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6!2d107.54!3d-6.88!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sCimahi!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden reveal">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center"><span class="text-2xl">🏬</span></div>
                            <div><h3 class="font-bold text-gray-800 text-lg">Rizky Pisang - Pasar Antri</h3><p class="text-yellow-600 text-sm font-medium">Los B 230 Cimahi</p></div>
                        </div>
                        <div class="bg-yellow-50 rounded-xl p-4 mb-4"><p class="text-gray-700 text-sm leading-relaxed">📍 Pasar Antri Los B 230<br>Kota Cimahi</p></div>
                        <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20kunjungi%20toko%20Rizky%20Pisang%20Pasar%20Antri" target="_blank" class="block w-full bg-yellow-500 text-white text-center py-3 rounded-xl font-bold hover:bg-yellow-600 transition-all text-sm">💬 Hubungi via WhatsApp</a>
                    </div>
                    <div class="h-64"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5!2d107.54!3d-6.89!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sPasar+Antri+Cimahi!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
            <div class="mt-12 gradient-green rounded-3xl p-8 lg:p-12 text-center text-white relative overflow-hidden reveal">
                <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl lg:text-3xl font-bold mb-4">Butuh Bantuan? Hubungi Kami!</h3>
                    <p class="text-green-100 mb-6 max-w-xl mx-auto">Kami siap membantu Anda menemukan produk terbaik untuk kebutuhan bisnis atau rumah tangga Anda.</p>
                    <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20produk%20Rizky%20Pisang" target="_blank"
                       class="inline-flex items-center gap-3 bg-white text-green-800 px-8 py-4 rounded-full font-bold text-lg hover:bg-green-50 transition-all hover:shadow-xl hover:scale-105 pulse-green">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat WhatsApp Sekarang
                    </a>
                    <p class="text-green-200 mt-4 text-sm">📞 087-824-443-944</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang.png" alt="Rizky Pisang Logo" class="h-12 w-auto">
                        <div><span class="text-xl font-bold">Rizky Pisang</span><p class="text-xs text-gray-400">Sejak 1992</p></div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">Pusat grosir pisang dan sembako terlengkap di Cimahi. Menyediakan aneka pisang segar, olahan, dan kebutuhan pokok dengan harga grosir.</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Menu Cepat</h4>
                    <div class="space-y-3">
                        <a href="#beranda" class="block text-gray-400 hover:text-green-400 transition-colors text-sm">Beranda</a>
                        <a href="#tentang" class="block text-gray-400 hover:text-green-400 transition-colors text-sm">Tentang Kami</a>
                        <a href="#produk" class="block text-gray-400 hover:text-green-400 transition-colors text-sm">Produk</a>
                        <a href="#lokasi" class="block text-gray-400 hover:text-green-400 transition-colors text-sm">Lokasi</a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Hubungi Kami</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-gray-400 text-sm"><span>📞</span><a href="https://web.whatsapp.com/send?phone=6287824443944" target="_blank" class="hover:text-green-400 transition-colors">087-824-443-944</a></div>
                        <div class="flex items-center gap-3 text-gray-400 text-sm"><span>📍</span><span>Jl. KH Usman Dhomiri, Cimahi</span></div>
                        <div class="flex items-center gap-3 text-gray-400 text-sm"><span>📍</span><span>Pasar Antri Los B 230, Cimahi</span></div>
                    </div>
                    <div class="flex gap-3 mt-4">
                        <a href="https://web.whatsapp.com/send?phone=6287824443944" target="_blank" class="w-10 h-10 bg-green-600 rounded-xl flex items-center justify-center hover:bg-green-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Rizky Pisang. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating -->
    <a href="https://web.whatsapp.com/send?phone=6287824443944&text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20produk%20Rizky%20Pisang" target="_blank"
       class="fixed bottom-6 right-6 z-50 w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-[0_8px_32px_rgba(34,197,94,0.4)] hover:shadow-[0_8px_40px_rgba(34,197,94,0.6)] transition-all duration-300 hover:scale-110 pulse-green group">
        <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- Back to Top -->
    <button id="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-6 left-6 z-50 w-12 h-12 bg-gray-800/90 backdrop-blur-sm rounded-full items-center justify-center shadow-lg hover:bg-gray-700 transition-all hover:scale-110 hidden text-white border border-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        // Create floating particles
        function createParticles() {
            const container = document.getElementById('particles-container');
            const colors = ['rgba(52,216,114,', 'rgba(251,191,36,', 'rgba(255,255,255,'];
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                const size = Math.random() * 4 + 1;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const opacity = Math.random() * 0.5 + 0.1;
                particle.style.cssText = `
                    width: ${size}px; height: ${size}px;
                    background: ${color}${opacity});
                    left: ${Math.random() * 100}%;
                    animation-duration: ${Math.random() * 20 + 15}s;
                    animation-delay: ${Math.random() * 20}s;
                `;
                container.appendChild(particle);
            }
        }
        createParticles();

        // Intersection Observer for scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Product Filter
        function filterProducts(category) {
            const cards = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.category-btn');
            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-green-800', 'text-white');
                if (btn.dataset.category === category) btn.classList.add('active');
            });
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Navbar scroll
        const navbar = document.getElementById('navbar');
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('bg-green-950/90', 'nav-blur', 'shadow-xl', 'border-b', 'border-white/10');
                backToTop.classList.remove('hidden');
                backToTop.classList.add('flex');
            } else {
                navbar.classList.remove('bg-green-950/90', 'nav-blur', 'shadow-xl', 'border-b', 'border-white/10');
                backToTop.classList.add('hidden');
                backToTop.classList.remove('flex');
            }
        });

        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // FadeIn keyframe
        const style = document.createElement('style');
        style.textContent = `@keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }`;
        document.head.appendChild(style);
    </script>
</body>
</html>
