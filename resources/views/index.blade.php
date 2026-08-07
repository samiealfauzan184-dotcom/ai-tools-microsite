<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bio-Link | Web, Mobile & IoT Developer</title>

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
        }

        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, .font-display { font-family: 'Baloo 2', 'Plus Jakarta Sans', sans-serif; }

        body {
            background:
                radial-gradient(circle at 15% 10%, rgba(168,224,99,0.4), transparent 40%),
                radial-gradient(circle at 85% 15%, rgba(255,203,61,0.4), transparent 42%),
                radial-gradient(circle at 50% 90%, rgba(244,198,216,0.45), transparent 45%),
                linear-gradient(135deg, #fff6e5 0%, #ffe9c7 100%);
            background-attachment: fixed;
            background-size: 200% 200%, 200% 200%, 200% 200%, 100% 100%;
            animation: gradientDrift 18s ease-in-out infinite;
            overflow-x: hidden;
        }

        @keyframes gradientDrift {
            0%, 100% { background-position: 0% 0%, 100% 0%, 50% 100%, 0 0; }
            50% { background-position: 30% 30%, 70% 40%, 60% 70%, 0 0; }
        }

        /* ---------- Blob dekorasi ambient ---------- */
        .blob {
            position: fixed;
            border-radius: 45% 55% 60% 40% / 50% 45% 55% 50%;
            filter: blur(2px);
            opacity: 0.5;
            z-index: 0;
            animation: blobMorph 9s ease-in-out infinite, blobFloat 12s ease-in-out infinite;
            pointer-events: none;
        }
        @keyframes blobMorph {
            0%, 100% { border-radius: 45% 55% 60% 40% / 50% 45% 55% 50%; }
            50% { border-radius: 60% 40% 45% 55% / 45% 55% 40% 60%; }
        }
        @keyframes blobFloat {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(12px, -18px) rotate(8deg); }
        }

        /* ---------- Avatar ring & sticker ---------- */
        .avatar-ring {
            background: conic-gradient(from 0deg, var(--coral), var(--sun), var(--mint), var(--sky), var(--grape), var(--coral));
            animation: spinRing 6s linear infinite;
        }
        @keyframes spinRing {
            to { transform: rotate(360deg); }
        }
        .avatar-pop {
            animation: popIn 0.6s cubic-bezier(.34,1.56,.64,1) both;
        }
        .sticker-wave {
            animation: waveHi 2.2s ease-in-out infinite;
            transform-origin: 70% 70%;
        }
        @keyframes waveHi {
            0%, 100% { transform: rotate(0deg); }
            15% { transform: rotate(-12deg); }
            30% { transform: rotate(10deg); }
            45% { transform: rotate(-8deg); }
            60% { transform: rotate(4deg); }
        }

        @keyframes popIn {
            0% { opacity: 0; transform: scale(0.6) translateY(10px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
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
        .link-card:hover .link-chevron { transform: translateX(4px); }
        .link-chevron { transition: transform 0.2s ease; }

        /* ---------- Tagline gradient text ---------- */
        .tagline-gradient {
            background: linear-gradient(90deg, var(--coral), var(--sky));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* ---------- Contact CTA glow ---------- */
        .cta-glow {
            animation: ctaPulse 2.6s ease-in-out infinite;
        }
        @keyframes ctaPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255, 107, 107, 0.35); }
            50% { box-shadow: 0 0 0 8px rgba(255, 107, 107, 0); }
        }

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
        .cat-sticker.no-round img { border-radius: 14px; }

        .cat-alien {
            top: -14px;
            left: -18px;
            width: 68px; height: 68px;
            animation: floatSlow 5s ease-in-out infinite;
        }
        .cat-surprised {
            width: 52px; height: 52px;
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
            left: 62px;
            background: white;
            border: 2px solid var(--ink);
            border-radius: 14px;
            padding: 4px 10px;
            font-size: 11px;
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
            padding: 14px 16px;
        }
        .about-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12.5px;
            font-weight: 800;
            padding: 5px 0;
        }
        .about-row + .about-row { border-top: 2px dashed #e2e8f0; }
        .about-badge {
            width: 26px; height: 26px;
            border-radius: 8px;
            border: 2px solid var(--ink);
            display: flex; align-items: center; justify-content: center;
            font-size: 13px;
            flex-shrink: 0;
        }

        /* ---------- Modal bounce ---------- */
        #modal-content.modal-open { transform: translateY(0); }
        .confetti-dot { position: absolute; border-radius: 999px; opacity: 0.8; }

        /* ---------- Pagination cheerful override (best-effort, class-agnostic) ---------- */
        .pagination, nav[role="navigation"] { display: flex; justify-content: center; gap: 6px; margin-top: 1.5rem; flex-wrap: wrap; }
        .pagination a, .pagination span, nav[role="navigation"] a, nav[role="navigation"] span {
            font-weight: 800 !important;
            border: 2px solid var(--ink) !important;
            border-radius: 9999px !important;
            padding: 6px 14px !important;
            background: white !important;
            box-shadow: 2px 2px 0px 0px var(--ink);
            transition: transform 0.15s ease;
        }
        .pagination a:hover, nav[role="navigation"] a:hover { transform: translate(-1px, -1px); background: var(--sun) !important; }

        /* ---------- TAMBAHAN: kucing pisang di sisi-sisi lain layar ---------- */
        .cat-banana-deco {
            position: fixed;
            z-index: 4;
            filter: drop-shadow(3px 4px 0px rgba(15,23,42,0.25));
            cursor: pointer;
        }
        .cat-banana-deco:hover {
            transform: scale(1.15) rotate(-4deg);
        }
        .cat-banana-tl {
            top: 90px;
            left: 10px;
            width: 56px;
            animation: floatBob 4s ease-in-out infinite 0.3s;
        }
        .cat-banana-bl {
            bottom: 24px;
            left: 14px;
            width: 62px;
            animation: floatSlow 4.6s ease-in-out infinite 0.8s;
        }
        .cat-banana-tr {
            top: 100px;
            right: 12px;
            width: 50px;
            animation: floatSlow 3.8s ease-in-out infinite 1.1s;
        }
        .cat-banana-ml {
            top: 46%;
            left: 6px;
            width: 46px;
            animation: floatBob 4.2s ease-in-out infinite 1.6s;
        }
        .cat-banana-mr {
            top: 58%;
            right: 8px;
            width: 48px;
            animation: floatSlow 4.4s ease-in-out infinite 0.4s;
        }

        @media (max-width: 400px) {
            .cat-banana-tl, .cat-banana-bl, .cat-banana-tr, .cat-banana-ml, .cat-banana-mr {
                transform: scale(0.8);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.001ms !important; animation-iteration-count: 1 !important; }
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased text-slate-900 pb-20">

    <!-- Blob dekorasi ambient -->
    <div class="blob w-52 h-52 bg-coral" style="background:var(--coral); top:-40px; left:-40px; animation-delay:0s;"></div>
    <div class="blob w-64 h-64" style="background:var(--sky); top:20%; right:-60px; animation-delay:1.5s;"></div>
    <div class="blob w-40 h-40" style="background:var(--sun); bottom:5%; left:-30px; animation-delay:3s;"></div>
    <div class="blob w-48 h-48" style="background:var(--mint); bottom:-40px; right:10%; animation-delay:2s;"></div>

    <main class="max-w-md mx-auto pt-12 px-4 flex flex-col items-center relative z-10">

        <!-- BAGIAN PROFIL -->
        <div class="relative mb-6 avatar-pop">
            <div class="absolute -inset-1.5 rounded-full avatar-ring"></div>
            <div
                class="relative w-24 h-24 rounded-full border-4 border-slate-900 overflow-hidden shadow-[4px_4px_0px_0px_#0f172a] bg-blue-100">
                <img src="https://ui-avatars.com/api/?name=Dev+Tech&background=1e3a8a&color=fff&size=200" alt="Profile"
                    class="w-full h-full object-cover">
            </div>
            <span class="sticker-wave absolute -right-2 -bottom-1 text-2xl select-none">👋</span>

            {{-- Sticker kucing alien: nempel di pojok kiri atas avatar --}}
            <div class="cat-sticker cat-alien" onclick="this.classList.add('bounce-tap'); setTimeout(() => this.classList.remove('bounce-tap'), 500)">
                <img src="{{ asset('images/cat-alien.jpg') }}" alt="Maskot kucing alien" class="w-full h-full">
                <span class="speech-bubble">halo bumi 👽</span>
            </div>
        </div>

        <h1 class="text-xl font-display font-black mb-2 text-center tracking-tight">@dev.tech</h1>

        <div class="about-card w-full mb-6 fade-up" style="animation-delay:0.02s">
            <p class="text-center text-[13px] font-black mb-2">
                Jasa Pembuatan Product Digital & Hardware ✨
            </p>
            <div class="about-row">
                <span class="about-badge" style="background:var(--lime);">🌐</span>
                <span><span class="tagline-gradient">Web</span> — bikin website pakai Laravel</span>
            </div>
            <div class="about-row">
                <span class="about-badge" style="background:var(--sky); opacity:0.85;">📱</span>
                <span><span class="text-emerald-600">Mobile</span> — bikin aplikasi pakai Flutter</span>
            </div>
            <div class="about-row">
                <span class="about-badge" style="background:var(--grape); opacity:0.85;">🔌</span>
                <span><span class="text-indigo-600">IoT</span> — bikin alat pakai ESP32</span>
            </div>
        </div>

        <div class="flex items-center gap-4 mb-8">
            <a href="#"
                class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-slate-900 hover:text-white transition-colors"><i
                    data-lucide="github" class="w-5 h-5"></i></a>
            <a href="#"
                class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-sky-500 hover:text-white transition-colors"><i
                    data-lucide="linkedin" class="w-5 h-5"></i></a>
            <a href="#"
                class="social-icon p-2 bg-white rounded-full border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:-translate-y-1 hover:bg-rose-400 hover:text-white transition-colors"><i
                    data-lucide="mail" class="w-5 h-5"></i></a>
        </div>

        <div class="w-full space-y-4">

            <button onclick="openModal()" class="w-full relative group fade-up" style="animation-delay:0.05s">
                <div class="absolute inset-0 bg-slate-900 rounded-3xl translate-y-1.5 translate-x-1.5"></div>
                <div
                    class="cta-glow relative w-full bg-gradient-to-br from-amber-50 to-blue-50 border-2 border-slate-900 rounded-3xl p-4 flex flex-col items-center justify-center transition-transform group-active:translate-y-1.5 group-active:translate-x-1.5">
                    <span class="font-display font-black text-slate-900 text-lg">Contact details</span>
                    <span class="text-xs font-bold text-slate-600 flex items-center gap-1 mt-1">
                        <i data-lucide="user" class="w-3 h-3"></i> Hubungi Developer
                    </span>
                </div>

                {{-- Sticker kucing kaget: nempel di pojok kanan atas tombol contact --}}
                <div class="cat-sticker cat-surprised" style="right:-10px; top:-16px;"
                    onclick="event.stopPropagation(); this.classList.add('bounce-tap'); setTimeout(() => this.classList.remove('bounce-tap'), 500)">
                    <img src="{{ asset('images/cat-surprised.jpg') }}" alt="Maskot kucing kaget" class="w-full h-full">
                    <span class="speech-bubble" style="left:auto; right:56px;">klik gue!</span>
                </div>
            </button>

            @foreach ($links as $link)
                <a href="{{ route('public.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer"
                    class="w-full block relative group fade-up" style="animation-delay: {{ 0.08 * ($loop->index + 1) }}s">

                    <div class="absolute inset-0 bg-slate-900 rounded-3xl translate-y-1.5 translate-x-1.5"></div>
                    <div
                        class="link-card relative w-full bg-white border-2 border-slate-900 rounded-3xl p-4 flex items-center transition-transform group-active:translate-y-1.5 group-active:translate-x-1.5 hover:-translate-y-0.5 hover:shadow-[6px_6px_0px_0px_#0f172a]">

                        @if ($link->image)
                            <img src="{{ asset('storage/' . $link->image) }}"
                                class="link-icon-box w-10 h-10 object-cover rounded-xl border-2 border-slate-900 absolute left-4 bg-slate-100">
                        @else
                            @php
                                $bubbleColors = ['bg-rose-200', 'bg-amber-200', 'bg-sky-200', 'bg-emerald-200', 'bg-violet-200'];
                                $bubbleColor = $bubbleColors[$loop->index % count($bubbleColors)];
                            @endphp
                            <div
                                class="link-icon-box w-10 h-10 {{ $bubbleColor }} border-2 border-slate-900 rounded-xl flex items-center justify-center absolute left-4 shadow-[2px_2px_0px_0px_#0f172a]">
                                <i data-lucide="link" class="w-5 h-5 text-slate-900 stroke-[3]"></i>
                            </div>
                        @endif

                        <span
                            class="w-full text-center font-black text-slate-900 text-base px-12 truncate">{{ $link->title }}</span>
                        <i data-lucide="chevron-right" class="link-chevron w-5 h-5 text-slate-400 absolute right-4"></i>
                    </div>
                </a>
            @endforeach
        </div>
        {{ $links->links('vendor.pagination.custom-public') }}

    </main>

    {{-- Maskot kucing pisang: mengambang di pojok layar --}}
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana"
        onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">

    {{-- TAMBAHAN: kucing pisang mengisi sisi-sisi lain layar --}}
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tl"
        onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-bl"
        onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-tr"
        onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-ml"
        onclick="this.style.transform='scale(1.25) rotate(8deg)'; setTimeout(() => this.style.transform='', 400)">
    <img src="{{ asset('images/cat-banana.png') }}" alt="Maskot kucing pisang" class="cat-banana-deco cat-banana-mr"
        onclick="this.style.transform='scale(1.25) rotate(-8deg)'; setTimeout(() => this.style.transform='', 400)">

    {{-- Modal --}}
    <div id="contact-modal" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">

        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal()"></div>

        <div id="modal-content"
            class="absolute bottom-0 left-0 right-0 bg-white border-t-4 border-slate-900 rounded-t-[2rem] p-6 max-w-md mx-auto h-auto max-h-[85vh] overflow-y-auto pb-10 flex flex-col shadow-[0px_-8px_0px_0px_rgba(0,0,0,0.1)] translate-y-full transition-transform duration-300 ease-[cubic-bezier(.34,1.56,.64,1)]">

            <div class="w-12 h-1.5 bg-slate-300 rounded-full mx-auto mb-6 shrink-0"></div>

            <div class="text-center mb-6 relative">
                <span class="absolute -top-2 left-6 text-lg">🎉</span>
                <span class="absolute -top-1 right-8 text-lg">✨</span>
                <h2 class="text-sm font-extrabold text-blue-600 uppercase tracking-widest">Contact Details</h2>
                <h3 class="text-2xl font-display font-black text-slate-900 mt-2">Dev Tech Solutions</h3>
                <p class="text-xs font-bold text-slate-500 mt-1">Web, Mobile, & IoT Developer</p>
            </div>

            <div
                class="bg-blue-50 border-2 border-slate-900 rounded-2xl p-5 mb-6 space-y-4 shadow-[4px_4px_0px_0px_#0f172a]">
                <div class="flex items-center gap-3 border-b-2 border-dashed border-blue-200 pb-4">
                    <div class="p-2 bg-blue-200 border-2 border-slate-900 rounded-lg"><i data-lucide="mail"
                            class="w-4 h-4 text-slate-900"></i></div>
                    <p class="font-extrabold text-sm truncate">dev.tech@gmail.com</p>
                </div>
                <div class="flex items-center gap-3 border-b-2 border-dashed border-blue-200 pb-4">
                    <div class="p-2 bg-emerald-200 border-2 border-slate-900 rounded-lg"><i data-lucide="phone"
                            class="w-4 h-4 text-slate-900"></i></div>
                    <p class="font-extrabold text-sm truncate">+62 812-3456-7890</p>
                </div>
                <div class="flex items-start gap-3">
                    <div class="p-2 bg-amber-200 border-2 border-slate-900 rounded-lg mt-1"><i data-lucide="clock"
                            class="w-4 h-4 text-slate-900"></i></div>
                    <div>
                        <p class="font-extrabold text-sm">Senin - Jumat: 09:00 - 17:00</p>
                        <p class="font-extrabold text-xs text-slate-500 mt-0.5">Weekend: By Appointment</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-amber-100 border-2 border-slate-900 p-4 rounded-xl flex gap-3 mb-6 shadow-[2px_2px_0px_0px_#0f172a]">
                <i data-lucide="info" class="w-5 h-5 shrink-0 mt-0.5 text-slate-900"></i>
                <p class="text-[11px] font-bold text-slate-700 leading-relaxed">
                    Browser Anda mungkin tidak mendukung download VCF otomatis. Silakan salin nomor secara manual.
                </p>
            </div>

            <div class="mt-auto flex gap-3">
                <button
                    class="flex-1 bg-slate-900 text-white font-black py-4 rounded-xl hover:bg-slate-800 active:scale-95 transition-all border-2 border-slate-900">
                    Save contact
                </button>
                <button onclick="closeModal()"
                    class="w-14 h-14 shrink-0 bg-rose-200 border-2 border-slate-900 rounded-xl flex items-center justify-center shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                    <i data-lucide="x" class="w-6 h-6 stroke-[3] text-slate-900"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        const modal = document.getElementById('contact-modal');
        const modalContent = document.getElementById('modal-content');

        function openModal() {
            modal.classList.remove('hidden');
            requestAnimationFrame(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('translate-y-full');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.add('translate-y-full');

            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    </script>
</body>

</html>