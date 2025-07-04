@extends('components.layout')

@section('content')
<!-- Hero Section -->
<section id="home" class="pt-36 dark:bg-dark">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="sm:w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">
                    <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-black">Hessel Farras Abiyyu</span>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl ">Full Stack Developer |<span class="text-cyan-700"> IT Department</span></h2>
                </h1>
            </div>
            <div class="sm:w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-0 lg:right-0">
                    <img src="/images/pas_photo1.png" alt="" class="max-w-full mx-auto size-1/2">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Start About Section -->
<section id="about" class="pt-36 pb-32 dark:bg-dark">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                <h1 class="font-semibold text-dark text-3xl mb-5 max-w-18 lg:text-lg dark:text-black">Halo, Nama saya Hessel Farras Abiyyu seorang
                Mahasiswa Teknik Informatika yang menekuni bidang Web Developer (Fullstack), saya memiliki pengalaman dalam membangun aplikasi 
                web yang scalable dan efisien. Saya menguasai teknologi Laravel, TailwindCSS, dan Filament, serta memiliki pemahaman mendalam 
                tentang pengembangan sistem berbasis PHP dan JavaScript</h1>
                <h1 class="font-semibold text-dark text-3xl mb-5 max-w-18 lg:text-lg dark:text-black">
                Dengan fokus pada performa, keamanan, dan pengalaman pengguna, saya selalu berusaha menciptakan aplikasi yang tidak hanya 
                fungsional tetapi juga memiliki desain yang bersih dan responsif. Saya juga memiliki pengalaman dalam membangun dashboard 
                admin yang powerful menggunakan Filament dan mengoptimalkan UI/UX dengan TailwindCSS
                </h1>
                <h1 class="font-semibold text-dark text-3xl mb-5 max-w-18 lg:text-lg dark:text-black">
                Saya senang memecahkan masalah kompleks, bekerja dalam tim, dan terus belajar untuk mengikuti perkembangan teknologi terbaru. 
                Saya terbuka untuk kolaborasi dan selalu siap menghadapi tantangan baru dalam dunia teknologi
                </h1>
                <p class="font-medium text-base text-secondary max-w-xl dark:text-black"></p>
            </div>
            <div class="w-full px-48 lg:w-1/2">
                <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-black">Tahu aku lebih lanjut</h3>
                <div class="flex items-center">
                    <!-- Whatsapp -->
                    <a href="https://wa.me/6289630290039" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/images/whatsapp.png" alt=""></a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/hesselfarras/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/images/instagram.png" alt=""></a>

                    <!-- Github -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/images/github.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Pengalaman Kerja -->
<section id="portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-200">
    <div class="container mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Pengalaman Kerja</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">Bekerja kurang dari 1 tahun</h2>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            @foreach ($pengalamans as $item)
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <h3 class="font-semibold text-xl text-dark">{{$item->company_name}} |
                    <span class="font-semibold text-lg text-primary mb-2 text-cyan-600">{{$item->position}}
                    </span></h3>
                    <p class="font-semibold text-base text-secondary text-gray-600">
                    <span class="font-bold">{{$item->start_date}} - {{$item->end_date ?? "Present | "}}</span>
                    {{$item->description}}

                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Pengalaman Kerja -->

<!-- Skills -->
<section id="skills" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-300">
    <div class="container mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Skills</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">Skills yang dimiliki</h2>
                <p class="font-medium text-md text-secondary md:text-lg text-gray-600">Berikut beberapa skill dan alat yang saya kuasai
                </p>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <a href="#" target="_blank" class="max-w-[120px] py-4  lg:mx-6 xl:mx-8">
                <img src="/images/php.png" alt="PHP">
            </a>
            <a href="https://www.python.org/" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/python.png" alt="Python">
            </a>
            <a href="https://www.javascript.com/" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/js.png" alt="JavaScript">
            </a>
            <a href="#" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/Node.js.png" alt="Node.js">
            </a>
            <a href="https://www.mysql.com/" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/mysql.png" alt="MySql">
            </a>
            <a href="#" target="_blank" class="max-w-[120px] py-4  lg:mx-6 xl:mx-8">
                <img src="/images/laravel.png" alt="Laravel">
            </a>
            <a href="#" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/Tailwind CSS.png" alt="TailwindCSS">
            </a>
            <a href="#" target="_blank" class="max-w-[120px] py-4 lg:mx-6 xl:mx-8">
                <img src="/images/React.png" alt="Reactjs">
            </a>
        </div>
    </div> 
</section>
<!-- End Skills -->

<!-- Certificate -->
<section id="certificate" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-400">
    <div class="container mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Sertifikat</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">Sertifikat yang dimiliki</h2>
                <p class="font-medium text-md text-secondary md:text-lg text-gray-600">Berikut beberapa sertifikat yang saya miliki
                </p>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <a href="#" target="_blank" class="size-1/2 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                <img src="/images/serti1.png" alt="Kuliah Umum Bersama RedHat">
                <p>Kuliah Umum Bersama RedHat</p>
            </a>
            <a href="#" target="_blank" class="size-1/2 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                <img src="/images/serti2.png" alt="Pelatihan Fullstack Developer">
                <p>Bootcamp Fullstack Developer yang diadakan oleh HMIF ITI</p>
            </a>
        </div>
    </div> 
</section>
<!-- End Certificate -->
@endsection