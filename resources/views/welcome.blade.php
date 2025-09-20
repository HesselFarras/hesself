<head>
    <meta charset="UTF-8">
    <title>Hessel Farras</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { background-color: #121212; }
        html { scroll-behavior: smooth; }
        .header-gradient {
            background: linear-gradient(to bottom, #b91c1c 0%, #121212 100%);
        }
    </style>
</head>
<body class="text-gray-100">

<!-- Tombol hamburger (mobile) -->
<button id="menuBtn"
    class="md:hidden fixed top-4 left-4 z-50 p-2 rounded bg-emerald-500 text-white focus:outline-none">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
</button>

<!-- Overlay gelap -->
<div id="overlay"
    class="fixed inset-0 bg-black/50 backdrop-blur-sm z-30 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<div class="flex h-screen overflow-hidden">

    <!-- ==== Sidebar ==== -->
    <aside id="sidebar"
    class="fixed top-0 left-0 w-64 md:w-64 h-screen bg-[#121212] flex flex-col border-r border-gray-800 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-40 pt-16 md:pt-0">
        <!-- ↑ pt-16 memberi ruang agar teks tidak tertutup hamburger di mobile -->
        <a href="#photo" class="px-5 pb-5 text-2xl mt-8 font-bold text-emerald-500">Hello there👋</a>

        <nav class="flex-1 overflow-y-auto px-4 space-y-2">
            <a href="#about" class="block px-3 py-2 rounded hover:bg-gray-800">About</a>
            <a href="#projects" class="block px-3 py-2 rounded hover:bg-gray-800">Projects</a>
            <a href="#experience" class="block px-3 py-2 rounded hover:bg-gray-800">Experience</a>
            <a href="#skills" class="block px-3 py-2 rounded hover:bg-gray-800">Skills</a>
            <a href="#contact" class="block px-3 py-2 rounded hover:bg-gray-800">Contact</a>
        </nav>

        <footer class="p-4 text-xs text-gray-400 border-t border-gray-700">
            &copy; {{ date('Y') }} Hessel Farras Abiyyu
        </footer>
    </aside>

    <!-- ==== Konten Utama ==== -->
    <main class="flex-1 md:ml-64 overflow-y-auto transition-all duration-300">
        <!-- Header ala playlist -->
        <header id="photo" class="header-gradient p-6 md:p-10 flex flex-col md:flex-row items-center md:items-end gap-6">
            <img src="images/aku.jpg"
                alt="Profile Photo"
                class="w-40 h-40 md:w-56 md:h-56 object-cover rounded shadow-lg">
            <div>
                <p class="uppercase text-sm text-gray-300 mb-2">Public Profile</p>
                <h1 class="text-4xl md:text-6xl font-extrabold">Hessel Farras Abiyyu</h1>
                <p class="mt-2 text-gray-300">Junior Web Developer</p>
            </div>
        </header>

        <!-- ===== About ===== -->
        <section id="about" class="px-6 md:px-10 py-8 max-w-[80%]">
            <h2 class="text-xl font-bold mb-4 text-emerald-400">About Me</h2>
            <p class="text-gray-300 leading-relaxed">
                Saya seorang Junior Web Developer yang memiliki semangat tinggi untuk terus belajar dan berkembang di dunia pengembangan web.
                Dengan dasar yang kuat pada HTML, CSS, dan JavaScript, saya aktif memperluas pengetahuan melalui berbagai framework dan
                teknologi modern seperti React dan Laravel, serta terbiasa menerapkan prinsip responsive design agar setiap website yang
                saya bangun dapat diakses dengan baik di berbagai perangkat.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Ketertarikan saya tidak hanya terbatas pada sisi front-end, tetapi juga mencakup back-end dasar, sehingga saya mampu memahami
                alur kerja aplikasi web secara menyeluruh. Saya menikmati proses mengubah konsep dan desain menjadi aplikasi web interaktif
                yang fungsional, ramah pengguna, dan memiliki performa optimal.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Selain keterampilan teknis, saya juga mengandalkan soft skill seperti komunikasi yang jelas, kerja sama tim, dan kemampuan
                manajemen waktu untuk mendukung setiap proyek. Saya dikenal memiliki rasa ingin tahu tinggi, problem-solving mindset, dan
                adaptabilitas yang baik, sehingga dapat menyesuaikan diri dengan cepat terhadap perubahan teknologi maupun kebutuhan proyek.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Sebagai seorang pengembang pemula, saya memandang setiap proyek sebagai kesempatan berharga untuk menambah pengalaman dan
                mengasah keterampilan. Saya terbuka terhadap tantangan baru, senang berkolaborasi, dan selalu berusaha mengikuti perkembangan
                tren serta praktik terbaik di dunia teknologi agar dapat memberikan solusi yang efektif dan inovatif.
            </p>
        </section>

        <!-- ===== Projects ===== -->
        <section id="projects" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-emerald-400">Projects</h2>
            </div>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="group cursor-pointer"
                    onclick="openModal('/images/travelin.png','Travelin')">
                    <div class="relative">
                        <img src="/images/travelin.png" alt="Travelin"
                            class="rounded-md shadow-md w-full aspect-video object-cover">
                    </div>
                    <h3 class="mt-3 font-semibold text-white truncate">Travelin</h3>
                    <p class="text-sm text-gray-400">2024</p>
                </div>

                <!-- Card 2 -->
                <div class="group cursor-pointer"
                    onclick="openModal('/images/letris.png','Laravel + Filament Dashboard')">
                    <div class="relative">
                        <img src="/images/letris.png" alt="Laravel + Filament Dashboard"
                            class="rounded-md shadow-md w-full aspect-video object-cover">
                    </div>
                    <h3 class="mt-3 font-semibold text-white truncate">SMK LETRIS INDONESIA 2</h3>
                    <p class="text-sm text-gray-400">2025</p>
                </div>
            </div>

            <!-- ===== Modal Popup ===== -->
            <div id="imgModal"class="fixed inset-0 hidden bg-black/80 flex items-center justify-center z-50">
                <div class="relative max-w-4xl w-[90%]">
                    <!-- tombol close -->
                    <button onclick="closeModal()"
                            class="absolute -top-6 -right-6 text-white text-3xl font-bold hover:text-emerald-400">
                        &times;
                    </button>
                    <!-- gambar besar -->
                    <img id="modalImage"
                        src=""
                        alt="Preview"
                        class="rounded-lg shadow-xl w-full h-auto">
                    <!-- caption -->
                    <p id="modalCaption"
                    class="mt-3 text-center text-gray-300"></p>
                </div>
            </div>
        </section>

        <!-- ===== Experience ===== -->
        <section id="experience" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <h2 class="text-xl font-bold mb-6 text-emerald-400">Experiences</h2>

            <div class="relative pl-6 border-l-2 border-emerald-400 space-y-10">
                <!-- Experience 1 -->
                <div class="relative">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-400">Fullstack Developer</h3>
                            <p class="text-gray-300">Travelin Team Project</p>
                            <ul class="mt-2 text-gray-400 list-disc list-inside space-y-1">
                                <li>Developed travel e-commerce service with eye catching design</li>
                                <li>Designed and developed using Laravel, Filament, and TailwindCSS</li>
                            </ul>
                        </div>
                        <span class="mt-2 md:mt-0 text-sm text-gray-400">Oct 2025 – Jan 2025</span>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-400">Fullstack Developer</h3>
                            <p class="text-gray-300">LearNova Team Project</p>
                            <ul class="mt-2 text-gray-400 list-disc list-inside space-y-1">
                                <li>Developed an attractive, responsive and dynamic school profile website</li>
                                <li>Web projects using Laravel, Filament, and TailwindCSS.</li>
                            </ul>
                        </div>
                        <span class="mt-2 md:mt-0 text-sm text-gray-400">Mar – Jul 2025</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Skills ===== -->
        <section id="skills" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <h2 class="text-xl font-bold mb-4 text-emerald-400">Skills</h2>
            <div class="flex flex-wrap gap-3">
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/laravel.png" alt="Laravel" class="w-5 h-5"> Laravel
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/tailwind CSS.png" alt="TailwindCSS" class="w-5 h-5"> TailwindCSS
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/js.png" alt="JavaScript" class="w-5 h-5"> JavaScript
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/react.png" alt="React" class="w-5 h-5"> React
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/node.js.png" alt="NodeJs" class="w-5 h-5"> Node.js
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/php.png" alt="PHP" class="w-5 h-5"> PHP
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="/images/python.png" alt="Python" class="w-5 h-5"> Python
                </span>
            </div>
        </section>

        <!-- ===== Contact ===== -->
        <section id="contact" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <h2 class="text-xl font-bold mb-4 text-emerald-400">Contact</h2>
            <p class="mb-2">Email:
                <a href="mailto:hesselfarras1@gmail.com" class="text-emerald-400 hover:underline">hesselfarras1@gmail.com</a>
            </p>
            <p class="mb-2">GitHub:
                <a href="https://github.com/HesselFarras" class="text-emerald-400 hover:underline">github.com/Hessel</a>
            </p>
            <p>Instagram:
                <a href="https://instagram.com/hesselfarras" class="text-emerald-400 hover:underline">@hesselfarras</a>
            </p>
        </section>

        <footer class="p-6 text-center text-gray-500 border-t border-gray-800">
            Made with ☕ using Laravel & TailwindCSS
        </footer>
    </main>
</div>

<script>
  // Highlight nav saat scroll
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("aside nav a");
window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 100) current = sec.id;
    });
    navLinks.forEach(link => {
    link.classList.remove("text-emerald-400");
    if (link.getAttribute("href") === "#" + current) {
        link.classList.add("text-emerald-400");
    }
    });
});

  // Toggle sidebar + overlay
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
    sidebar.classList.remove('-translate-x-full');
    overlay.classList.remove('pointer-events-none');
    overlay.classList.add('opacity-100');
    }
    function closeSidebar() {
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('pointer-events-none');
    overlay.classList.remove('opacity-100');
    }

    menuBtn.addEventListener('click', () => {
    sidebar.classList.contains('-translate-x-full') ? openSidebar() : closeSidebar();
    });
    overlay.addEventListener('click', closeSidebar);

    // buka modal
    function openModal(src, caption) {
        document.getElementById('imgModal').classList.remove('hidden');
        document.getElementById('modalImage').src = src;
        document.getElementById('modalCaption').textContent = caption || '';
    }
    // tutup modal
    function closeModal() {
        document.getElementById('imgModal').classList.add('hidden');
    }
    // klik area gelap untuk menutup
    document.getElementById('imgModal').addEventListener('click', (e) => {
        if (e.target.id === 'imgModal') closeModal();
    });

    document.querySelectorAll('aside nav a').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        document.querySelector('main').scrollTo({
        top: target.offsetTop,
        behavior: 'smooth'
        });
    });
    });

</script>