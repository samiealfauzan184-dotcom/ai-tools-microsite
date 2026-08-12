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
            --gold: #b08d57;
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

        #cursor-glow {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none;
            z-index: 1;
            background: radial-gradient(550px circle at var(--mouse-x) var(--mouse-y), rgba(255, 255, 255, 0.45), transparent 75%);
            mix-blend-mode: overlay;
            transition: background 0.05s ease-out;
        }

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

        .fade-up {
            opacity: 0;
            animation: fadeUp 0.55s ease forwards;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .social-icon:hover {
            animation: wiggle 0.5s ease;
        }
        @keyframes wiggle {
            0%, 100% { transform: translateY(-4px) rotate(0deg); }
            25% { transform: translateY(-4px) rotate(-10deg); }
            75% { transform: translateY(-4px) rotate(10deg); }
        }

        /* ---------- Kartu tautan: hover jadi hitam elegan (bukan ungu) ---------- */
        .link-card {
            transition: transform 0.22s cubic-bezier(.34,1.56,.64,1), box-shadow 0.22s ease, border-color 0.22s ease;
            cursor: pointer;
        }
        .link-card:active { transform: translate(1.5px, 1.5px) !important; }
        .link-card:hover {
            border-color: var(--ink);
            box-shadow: 0 10px 22px rgba(22,33,62,0.18);
        }
        .link-icon-box {
            transition: transform 0.3s cubic-bezier(.34,1.56,.64,1);
            box-shadow: 0 4px 10px rgba(22,33,62,0.12);
        }
        .link-card:hover .link-icon-box { transform: rotate(-4deg) scale(1.06); }
        .link-card .read-more-hint {
            opacity: 0.55;
            color: var(--ink);
            letter-spacing: 0.02em;
            transition: opacity 0.2s ease, transform 0.2s ease;
        }
        .link-card:hover .read-more-hint {
            opacity: 1;
            transform: translateX(2px);
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
            background: linear-gradient(180deg, #ffffff 0%, #fffaf2 100%);
            border: 2px solid var(--ink);
            border-radius: 24px;
            box-shadow: 4px 4px 0px 0px var(--ink);
            padding: 22px 24px;
            position: relative;
        }
        .about-divider {
            width: 36px;
            height: 3px;
            border-radius: 999px;
            background: var(--ink);
            margin: 10px auto;
        }

        /* ---------- Judul kategori ---------- */
        .category-heading {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        /* ---------- Baris Kartu: Menggunakan CSS Grid untuk melebar (Wrap) ---------- */
        .category-scroll {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 16px;
            width: 100%;
            padding-bottom: 8px;
        }
        
        .category-scroll-item {
            width: 100%;
        }

        /* ---------- Modal Detail Tools ---------- */
        #tool-modal-backdrop {
            position: fixed;
            inset: 0;
            z-index: 60;
            background: rgba(22, 33, 62, 0.55);
            backdrop-filter: blur(3px);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease;
        }
        #tool-modal-backdrop.open {
            opacity: 1;
            pointer-events: auto;
        }
        #tool-modal-card {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -46%) scale(0.94);
            opacity: 0;
            width: min(92vw, 380px);
            z-index: 61;
            pointer-events: none;
            transition: opacity 0.25s ease, transform 0.25s cubic-bezier(.34,1.56,.64,1);
        }
        #tool-modal-card.open {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
            pointer-events: auto;
        }
        .tool-modal-visit-btn {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .tool-modal-visit-btn:hover {
            transform: translateY(-2px);
        }
        .tool-modal-visit-btn:active {
            transform: translate(1.5px, 1.5px);
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

    <div id="cursor-glow"></div>

    <div class="floating-bg">
        <span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span>
        <span>🐾</span><span>🐾</span><span>🐾</span><span>🐾</span>
    </div>

    <div class="bubble" style="left:8%;width:32px;height:32px;animation-duration:11s;animation-delay:0s;"></div>
    <div class="bubble" style="left:22%;width:20px;height:20px;animation-duration:8.5s;animation-delay:2s;"></div>
    <div class="bubble" style="left:45%;width:42px;height:42px;animation-duration:15s;animation-delay:1s;"></div>
    <div class="bubble" style="left:70%;width:28px;height:28px;animation-duration:10.5s;animation-delay:3s;"></div>
    <div class="bubble" style="left:88%;width:22px;height:22px;animation-duration:13s;animation-delay:0.5s;"></div>

    <div class="blob w-60 h-60" style="background:var(--coral); top:-40px; left:-40px; animation-delay:0s;"></div>
    <div class="blob w-72 h-72" style="background:var(--sky); top:18%; right:-60px; animation-delay:1.5s;"></div>
    <div class="blob w-52 h-52" style="background:var(--sun); bottom:8%; left:-30px; animation-delay:3s;"></div>
    <div class="blob w-60 h-60" style="background:var(--mint); bottom:-40px; right:10%; animation-delay:2s;"></div>

    <main class="w-full max-w-7xl mx-auto pt-10 px-4 sm:px-6 lg:px-8 flex flex-col items-center relative z-10">

        <div class="text-center mb-6 fade-up">
            <span class="inline-block bg-white/80 border-2 border-slate-900 text-slate-900 text-xs font-black px-4 py-1.5 rounded-full shadow-[2px_2px_0px_0px_#0f172a] mb-2">
                AI Directory & Platform
            </span>
            <h1 class="text-3xl font-display font-black tracking-tight text-slate-900">AI Tools Hub</h1>
        </div>

        <!-- KARTU DESKRIPSI -->
        <div class="about-card w-full max-w-3xl mb-6 fade-up" style="animation-delay:0.02s">
            <div class="cat-sticker cat-surprised" style="left: -14px; top: -14px;"
                onclick="event.stopPropagation(); this.classList.add('bounce-tap'); setTimeout(() => this.classList.remove('bounce-tap'), 500)">
                <img src="{{ asset('images/cat-surprised.jpg') }}" alt="Maskot kucing kaget" class="w-full h-full">
                <span class="speech-bubble">halo 🐾</span>
            </div>

            <div class="text-center">
                <h2 class="font-display font-black text-lg text-slate-900 mb-1">Satu Tempat, Semua AI Terbaik</h2>
                <div class="about-divider"></div>
                <p class="text-[13px] font-semibold text-slate-600 leading-relaxed max-w-xl mx-auto">
                    AI Tools Hub mengelompokkan puluhan tools AI pilihan ke dalam kategori yang jelas — mulai dari asisten percakapan, coding, gambar, video, audio, hingga produktivitas dan otomasi. Klik kartu tools mana pun untuk membaca penjelasan singkatnya dulu sebelum memutuskan untuk mengunjunginya.
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center gap-4 mb-6 fade-up w-full max-w-3xl" style="animation-delay: 0.04s">
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

        <div class="w-full max-w-3xl relative mb-12 fade-up" style="animation-delay: 0.05s">
            <input type="text" id="searchInput" placeholder="Cari AI Tool... (ex: chatgpt, video)" class="w-full bg-white border-2 border-slate-900 rounded-full py-3 px-5 pr-12 text-sm font-bold text-slate-900 shadow-[3px_3px_0px_0px_#0f172a] focus:outline-none focus:translate-y-0.5 focus:translate-x-0.5 focus:shadow-[1px_1px_0px_0px_#0f172a] transition-all placeholder:text-slate-400">
            <i data-lucide="search" class="absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
        </div>

        @php
            // PETA CADANGAN (FALLBACK) UNTUK DATA LAMA
            $categoryMap = [
                'ChatGPT' => 'AI Assistant', 'Claude' => 'AI Assistant', 'Google Gemini' => 'AI Assistant',
                'Microsoft Copilot' => 'AI Assistant', 'Grok' => 'AI Assistant', 'DeepSeek' => 'AI Assistant',
                'Poe' => 'AI Assistant', 'Character.AI' => 'AI Assistant', 'Pi AI' => 'AI Assistant',
                'Manus AI' => 'AI Agent',
                'GitHub Copilot' => 'AI Coding', 'Cursor' => 'AI Coding', 'Windsurf' => 'AI Coding',
                'Replit AI' => 'AI Coding', 'Codeium' => 'AI Coding', 'Blackbox AI' => 'AI Coding',
                'Tabnine' => 'AI Coding', 'Continue.dev' => 'AI Coding', 'Phind' => 'AI Coding',
                'v0' => 'AI Website Builder', 'Lovable' => 'AI Website Builder', 'Bolt.new' => 'AI Website Builder',
                'Midjourney' => 'AI Image Generation', 'Leonardo AI' => 'AI Image Generation',
                'Adobe Firefly' => 'AI Image Generation', 'Ideogram' => 'AI Image Generation',
                'Playground AI' => 'AI Image Generation', 'Canva AI' => 'AI Image Generation',
                'Runway' => 'AI Video Generation & Editing', 'Pika' => 'AI Video Generation & Editing',
                'Kling AI' => 'AI Video Generation & Editing', 'Luma AI' => 'AI Video Generation & Editing',
                'HeyGen' => 'AI Video Generation & Editing', 'Synthesia' => 'AI Video Generation & Editing',
                'Descript' => 'AI Video Generation & Editing',
                'ElevenLabs' => 'AI Audio & Music', 'Suno' => 'AI Audio & Music', 'Udio' => 'AI Audio & Music',
                'Grammarly' => 'AI Writing', 'Jasper AI' => 'AI Writing', 'Notion AI' => 'AI Writing',
                'Dola AI' => 'AI Productivity', 'Krisp AI' => 'AI Productivity',
                'Otter.ai' => 'AI Productivity', 'Pieces' => 'AI Productivity',
                'Gamma' => 'AI Presentation', 'Tome AI' => 'AI Presentation', 'Beautiful.ai' => 'AI Presentation',
                'Perplexity AI' => 'AI Search Engine',
                'NotebookLM' => 'AI Research & Learning', 'Hugging Face' => 'AI Research & Learning',
                'n8n' => 'AI Automation', 'Zapier AI' => 'AI Automation', 'Make' => 'AI Automation',
                'Figma AI' => 'AI Design',
            ];

            $descriptionMap = [
                'ChatGPT' => 'Asisten AI percakapan serbaguna dari OpenAI untuk menulis, riset, dan memecahkan masalah sehari-hari. Cocok dipakai untuk brainstorming ide, belajar topik baru, hingga menyusun draf tulisan dengan cepat.',
                'Google Gemini' => 'Model AI multimodal dari Google yang memahami teks, gambar, dan suara sekaligus. Terintegrasi erat dengan produk Google seperti Gmail dan Docs untuk mempercepat pekerjaan harian.',
                'Claude' => 'AI assistant dari Anthropic yang fokus pada analisis dokumen panjang, coding, dan percakapan yang aman serta natural. Sangat andal untuk membaca dan meringkas file besar atau menulis kode kompleks.',
                'Perplexity AI' => 'Mesin pencari berbasis AI yang memberi jawaban langsung lengkap dengan sumber referensi real-time. Membantu riset jadi lebih cepat karena tidak perlu membuka banyak tab sekaligus.',
                'Microsoft Copilot' => 'Asisten AI yang terintegrasi di Windows dan aplikasi Microsoft 365 seperti Word, Excel, dan Outlook. Memudahkan pengguna menyelesaikan tugas kantor tanpa berpindah aplikasi.',
                'Grok' => 'Chatbot AI dari xAI yang terintegrasi langsung dengan platform X untuk percakapan dan informasi real-time. Punya gaya jawaban yang lebih santai dan mengikuti tren terkini.',
                'DeepSeek' => 'Model bahasa AI open-source asal Tiongkok dengan performa penalaran yang kompetitif untuk chat dan pengembangan aplikasi. Populer karena efisien dan bisa dijalankan dengan biaya lebih hemat.',
                'Dola AI' => 'Asisten AI penjadwalan kalender yang bekerja lewat aplikasi pesan seperti WhatsApp dan Telegram. Cukup kirim pesan biasa untuk membuat, mengubah, atau mengingatkan jadwal secara otomatis.',
                'NotebookLM' => 'Asisten riset AI dari Google yang bekerja khusus berdasarkan dokumen milik pengguna sendiri. Cocok untuk merangkum bahan kuliah, laporan, atau riset tanpa AI mengarang informasi di luar dokumen.',
                'Manus AI' => 'Agen AI otonom yang merencanakan dan mengeksekusi tugas kompleks secara end-to-end, mulai dari riset hingga membangun aplikasi. Bisa terus bekerja di cloud walau penggunanya sudah offline.',
                'Poe' => 'Platform yang menghubungkan berbagai model chatbot AI populer dalam satu aplikasi terpadu. Memudahkan pengguna membandingkan jawaban dari beberapa AI sekaligus tanpa perlu berlangganan satu-satu.',
                'Character.AI' => 'Platform chatbot berbasis karakter AI untuk percakapan personal, roleplay, dan hiburan interaktif. Pengguna bisa membuat atau mengobrol dengan karakter AI sesuai kepribadian yang diinginkan.',
                'Pi AI' => 'Asisten AI personal dari Inflection AI yang dirancang empatik untuk percakapan sehari-hari yang santai. Fokus pada mendengarkan dan merespons dengan nada yang hangat dan suportif.',
                'GitHub Copilot' => 'AI pair programmer yang membantu menulis dan menyelesaikan kode langsung di dalam editor. Menyarankan potongan kode secara real-time berdasarkan konteks project yang sedang dikerjakan.',
                'Cursor' => 'Editor kode berbasis AI yang mempercepat pengembangan aplikasi lewat fitur chat dan edit multi-file. Populer di kalangan developer karena integrasi AI-nya terasa menyatu dengan alur kerja coding.',
                'Windsurf' => 'IDE AI agentik yang memahami seluruh codebase project untuk menyarankan perubahan multi-file secara otomatis. Kini berada di bawah Cognition AI setelah sebelumnya dikenal dengan nama Codeium.',
                'v0' => 'Alat AI dari Vercel yang menghasilkan antarmuka web siap pakai hanya dari deskripsi teks. Cocok untuk membuat prototipe UI React dengan cepat tanpa menulis kode dari nol.',
                'Lovable' => 'AI pembuat aplikasi web full-stack secara otomatis dari deskripsi bahasa natural. Menghasilkan frontend, backend, dan database sekaligus tanpa perlu pengalaman coding mendalam.',
                'Bolt.new' => 'Platform AI dari StackBlitz untuk membangun dan menjalankan aplikasi web full-stack langsung di browser. Cocok untuk membuat prototipe cepat karena semua proses berjalan instan tanpa setup lokal.',
                'Replit AI' => 'Asisten AI yang terintegrasi langsung di Replit untuk menulis, menjelaskan, dan menjalankan kode. Memudahkan proses belajar coding karena bisa langsung eksekusi kode dari browser.',
                'Codeium' => 'Alat pelengkap kode berbasis AI yang kini menjadi bagian dari Windsurf. Awalnya populer sebagai alternatif gratis untuk autocomplete kode di berbagai editor.',
                'Blackbox AI' => 'Asisten coding AI yang mengorkestrasi ratusan model dalam satu platform IDE terpadu. Memiliki fitur pencarian kode lintas jutaan repository untuk membantu developer menemukan referensi dengan cepat.',
                'Tabnine' => 'Pelengkap kode berbasis AI yang bisa dijalankan secara privat tanpa mengirim kode ke cloud. Pilihan populer untuk tim yang mengutamakan keamanan dan privasi source code.',
                'Continue.dev' => 'Asisten coding AI open-source yang bisa dijalankan secara lokal untuk privasi maksimal. Fleksibel karena bisa dihubungkan ke berbagai penyedia model AI sesuai kebutuhan.',
                'Phind' => 'Mesin pencari sekaligus asisten coding berbasis AI yang dulu populer di kalangan developer. Perlu dicatat bahwa layanan ini sudah tidak beroperasi lagi secara resmi.',
                'n8n' => 'Alat otomasi alur kerja open-source berbasis node dengan dukungan integrasi AI. Memudahkan pengguna menghubungkan berbagai aplikasi tanpa menulis kode backend sendiri.',
                'Midjourney' => 'AI generatif gambar yang dikenal luas karena hasil visualnya yang artistik dan detail. Populer di kalangan desainer dan seniman digital untuk eksplorasi ide visual.',
                'Leonardo AI' => 'Platform AI generatif untuk membuat gambar dan aset visual berkualitas tinggi, kini bagian dari Canva. Sering dipakai untuk kebutuhan aset game, konsep art, dan ilustrasi.',
                'Adobe Firefly' => 'AI generatif dari Adobe yang aman digunakan secara komersial untuk membuat dan mengedit gambar. Terintegrasi langsung dengan Photoshop dan Illustrator untuk alur kerja kreatif yang mulus.',
                'Ideogram' => 'AI penghasil gambar dengan kemampuan menulis teks yang akurat di dalam hasil gambarnya. Unggul untuk kebutuhan desain poster, logo, atau materi promosi yang butuh tipografi rapi.',
                'Playground AI' => 'Platform AI untuk membuat dan mengedit gambar secara kreatif dengan berbagai model pilihan. Menyediakan editor visual yang fleksibel untuk menyempurnakan hasil generate.',
                'Canva AI' => 'Fitur AI di Canva yang membantu membuat desain visual secara instan dari teks atau template. Memudahkan siapa saja membuat konten desain profesional tanpa keahlian desain grafis.',
                'Runway' => 'Platform AI generatif untuk produksi dan pengeditan video tingkat profesional. Dipakai oleh kreator dan studio film untuk efek visual serta pembuatan video dari teks.',
                'Pika' => 'AI generatif video pendek dari teks maupun gambar dengan proses yang cepat. Cocok untuk membuat konten video singkat di media sosial secara instan.',
                'Kling AI' => 'AI generatif video asal Tiongkok yang mampu menghasilkan klip sinematik dengan gerakan realistis. Dikembangkan oleh Kuaishou dan dikenal kuat untuk durasi video yang lebih panjang.',
                'Luma AI' => 'Platform AI untuk menghasilkan video maupun model 3D dari deskripsi teks. Banyak digunakan untuk kebutuhan visual efek dan eksplorasi konten tiga dimensi.',
                'HeyGen' => 'Platform AI untuk membuat video avatar digital lengkap dengan sulih suara otomatis. Memudahkan pembuatan video presentasi atau marketing multibahasa tanpa perlu syuting langsung.',
                'Synthesia' => 'Pembuat video AI dengan avatar digital dan sulih suara dalam banyak bahasa. Populer untuk video pelatihan korporat dan konten edukasi berskala besar.',
                'Descript' => 'Editor video dan audio berbasis AI yang memungkinkan pengeditan lewat teks transkrip. Mempercepat proses editing karena menghapus kata dalam transkrip otomatis memotong videonya juga.',
                'ElevenLabs' => 'AI text-to-speech dan cloning suara dengan hasil yang sangat realistis dan natural. Banyak dipakai untuk membuat narasi, dubbing, dan konten audio profesional.',
                'Suno' => 'AI generatif musik yang bisa membuat lagu lengkap dengan vokal dari deskripsi teks singkat. Memudahkan siapa saja membuat lagu orisinal tanpa perlu keahlian musik.',
                'Udio' => 'Platform AI untuk menciptakan musik orisinal berkualitas studio dari prompt teks pengguna. Cocok untuk musisi maupun kreator konten yang butuh backsound unik dengan cepat.',
                'Krisp AI' => 'AI penghilang noise dan transkripsi suara otomatis saat panggilan video atau audio berlangsung. Membuat kualitas suara rapat tetap jernih meski berada di lingkungan bising.',
                'Notion AI' => 'Fitur AI di dalam Notion untuk menulis, meringkas, dan mengedit teks langsung di workspace. Membantu pengguna menyusun catatan dan dokumen tanpa berpindah aplikasi.',
                'Gamma' => 'AI pembuat presentasi, dokumen, dan halaman web hanya dengan sekali klik dari sebuah topik. Menghasilkan desain yang rapi secara otomatis sehingga menghemat waktu penyusunan slide.',
                'Tome AI' => 'Platform AI untuk membuat presentasi bergaya naratif secara otomatis dan cepat. Cocok untuk menyusun pitch deck atau cerita visual yang mengalir layaknya sebuah narasi.',
                'Beautiful.ai' => 'Pembuat presentasi otomatis dengan desain slide yang selalu rapi berkat penyesuaian tata letak AI. Memudahkan siapa saja membuat presentasi estetis tanpa keahlian desain.',
                'Grammarly' => 'Asisten AI untuk memeriksa tata bahasa, ejaan, dan gaya penulisan secara otomatis. Membantu tulisan jadi lebih jelas dan profesional dalam berbagai konteks, dari email hingga esai.',
                'Jasper AI' => 'AI generatif konten yang dirancang khusus untuk kebutuhan pemasaran dan copywriting profesional. Membantu tim marketing menghasilkan draf konten iklan dan artikel lebih cepat.',
                'Figma AI' => 'Fitur AI di Figma yang mempercepat proses desain antarmuka digital, mulai dari membuat layout hingga mengisi konten placeholder. Membantu desainer fokus pada eksplorasi ide tanpa terhambat pekerjaan repetitif.',
                'Zapier AI' => 'Fitur AI di Zapier untuk mengotomasi alur kerja antar berbagai aplikasi secara cerdas. Memudahkan pengguna menghubungkan ribuan aplikasi tanpa perlu menulis kode integrasi.',
                'Make' => 'Platform otomasi alur kerja visual dengan dukungan integrasi kecerdasan buatan. Memungkinkan pengguna merancang alur otomasi kompleks lewat antarmuka drag-and-drop.',
                'Otter.ai' => 'AI pencatat dan transkripsi rapat secara otomatis dan real-time selama panggilan berlangsung. Menghasilkan ringkasan poin penting sehingga peserta tidak perlu mencatat manual.',
                'Pieces' => 'Asisten AI untuk menyimpan, mengelola, dan mencari kembali potongan kode bagi developer. Membantu tim menyimpan snippet penting agar mudah dipakai ulang di project lain.',
                'Hugging Face' => 'Platform open-source terbesar untuk berbagi model, dataset, dan hasil riset kecerdasan buatan. Menjadi pusat komunitas bagi peneliti dan developer AI di seluruh dunia.',
            ];

            $categoryIcons = [
                'AI Assistant' => '🤖', 'AI Agent' => '🧠', 'AI Coding' => '💻',
                'AI Website Builder' => '🌐', 'AI Image Generation' => '🎨',
                'AI Video Generation & Editing' => '🎬', 'AI Audio & Music' => '🎵',
                'AI Writing' => '📝', 'AI Productivity' => '📊', 'AI Presentation' => '📑',
                'AI Search Engine' => '🔍', 'AI Research & Learning' => '📚',
                'AI Automation' => '⚙️', 'AI Design' => '🎭', 'Lainnya' => '✨',
            ];

            $categoryOrder = array_keys($categoryIcons);

            // LOGIKA GABUNGAN: Prioritaskan data database ($link->category), jika kosong gunakan Peta Cadangan ($categoryMap)
            $groupedLinks = $links
                ->groupBy(function ($link) use ($categoryMap) {
                    if (!empty($link->category)) {
                        return $link->category;
                    }
                    return $categoryMap[$link->title] ?? 'Lainnya';
                })
                ->sortBy(function ($group, $category) use ($categoryOrder) {
                    $index = array_search($category, $categoryOrder);
                    return $index === false ? 999 : $index;
                });
        @endphp

        <div class="w-full space-y-10" id="toolListContainer">
            @foreach ($groupedLinks as $category => $categoryLinks)
                <div class="category-block fade-up w-full text-left" style="animation-delay: {{ 0.05 * $loop->index }}s">
                    <h2 class="category-heading font-display font-black text-sm text-slate-900 mb-4 bg-white/70 rounded-full px-4 py-1.5 border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] w-fit">
                        <span>{{ $categoryIcons[$category] ?? '✨' }}</span>
                        <span>{{ $category }}</span>
                    </h2>
                    
                    <div class="category-scroll">
                        @foreach ($categoryLinks as $link)
                            @php
                                // LOGIKA GABUNGAN: Prioritaskan deskripsi database, jika kosong gunakan Peta Cadangan
                                $defaultDesc = $descriptionMap[$link->title] ?? 'Akses platform AI canggih ini dengan sekali klik.';
                                $desc = !empty($link->description) ? $link->description : $defaultDesc;
                                $iconSrc = $link->image ? asset('storage/' . $link->image) : '';
                            @endphp
                            
                            <button type="button"
                                onclick="openToolModal(this)"
                                data-title="{{ $link->title }}"
                                data-desc="{{ $desc }}"
                                data-icon="{{ $iconSrc }}"
                                data-url="{{ route('public.redirect', $link->id) }}"
                                class="category-scroll-item text-left block relative group fade-up w-full">

                                <div class="absolute inset-0 bg-slate-900 rounded-2xl translate-y-1 translate-x-1"></div>

                                <div class="link-card relative w-full h-full bg-white border-2 border-slate-900 rounded-2xl p-4 flex flex-col items-center justify-start gap-3 transition-transform group-active:translate-y-1 group-active:translate-x-1 hover:-translate-y-0.5 hover:shadow-[3px_3px_0px_0px_#0f172a]">

                                    @if ($link->image)
                                        <img src="{{ $iconSrc }}"
                                            class="link-icon-box w-12 h-12 object-cover rounded-xl border border-slate-900 bg-slate-100 shrink-0">
                                    @else
                                        @php
                                            $bubbleColors = ['bg-slate-100', 'bg-zinc-100', 'bg-neutral-100', 'bg-stone-100', 'bg-gray-100'];
                                            $bubbleColor = $bubbleColors[$loop->index % count($bubbleColors)];
                                        @endphp
                                        <div class="link-icon-box w-12 h-12 {{ $bubbleColor }} border border-slate-900 rounded-xl flex items-center justify-center shadow-[1px_1px_0px_0px_#0f172a] shrink-0">
                                            <i data-lucide="zap" class="w-6 h-6 text-slate-900 stroke-[2.5]"></i>
                                        </div>
                                    @endif

                                    <div class="text-center w-full flex flex-col flex-grow">
                                        <span class="tool-title font-black text-slate-900 text-sm leading-tight mb-1 truncate">
                                            {{ $link->title }}
                                        </span>
                                        <span class="tool-desc text-[11px] text-slate-600 font-medium leading-snug line-clamp-3">
                                            {{ $desc }}
                                        </span>
                                        <span class="read-more-hint text-[10px] font-black mt-2 flex items-center justify-center gap-1">
                                            Baca detail <i data-lucide="chevron-right" class="w-3 h-3"></i>
                                        </span>
                                    </div>
                                    
                                </div>
                            </button>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        
        <div id="noResult" class="hidden text-center mt-10 p-6 bg-white border-2 border-slate-900 rounded-2xl shadow-[3px_3px_0px_0px_#0f172a] fade-up">
            <span class="text-3xl mb-2 block">😿</span>
            <p class="font-black text-slate-900">Oops, AI tidak ditemukan!</p>
            <p class="text-xs text-slate-600 mt-1">Coba kata kunci yang lain ya.</p>
        </div>

    </main>

    <!-- Modal Detail Tools -->
    <div id="tool-modal-backdrop" onclick="closeToolModal()"></div>
    <div id="tool-modal-card">
        <div class="bg-white border-2 border-slate-900 rounded-3xl shadow-[6px_6px_0px_0px_#0f172a] p-6 relative">
            <button type="button" onclick="closeToolModal()" aria-label="Tutup"
                class="absolute -top-3 -right-3 w-9 h-9 bg-rose-200 border-2 border-slate-900 rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                <i data-lucide="x" class="w-5 h-5 stroke-[3] text-slate-900"></i>
            </button>

            <div id="tool-modal-icon-wrap" class="w-16 h-16 rounded-2xl border-2 border-slate-900 flex items-center justify-center mx-auto mb-4 shadow-[2px_2px_0px_0px_#0f172a] overflow-hidden bg-slate-100">
                <img id="tool-modal-icon-img" src="" alt="" class="w-full h-full object-cover hidden">
                <i id="tool-modal-icon-fallback" data-lucide="sparkles" class="w-7 h-7 text-slate-900 stroke-[2.5]"></i>
            </div>

            <h3 id="tool-modal-title" class="font-display font-black text-xl text-center text-slate-900 mb-2"></h3>
            <div class="about-divider"></div>
            <p id="tool-modal-desc" class="text-[13px] font-medium text-slate-600 leading-relaxed text-center mb-6"></p>

            <a id="tool-modal-visit-link" href="#" target="_blank" rel="noopener noreferrer"
                class="tool-modal-visit-btn w-full bg-slate-900 text-white font-black py-3.5 rounded-xl flex items-center justify-center gap-2 shadow-[3px_3px_0px_0px_#0f172a] border-2 border-slate-900">
                Kunjungi Sekarang <i data-lucide="external-link" class="w-4 h-4"></i>
            </a>
        </div>
    </div>

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

        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX - window.innerWidth / 2) / 25;
            const y = (e.clientY - window.innerHeight / 2) / 25;
            
            document.documentElement.style.setProperty('--mx', `${x}px`);
            document.documentElement.style.setProperty('--my', `${y}px`);
            document.documentElement.style.setProperty('--mouse-x', `${e.clientX}px`);
            document.documentElement.style.setProperty('--mouse-y', `${e.clientY}px`);
        });

        const searchInput = document.getElementById('searchInput');
        const categoryBlocks = document.querySelectorAll('.category-block');
        const noResult = document.getElementById('noResult');

        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            let hasGlobalMatch = false;

            categoryBlocks.forEach(block => {
                const items = block.querySelectorAll('.category-scroll-item');
                let hasVisibleItems = false;

                items.forEach(item => {
                    const title = item.querySelector('.tool-title').innerText.toLowerCase();
                    const desc = item.querySelector('.tool-desc').innerText.toLowerCase();
                    
                    if (title.includes(query) || desc.includes(query)) {
                        item.style.display = 'block';
                        hasVisibleItems = true;
                        hasGlobalMatch = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (hasVisibleItems) {
                    block.style.display = 'block';
                } else {
                    block.style.display = 'none';
                }
            });

            if (hasGlobalMatch || query === '') {
                noResult.classList.add('hidden');
            } else {
                noResult.classList.remove('hidden');
            }
        });

        const toolModalBackdrop = document.getElementById('tool-modal-backdrop');
        const toolModalCard = document.getElementById('tool-modal-card');
        const toolModalTitle = document.getElementById('tool-modal-title');
        const toolModalDesc = document.getElementById('tool-modal-desc');
        const toolModalVisitLink = document.getElementById('tool-modal-visit-link');
        const toolModalIconImg = document.getElementById('tool-modal-icon-img');
        const toolModalIconFallback = document.getElementById('tool-modal-icon-fallback');

        function openToolModal(btn) {
            const title = btn.getAttribute('data-title');
            const desc = btn.getAttribute('data-desc');
            const icon = btn.getAttribute('data-icon');
            const url = btn.getAttribute('data-url');

            toolModalTitle.innerText = title;
            toolModalDesc.innerText = desc;
            toolModalVisitLink.setAttribute('href', url);

            if (icon) {
                toolModalIconImg.src = icon;
                toolModalIconImg.classList.remove('hidden');
                toolModalIconFallback.classList.add('hidden');
            } else {
                toolModalIconImg.classList.add('hidden');
                toolModalIconFallback.classList.remove('hidden');
            }

            toolModalBackdrop.classList.add('open');
            toolModalCard.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeToolModal() {
            toolModalBackdrop.classList.remove('open');
            toolModalCard.classList.remove('open');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>

</html>