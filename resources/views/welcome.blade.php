<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hessel Farras</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <!-- Header -->
        <header id="photo" class="header-gradient p-6 md:p-10 flex flex-col md:flex-row items-center md:items-end gap-6">
            <img src="{{ asset('images/aku.jpg') }}" alt="Profile Photo" class="w-40 h-40 md:w-56 md:h-56 object-cover rounded shadow-lg">
            <div>
                <p class="uppercase text-sm text-gray-300 mb-2">Public Profile</p>
                <h1 class="text-4xl md:text-6xl font-extrabold">Hessel Farras Abiyyu</h1>
                <p class="mt-2 text-gray-300">Junior Web Developer</p>
            </div>
        </header>

        <!-- About -->
        <section id="about" class="px-6 md:px-10 py-8 max-w-[80%]">
            <h2 class="text-xl font-bold mb-4 text-emerald-400">About Me</h2>
            <p class="text-gray-300 leading-relaxed">
                Hello! I’m a Junior Web Developer who’s always curious and excited to learn more about the world of web development. 
                I started with a solid foundation in HTML, CSS, and JavaScript, and I’m constantly exploring frameworks and modern tools 
                like React and Laravel. I enjoy building websites that are not only functional but also responsive, making sure they look 
                great on any device.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                I’m interested in both front-end and back-end development because understanding the full workflow of a web application helps 
                me create more complete and thoughtful solutions. I love turning ideas and designs into interactive applications that users 
                enjoy. Beyond coding, I have a big passion for music—especially pop punk, Midwestern emo, hip-hop, and even dangdut. Music 
                sparks my creativity and often inspires the way I approach problem-solving and design, making my work more expressive and 
                thoughtful.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Alongside my technical skills, I value soft skills like communication, teamwork, and time management. I’m known for being 
                curious, adaptable, and persistent when tackling challenges, whether it’s learning a new technology or solving a tricky coding
                problem.
            </p>
            <p class="text-gray-300 leading-relaxed mt-4">
                Every project I work on is an opportunity to grow and improve. I enjoy collaborating with others, taking on new challenges, 
                and staying up-to-date with trends and best practices in tech. Music and coding together fuel my creativity, reminding me that 
                inspiration can come from anywhere—and I try to bring that energy into everything I build..
            </p>
        </section>

        <!-- Projects -->
        <section id="projects" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-emerald-400">Projects</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="group cursor-pointer" onclick="openModal('{{ asset('images/travelin.png') }}','Travelin')">
                    <div class="relative">
                        <img src="{{ asset('images/travelin.png') }}" alt="Travelin" class="rounded-md shadow-md w-full aspect-video object-cover">
                    </div>
                    <h3 class="mt-3 font-semibold text-white truncate">Travelin</h3>
                    <p class="text-sm text-gray-400">2024</p>
                </div>

                <div class="group cursor-pointer" onclick="openModal('{{ asset('images/letris.png') }}','Laravel + Filament Dashboard')">
                    <div class="relative">
                        <img src="{{ asset('images/letris.png') }}" alt="Laravel + Filament Dashboard" class="rounded-md shadow-md w-full aspect-video object-cover">
                    </div>
                    <h3 class="mt-3 font-semibold text-white truncate">SMK LETRIS INDONESIA 2</h3>
                    <p class="text-sm text-gray-400">2025</p>
                </div>
            </div>

            <!-- Modal -->
            <div id="imgModal" class="fixed inset-0 hidden bg-black/80 flex items-center justify-center z-50">
                <div class="relative max-w-4xl w-[90%]">
                    <button onclick="closeModal()" class="absolute -top-6 -right-6 text-white text-3xl font-bold hover:text-emerald-400">&times;</button>
                    <img id="modalImage" src="" alt="Preview" class="rounded-lg shadow-xl w-full h-auto">
                    <p id="modalCaption" class="mt-3 text-center text-gray-300"></p>
                </div>
            </div>
        </section>

        <!-- Experience -->
        <section id="experience" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <h2 class="text-xl font-bold mb-6 text-emerald-400">Experiences</h2>
            <div class="relative pl-6 border-l-2 border-emerald-400 space-y-10">
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

        <!-- Skills -->
        <section id="skills" class="px-6 md:px-10 py-8 border-t border-gray-800">
            <h2 class="text-xl font-bold mb-4 text-emerald-400">Skills</h2>
            <div class="flex flex-wrap gap-3">
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/laravel.png') }}" alt="Laravel" class="w-5 h-5"> Laravel
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/tailwind CSS.png') }}" alt="TailwindCSS" class="w-5 h-5"> TailwindCSS
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/js.png') }}" alt="JavaScript" class="w-5 h-5"> JavaScript
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/react.png') }}" alt="React" class="w-5 h-5"> React
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/node.js.png') }}" alt="NodeJs" class="w-5 h-5"> Node.js
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/php.png') }}" alt="PHP" class="w-5 h-5"> PHP
                </span>
                <span class="flex items-center gap-2 px-4 py-1 bg-emerald-500/20 border border-emerald-400 rounded-full">
                    <img src="{{ asset('images/python.png') }}" alt="Python" class="w-5 h-5"> Python
                </span>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="px-6 md:px-10 py-8 border-t border-gray-800 flex flex-wrap justify-center gap-8">
            <!-- Gmail -->
            <div class="flex flex-col items-center">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hesselfarras1@gmail.com" class="text-emerald-400 hover:text-emerald-300">
                    <!-- Gmail icon SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 512 512" fill="currentColor">
                        <path d="M502.3 190.8L327.4 314.7c-18.8 13.7-45.3 13.7-64.1 0L9.7 190.8C3.9 186.2 0 179 0 171.4V80c0-17.7 14.3-32 32-32h448c17.7 0 32 14.3 32 32v91.4c0 7.6-3.9 14.8-9.7 19.4z"/>
                        <path d="M256 338.7L502.3 190.8c5.8-4.6 9.7-11.8 9.7-19.4V384c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V171.4c0 7.6 3.9 14.8 9.7 19.4L256 338.7z"/>
                    </svg>
                </a>
                <span class="mt-2 text-emerald-400 text-sm">Gmail</span>
            </div>

            <!-- GitHub -->
            <div class="flex flex-col items-center">
                <a href="https://github.com/HesselFarras" class="text-emerald-400 hover:text-emerald-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.016-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.082-.729.082-.729 1.205.085 1.84 1.236 1.84 1.236 1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.931 0-1.31.467-2.38 1.235-3.22-.123-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.3 1.23a11.48 11.48 0 0 1 3-.404c1.02.005 2.045.138 3 .404 2.28-1.552 3.285-1.23 3.285-1.23.655 1.652.243 2.873.12 3.176.77.84 1.232 1.91 1.232 3.22 0 4.61-2.807 5.623-5.48 5.922.43.37.815 1.096.815 2.21 0 1.595-.015 2.882-.015 3.27 0 .32.216.694.825.576C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <span class="mt-2 text-emerald-400 text-sm">GitHub</span>
            </div>
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
