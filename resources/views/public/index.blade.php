<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>AI Tools | Direktori Artificial Intelligence Terbaik</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;700;800&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --ink: #16213e;
            --coral: #ff6b6b;
            --sun: #ffd93d;
            --mint: #6bcb77;
            --sky: #4d96ff;
            --grape: #b98cff;
            --cream: #fff6e5;
            --lime: #a8e063;
            --banana: #ffcb3d;
            --blush: #f4c6d8;
            --mx: 0px;
            --my: 0px;
            --mouse-x: 50vw;
            --mouse-y: 50vh;
        }

        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, .font-display { font-family: 'Baloo 2', 'Plus Jakarta Sans', sans-serif; }

        /* ---------- Background Interaktif & Mesh Animasi Modern ---------- */
        body {
            background: 
                radial-gradient(circle at 15% 20%, rgba(255, 107, 107, 0.35), transparent 45%),
                radial-gradient(circle at 85% 30%, rgba(77, 150, 255, 0.35), transparent 45%),
                radial-gradient(circle at 50% 80%, rgba(255, 217, 61, 0.4), transparent 50%),
                radial-gradient(circle at 20% 85%, rgba(185, 140, 255, 0.35), transparent 40%),
                linear-gradient(135deg, var(--blush), var(--cream), var(--sky), var(--mint), var(--sun), var(--blush));
            background-attachment: fixed;
            background-size: 200% 200%, 200% 200%, 200% 200%, 200% 200%, 300% 300%;
            animation: gradientDrift 14s ease-in-out infinite alternate;
            overflow-x: hidden;
            position: relative;
        }

        /* Moving Grid Pattern Overlay */
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: 
                radial-gradient(rgba(22, 33, 62, 0.12) 2px, transparent 2px),
                radial-gradient(rgba(255, 255, 255, 0.7) 1.5px, transparent 1.5px);
            background-size: 32px 32px, 16px 16px;
            background-position: 0 0, 8px 8px;
            z-index: -1;
            pointer-events: none;
            animation: gridMove 25s linear infinite;
        }

        @keyframes gridMove {
            0% { background-position: 0 0, 8px 8px; }
            100% { background-position: 64px 64px, 72px 72px; }
        }

        @keyframes gradientDrift {
            0% { background-position: 0% 50%, 100% 0%, 50% 100%, 0% 100%, 0% 50%; }
            50% { background-position: 100% 50%, 0% 100%, 100% 0%, 100% 50%, 100% 50%; }
            100% { background-position: 0% 50%, 100% 0%, 50% 100%, 0% 100%, 0% 50%; }
        }

        /* Dynamic Interactive Spotlight Cursor Overlay */
        #cursor-glow {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none;
            z-index: 1;
            background: radial-gradient(550px circle at var(--mouse-x) var(--mouse-y), rgba(255, 255, 255, 0.45), transparent 75%);
            mix-blend-mode: overlay;
            transition: background 0.05s ease-out;
        }

        /* ---------- Ambient Blobs & Interactive Parallax ---------- */
        .blob {
            position: fixed;
            border-radius: 45% 55% 60% 40% / 50% 45% 55% 50%;
            filter: blur(28px);
            opacity: 0.7;
            z-index: 0;
            animation: blobMorph 9s ease-in-out infinite, blobFloat 13s ease-in-out infinite;
            pointer-events: none;
            margin-left: calc(var(--mx) * var(--parallax-speed));
            margin-top: calc(var(--my) * var(--parallax-speed));
            transition: margin 0.15s ease-out;
            will-change: transform, margin;
        }
        
        .blob:nth-of-type(1) { --parallax-speed: -1.8; }
        .blob:nth-of-type(2) { --parallax-speed: 2.2; }
        .blob:nth-of-type(3) { --parallax-speed: -2.8; }
        .blob:nth-of-type(4) { --parallax-speed: 2; }

        @keyframes blobMorph {
            0%, 100% { border-radius: 45% 55% 60% 40% / 50% 45% 55% 50%; }
            33% { border-radius: 65% 35% 50% 50% / 40% 60% 40% 60%; }
            66% { border-radius: 35% 65% 40% 60% / 55% 35% 65% 45%; }
        }
        @keyframes blobFloat {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            50% { transform: translate(25px, -30px) rotate(18deg) scale(1.08); }
        }

        /* ---------- Floating Ambient Elements & Bubbles ---------- */
        .floating-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .floating-bg span {
            position: absolute;
            font-size: 1.6rem;
            opacity: 0.65;
            animation: floatAround 12s infinite ease-in-out;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
            user-select: none;
        }

        .floating-bg span:nth-child(1) { top: 8%; left: 12%; animation-delay: 0s; }
        .floating-bg span:nth-child(2) { top: 22%; right: 10%; animation-delay: 2s; }
        .floating-bg span:nth-child(3) { bottom: 28%; left: 6%; animation-delay: 4s; }
        .floating-bg span:nth-child(4) { bottom: 12%; right: 15%; animation-delay: 1s; }
        .floating-bg span:nth-child(5) { top: 58%; left: 16%; animation-delay: 3s; }
        .floating-bg span:nth-child(6) { top: 38%; right: 20%; animation-delay: 5s; }
        .floating-bg span:nth-child(7) { bottom: 42%; right: 6%; animation-delay: 2.5s; }
        .floating-bg span:nth-child(8) { top: 78%; left: 42%; animation-delay: 3.5s; }

        @keyframes floatAround {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            25% { transform: translate(22px, -28px) rotate(15deg) scale(1.1); }
            50% { transform: translate(-18px, 22px) rotate(-12deg) scale(0.92); }
            75% { transform: translate(24px, 16px) rotate(10deg) scale(1.05); }
        }

        .bubble {
            position: fixed;
            bottom: -60px;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.25));
            border: 2px solid rgba(22, 33, 62, 0.2);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: bubbleRise infinite ease-in;
            box-shadow: inset 0 0 10px rgba(255,255,255,0.9), 0 4px 12px rgba(0,0,0,0.06);
        }

        @keyframes bubbleRise {
            0% { transform: translateY(0) scale(0.7) rotate(0deg); opacity: 0; }
            15% { opacity: 0.75; }
            85% { opacity: 0.75; }
            100% { transform: translateY(-115vh) scale(1.25) rotate(360deg); opacity: 0; }
        }

        /* ---------- Entrance stagger untuk kartu ---------- */
        .fade-up {
            opacity: 0;
            animation: fadeUp 0.55s ease forwards;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* ---------- Social icon wiggle ---------- */
        .social-icon:hover {
            animation: wiggle 0.5s ease;
        }
        @keyframes wiggle {
            0%, 100% { transform: translateY(-4px) rotate(0deg); }
            25% { transform: translateY(-4px) rotate(-10deg); }
            75% { transform: translateY(-4px) rotate(10deg); }
        }

        /* ---------- Link card hover ---------- */
        .link-card { transition: transform 0.18s ease, box-shadow 0.18s ease; }
        .link-card:active { transform: translate(1.5px, 1.5px) !important; }
        .link-icon-box { transition: transform 0.25s cubic-bezier(.34,1.56,.64,1); }
        .link-card:hover .link-icon-box { transform: rotate(-8deg) scale(1.08); }

        /* ---------- Sticker kucing dekoratif ---------- */
        .cat-sticker {
            position: absolute;
            filter: drop-shadow(3px 3px 0px rgba(15,23,42,0.25));
            cursor: pointer;
            transition: transform 0.25s cubic-bezier(.34,1.56,.64,1);
            z-index: 5;
        }
        .cat-sticker img {
            display: block;
            border-radius: 9999px;
            border: 3px solid var(--ink);
            background: white;
            object-fit: cover;
        }

        .cat-surprised {
            width: 44px; height: 44px;
            animation: floatSlow 4s ease-in-out infinite 0.6s;
        }
        .cat-banana {
            position: fixed;
            right: 14px;
            bottom: 90px;
            width: 74px;
            z-index: 5;
            filter: drop-shadow(3px 4px 0px rgba(15,23,42,0.25));
            animation: floatBob 3.4s ease-in-out infinite;
            cursor: pointer;
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0) rotate(-6deg); }
            50% { transform: translateY(-8px) rotate(4deg); }
        }
        @keyframes floatBob {
            0%, 100% { transform: translateY(0) rotate(-3deg); }
            50% { transform: translateY(-10px) rotate(3deg); }
        }

        .cat-sticker:hover, .cat-banana:hover {
            transform: scale(1.15) rotate(-4deg);
        }
        .cat-sticker.bounce-tap { animation: bounceTap 0.5s ease; }
        @keyframes bounceTap {
            0% { transform: scale(1); }
            40% { transform: scale(1.3) rotate(10deg); }
            100% { transform: scale(1) rotate(0deg); }
        }

        .speech-bubble {
            position: absolute;
            top: -8px;
            left: 50px;
            background: white;
            border: 2px solid var(--ink);
            border-radius: 14px;
            padding: 3px 8px;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
            box-shadow: 2px 2px 0px 0px var(--ink);
            opacity: 0;
            transform: translateY(4px) scale(0.9);
            transition: all 0.2s ease;
            pointer-events: none;
        }
        .cat-sticker:hover .speech-bubble {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* ---------- Kartu deskripsi/about ---------- */
        .about-card {
            background: white;
            border: 2px solid var(--ink);
            border-radius: 20px;
            box-shadow: 3px 3px 0px 0px var(--ink);
            padding: 18px 20px;
            position: relative;
        }

        /* ---------- Kucing pisang di sisi-sisi layar ---------- */
        .cat-banana-deco {
            position: fixed;
            z-index: 4;
            filter: drop-shadow(3px 4px 0px rgba(15,23,42,0.25));
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        .cat-banana-deco:hover {
            transform: scale(1.2) rotate(-6deg);
        }
        .cat-banana-tl { top: 70px; left: 8px; width: 52px; animation: floatBob 4s ease-in-out infinite 0.3s; }
        .cat-banana-bl { bottom: 16px; left: 10px; width: 56px; animation: floatSlow 4.6s ease-in-out infinite 0.8s; }
        .cat-banana-tr { top: 80px; right: 10px; width: 48px; animation: floatSlow 3.8s ease-in-out infinite 1.1s; }
        .cat-banana-br { bottom: 20px; right: 12px; width: 54px; animation: floatBob 4.2s ease-in-out infinite 0.5s; }
        .cat-banana-ml { top: 38%; left: 4px; width: 44px; animation: floatBob 4.2s ease-in-out infinite 1.6s; }
        .cat-banana-mr { top: 42%; right: 4px; width: 46px; animation: floatSlow 4.4s ease-in-out infinite 0.4s; }
        .cat-banana-ml2 { top: 68%; left: 6px; width: 48px; animation: floatSlow 3.7s ease-in-out infinite 0.9s; }
        .cat-banana-mr2 { top: 72%; right: 6px; width: 44px; animation: floatBob 4.5s ease-in-out infinite 1.3s; }
        .cat-banana-tc { top: 12px; left: 25%; width: 40px; animation: floatBob 3.9s ease-in-out infinite 0.7s; }
        .cat-banana-tc2 { top: 12px; right: 25%; width: 40px; animation: floatSlow 4.1s ease-in-out infinite 0.2s; }

        @media (max-width: 500px) {
            .cat-banana-deco { transform: scale(0.75); }
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased text-slate-900 pb-20">

    <!-- Interactive Cursor Glow Spotlight -->
    <div id="cursor-glow"></div>

    <!-- Interactive Floating Background Elements (Paw Prints Only) -->
    <div class="floating-bg">
        <span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span>
        <span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span>
    </div>

    <!-- Rising Ambient Bubbles -->
    <div class="bubble" style="left:8%;width:32px;height:32px;animation-duration:11s;animation-delay:0s;"></div>
    <div class="bubble" style="left:22%;width:20px;height:20px;animation-duration:8.5s;animation-delay:2s;"></div>
    <div class="bubble" style="left:45%;width:42px;height:42px;animation-duration:15s;animation-delay:1s;"></div>
    <div class="bubble" style="left:70%;width:28px;height:28px;animation-duration:10.5s;animation-delay:3s;"></div>
    <div class="bubble" style="left:88%;width:22px;height:22px;animation-duration:13s;animation-delay:0.5s;"></div>

    <!-- Blob dekorasi ambient -->
    <div class="blob w-60 h-60" style="background:var(--coral); top:-40px; left:-40px; animation-delay:0s;"></div>
    <div class="blob w-72 h-72" style="background:var(--sky); top:18%; right:-60px; animation-delay:1.5s;"></div>
    <div class="blob w-52 h-52" style="background:var(--sun); bottom:8%; left:-30px; animation-delay:3s;"></div>
    <div class="blob w-60 h-60" style="background:var(--mint); bottom:-40px; right:10%; animation-delay:2s;"></div>

    <main class="max-w-md mx-auto pt-10 px-4 flex flex-col items-center relative z-10">

        <!-- HEADER UTAMA AI TOOLS -->
        <div class="text-center mb-6 fade-up">
            <span class="inline-block bg-white/80 border-2 border-slate-900 text-slate-900 text-xs font-black px-4 py-1.5 rounded-full shadow-[2px_2px_0px_0px_#0f172a] mb-2">
                AI Directory & Platform
            </span>
            <h1 class="text-3xl font-display font-black tracking-tight text-slate-900">AI Tools Hub</h1>
        </div>

        <!-- KARTU DESKRIPSI DENGAN STICKER KUCING -->
        <div class="about-card w-full mb-6 fade-up" style="animation-delay:0.02s">
            <div class="cat-sticker cat-surprised" style="left: -14px; top: -14px;"
                onclick="event.stopPropagation(); this.classList.add('bounce-tap'); setTimeout(() => this.classList.remove('bounce-tap'), 500)">
                <img src="{{ asset('images/cat-surprised.jpg') }}" alt="Maskot kucing kaget" class="w-full h-full">
                <span class="speech-bubble">halo 🐾</span>
            </div>

            <p class="text-center text-[13px] font-black mb-2 mt-1 leading-relaxed">
               AI Tools adalah pusat kumpulan AI terbaik untuk membantu kebutuhan menulis, coding, desain, gambar, video, presentasi, dan produktivitas. Jelajahi berbagai platform AI populer dalam satu tempat dan temukan tools yang tepat hanya dengan satu klik.

        </div>

        <div class="flex items-center gap-4 mb-8">
            <a href="#" class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-slate-900 hover:text-white transition-colors">
                <i data-lucide="github" class="w-5 h-5"></i>
            </a>
            <a href="#" class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-sky-500 hover:text-white transition-colors">
                <i data-lucide="linkedin" class="w-5 h-5"></i>
            </a>
            <a href="#" class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-rose-400 hover:text-white transition-colors">
                <i data-lucide="mail" class="w-5 h-5"></i>
            </a>
        </div>

        <!-- Slider Wrapper (Menggeser kolom tanpa mengganti halaman) -->
        @php
            $linkChunks = $links->chunk(10);
            $totalSlides = max(1, $linkChunks->count());
        @endphp

        <div class="w-full relative overflow-hidden mt-2">
            <div id="slides-wrapper" class="flex transition-transform duration-500 ease-in-out">
                @foreach ($linkChunks as $chunk)
                    <div class="w-full shrink-0 grid grid-cols-5 gap-2">
                        @foreach ($chunk as $link)
                            <a href="{{ route('public.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer"
                                class="w-full block relative group fade-up">

                                <div class="absolute inset-0 bg-slate-900 rounded-2xl translate-y-1 translate-x-1"></div>
                                
                                <div
                                    class="link-card relative w-full h-full bg-white border-2 border-slate-900 rounded-2xl p-2 flex flex-col items-center justify-center gap-1.5 transition-transform group-active:translate-y-1 group-active:translate-x-1 hover:-translate-y-0.5 hover:shadow-[3px_3px_0px_0px_#0f172a]">

                                    @if ($link->image)
                                        <img src="{{ asset('storage/' . $link->image) }}"
                                            class="link-icon-box w-9 h-9 object-cover rounded-xl border border-slate-900 bg-slate-100">
                                    @else
                                        @php
                                            $bubbleColors = ['bg-rose-200', 'bg-amber-200', 'bg-sky-200', 'bg-emerald-200', 'bg-violet-200'];
                                            $bubbleColor = $bubbleColors[$loop->index % count($bubbleColors)];
                                        @endphp
                                        <div
                                            class="link-icon-box w-9 h-9 {{ $bubbleColor }} border border-slate-900 rounded-xl flex items-center justify-center shadow-[1px_1px_0px_0px_#0f172a]">
                                            <i data-lucide="link" class="w-4 h-4 text-slate-900 stroke-[3]"></i>
                                        </div>
                                    @endif

                                    <span
                                        class="w-full text-center font-black text-slate-900 text-[9px] leading-tight px-0.5 truncate">
                                        {{ $link->title }}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Navigasi Prev & Next (Tanpa Reload Halaman) -->
        @if ($totalSlides > 1)
            <div class="w-full flex items-center justify-center gap-4 mt-6">
                <button id="prev-btn" onclick="prevSlide()" 
                    class="font-black text-xs border-2 border-slate-900 rounded-full px-5 py-2 bg-white shadow-[2px_2px_0px_0px_#0f172a] hover:bg-sun active:translate-x-0.5 active:translate-y-0.5 transition-all">
                    Prev
                </button>
                
                <span id="page-indicator" class="font-black text-xs text-slate-800 bg-white/80 border-2 border-slate-900 px-3 py-1.5 rounded-xl shadow-[2px_2px_0px_0px_#0f172a]">
                    1 / {{ $totalSlides }}
                </span>

                <button id="next-btn" onclick="nextSlide()" 
                    class="font-black text-xs border-2 border-slate-900 rounded-full px-5 py-2 bg-white shadow-[2px_2px_0px_0px_#0f172a] hover:bg-sun active:translate-x-0.5 active:translate-y-0.5 transition-all">
                    Next
                </button>
            </div>
        @endif

    </main>

    <!-- Dekorasi Kucing Pisang -->
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana"
        onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">

    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tl" onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-bl" onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tr" onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-br" onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-ml" onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-mr" onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-ml2" onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-mr2" onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tc" onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tc2" onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">

    <script>
        lucide.createIcons();

        // Script Slider Interaktif (Prev / Next tanpa Reload)
        let currentSlide = 0;
        const totalSlides = {{ $totalSlides }};

        function updateSlider() {
            const wrapper = document.getElementById('slides-wrapper');
            wrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            const indicator = document.getElementById('page-indicator');
            if(indicator) {
                indicator.innerText = `${currentSlide + 1} / ${totalSlides}`;
            }

            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            if(prevBtn && nextBtn) {
                prevBtn.style.opacity = currentSlide === 0 ? '0.4' : '1';
                nextBtn.style.opacity = currentSlide === totalSlides - 1 ? '0.4' : '1';
            }
        }

        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
                updateSlider();
            }
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        }

        // Jalankan inisialisasi tombol awal
        updateSlider();

        // Interactive Mouse Movement Effect (Parallax Blobs & Cursor Spotlight)
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX - window.innerWidth / 2) / 25;
            const y = (e.clientY - window.innerHeight / 2) / 25;
            
            document.documentElement.style.setProperty('--mx', `${x}px`);
            document.documentElement.style.setProperty('--my', `${y}px`);
            document.documentElement.style.setProperty('--mouse-x', `${e.clientX}px`);
            document.documentElement.style.setProperty('--mouse-y', `${e.clientY}px`);
        });
    </script>
</body>

</html>