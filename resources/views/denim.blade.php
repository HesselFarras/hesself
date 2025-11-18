<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Progres Mingguan Denim</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #243b55, #141e30);
      background-attachment: fixed;
    }
    .denim-texture {
      background-image: linear-gradient(135deg, rgba(255,255,255,0.05) 25%, transparent 25%),
                        linear-gradient(225deg, rgba(255,255,255,0.05) 25%, transparent 25%),
                        linear-gradient(45deg, rgba(255,255,255,0.05) 25%, transparent 25%),
                        linear-gradient(315deg, rgba(255,255,255,0.05) 25%, #243b55 25%);
      background-size: 20px 20px;
      background-color: #1e3a5f;
    }
    .stitched {
      position: relative;
      border: 2px dashed rgba(255,255,255,0.3);
    }
    .stitched::before {
      content: "";
      position: absolute;
      inset: 0;
      border: 1px solid rgba(255,255,255,0.1);
      pointer-events: none;
    }
    /* Scrollbar Styling */
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>
<body class="text-gray-100">

  <!-- Header -->
  <header class="bg-gradient-to-r from-[#1e3a5f] to-[#12243a] py-8 shadow-lg border-b-2 border-blue-800">
    <div class="max-w-6xl mx-auto text-center">
      <h1 class="text-4xl font-extrabold tracking-wide text-blue-100 uppercase">Progres Mingguan Denim</h1>
      <p class="text-blue-200 mt-2 text-sm">Perjalanan proses kreatif dari minggu ke minggu</p>
    </div>
  </header>

  <!-- Carousel Section -->
  <section class="max-w-7xl mx-auto py-14 px-6 relative">

    <!-- Left Button -->
    <button id="prevBtn" class="hidden sm:flex absolute left-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Right Button -->
    <button id="nextBtn" class="hidden sm:flex absolute right-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Carousel Container -->
    <div id="carousel" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth">
      
      <!-- Card Item -->
      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1582407947304-3c97d93004c1?auto=format&fit=crop&w=800&q=80" alt="Minggu 1" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 1 — Perencanaan & Desain</h2>
          <p class="text-blue-200 text-sm">Riset tren dan pembuatan desain awal jeans yang akan dikembangkan.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618354691373-6c7e5a4b2f49?auto=format&fit=crop&w=800&q=80" alt="Minggu 2" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 2 — Pemotongan Kain</h2>
          <p class="text-blue-200 text-sm">Kain denim dipotong sesuai pola desain menggunakan alat potong presisi.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618889484403-7ffdf4d8e092?auto=format&fit=crop&w=800&q=80" alt="Minggu 3" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 3 — Proses Jahit</h2>
          <p class="text-blue-200 text-sm">Setiap potongan dijahit menjadi bentuk celana dengan teknik jahitan ganda.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1600181953987-4c8d3c57ec4d?auto=format&fit=crop&w=800&q=80" alt="Minggu 4" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 4 — Pewarnaan & Pencucian</h2>
          <p class="text-blue-200 text-sm">Pewarnaan alami serta pencucian agar tekstur denim semakin lembut dan alami.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1591195853828-11db59a0bb46?auto=format&fit=crop&w=800&q=80" alt="Minggu 5" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 5 — Finishing Detail</h2>
          <p class="text-blue-200 text-sm">Penambahan kancing, label, dan detail akhir untuk tampilan profesional.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1601333166371-2a3a9b9ce7ec?auto=format&fit=crop&w=800&q=80" alt="Minggu 6" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 6 — Evaluasi & Pemotretan</h2>
          <p class="text-blue-200 text-sm">Tahap akhir berupa evaluasi kualitas dan pemotretan hasil karya denim.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Carousel Section -->
  <section class="max-w-7xl mx-auto py-14 px-6 relative">

    <!-- Left Button -->
    <button id="prevBtn" class="hidden sm:flex absolute left-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Right Button -->
    <button id="nextBtn" class="hidden sm:flex absolute right-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Carousel Container -->
    <div id="carousel" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth">
      
      <!-- Card Item -->
      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1582407947304-3c97d93004c1?auto=format&fit=crop&w=800&q=80" alt="Minggu 1" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 1 — Perencanaan & Desain</h2>
          <p class="text-blue-200 text-sm">Riset tren dan pembuatan desain awal jeans yang akan dikembangkan.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618354691373-6c7e5a4b2f49?auto=format&fit=crop&w=800&q=80" alt="Minggu 2" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 2 — Pemotongan Kain</h2>
          <p class="text-blue-200 text-sm">Kain denim dipotong sesuai pola desain menggunakan alat potong presisi.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618889484403-7ffdf4d8e092?auto=format&fit=crop&w=800&q=80" alt="Minggu 3" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 3 — Proses Jahit</h2>
          <p class="text-blue-200 text-sm">Setiap potongan dijahit menjadi bentuk celana dengan teknik jahitan ganda.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1600181953987-4c8d3c57ec4d?auto=format&fit=crop&w=800&q=80" alt="Minggu 4" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 4 — Pewarnaan & Pencucian</h2>
          <p class="text-blue-200 text-sm">Pewarnaan alami serta pencucian agar tekstur denim semakin lembut dan alami.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1591195853828-11db59a0bb46?auto=format&fit=crop&w=800&q=80" alt="Minggu 5" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 5 — Finishing Detail</h2>
          <p class="text-blue-200 text-sm">Penambahan kancing, label, dan detail akhir untuk tampilan profesional.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1601333166371-2a3a9b9ce7ec?auto=format&fit=crop&w=800&q=80" alt="Minggu 6" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 6 — Evaluasi & Pemotretan</h2>
          <p class="text-blue-200 text-sm">Tahap akhir berupa evaluasi kualitas dan pemotretan hasil karya denim.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Carousel Section -->
  <section class="max-w-7xl mx-auto py-14 px-6 relative">

    <!-- Left Button -->
    <button id="prevBtn" class="hidden sm:flex absolute left-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Right Button -->
    <button id="nextBtn" class="hidden sm:flex absolute right-2 top-1/2 -translate-y-1/2 bg-blue-900/70 hover:bg-blue-800 p-3 rounded-full shadow-lg z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Carousel Container -->
    <div id="carousel" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth">
      
      <!-- Card Item -->
      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1582407947304-3c97d93004c1?auto=format&fit=crop&w=800&q=80" alt="Minggu 1" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 1 — Perencanaan & Desain</h2>
          <p class="text-blue-200 text-sm">Riset tren dan pembuatan desain awal jeans yang akan dikembangkan.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618354691373-6c7e5a4b2f49?auto=format&fit=crop&w=800&q=80" alt="Minggu 2" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 2 — Pemotongan Kain</h2>
          <p class="text-blue-200 text-sm">Kain denim dipotong sesuai pola desain menggunakan alat potong presisi.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1618889484403-7ffdf4d8e092?auto=format&fit=crop&w=800&q=80" alt="Minggu 3" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 3 — Proses Jahit</h2>
          <p class="text-blue-200 text-sm">Setiap potongan dijahit menjadi bentuk celana dengan teknik jahitan ganda.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1600181953987-4c8d3c57ec4d?auto=format&fit=crop&w=800&q=80" alt="Minggu 4" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 4 — Pewarnaan & Pencucian</h2>
          <p class="text-blue-200 text-sm">Pewarnaan alami serta pencucian agar tekstur denim semakin lembut dan alami.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1591195853828-11db59a0bb46?auto=format&fit=crop&w=800&q=80" alt="Minggu 5" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 5 — Finishing Detail</h2>
          <p class="text-blue-200 text-sm">Penambahan kancing, label, dan detail akhir untuk tampilan profesional.</p>
        </div>
      </div>

      <div class="denim-texture stitched rounded-2xl snap-center min-w-[300px] sm:min-w-[400px] md:min-w-[450px] hover:scale-[1.03] hover:shadow-2xl transition duration-500">
        <img src="https://images.unsplash.com/photo-1601333166371-2a3a9b9ce7ec?auto=format&fit=crop&w=800&q=80" alt="Minggu 6" class="w-full h-56 object-cover opacity-90 hover:opacity-100 transition">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-white mb-2">Minggu 6 — Evaluasi & Pemotretan</h2>
          <p class="text-blue-200 text-sm">Tahap akhir berupa evaluasi kualitas dan pemotretan hasil karya denim.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-[#12243a] to-[#1e3a5f] text-blue-200 text-center py-6 border-t-2 border-blue-800 mt-10">
    <p class="text-sm">© 2025 <span class="font-semibold text-blue-100">Denim Project</span>. All rights reserved.</p>
  </footer>

  <script>
    const carousel = document.getElementById('carousel');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    nextBtn.addEventListener('click', () => {
      carousel.scrollBy({ left: 400, behavior: 'smooth' });
    });
    prevBtn.addEventListener('click', () => {
      carousel.scrollBy({ left: -400, behavior: 'smooth' });
    });
  </script>

</body>
</html>
