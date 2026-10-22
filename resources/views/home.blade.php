
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $locale === 'id'
        ? 'Apfiani Group menyediakan solusi terpadu untuk kebutuhan bisnis, hukum, properti, dan layanan profesional.'
        : 'Apfiani Group provides integrated solutions for business, legal, property, and professional services.' }}">
    <title>{{ $locale === 'id' ? 'Beranda' : 'Home' }} | Apfiani Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF8F4] text-[#202A36] antialiased">

@php
    $id = $locale === 'id';

    $content = [
        'nav' => $id
            ? ['Beranda', 'Tentang Kami', 'Unit Bisnis', 'Tim', 'Kontak']
            : ['Home', 'About Us', 'Businesses', 'Our Team', 'Contact'],
        'eyebrow' => $id
            ? 'MITRA STRATEGIS ANDA'
            : 'YOUR STRATEGIC PARTNER',
        'hero' => $id
            ? 'Solusi Terpadu untuk Kebutuhan Bisnis Anda.'
            : 'Integrated Solutions for Your Business.',
        'intro' => $id
            ? 'Menghubungkan keahlian hukum, bisnis, properti, dan layanan profesional dalam satu ekosistem.'
            : 'Bringing together legal, business, property, and professional expertise in one ecosystem.',
        'cta' => $id ? 'Jelajahi Layanan' : 'Explore Our Services',
        'about_label' => $id ? 'TENTANG KAMI' : 'ABOUT US',
        'about_title' => $id
            ? 'Satu mitra, berbagai solusi.'
            : 'One partner, multiple solutions.',
        'about_text' => $id
            ? 'Apfiani Group didirikan oleh Apfiani Setiyanti, S.H., M.Kn., pada tanggal 3 Maret 2025. Beliau merupakan profesional hukum yang pernah berkarier di sejumlah perusahaan properti terkemuka di Jakarta, dengan pengalaman menangani permasalahan hukum di bidang properti, komersial, korporasi, pertanahan, dan perizinan di berbagai wilayah Indonesia.'
            : 'Apfiani Group was founded on March 3, 2025, by Apfiani Setiyanti, S.H., M.Kn. She is a legal professional with experience at leading property companies in Jakarta, handling legal matters involving property, commercial business, corporate affairs, land, and licensing across Indonesia.',
        'services_label' => $id ? 'APA YANG KAMI LAKUKAN' : 'WHAT WE DO',
        'services_title' => $id ? 'Layanan Kami' : 'Our Services',
        'services_text' => $id
            ? 'Jelajahi bidang layanan kami untuk menemukan solusi yang sesuai dengan kebutuhan Anda.'
            : 'Explore our service areas to find solutions suited to your needs.',
        'team_label' => $id ? 'TIM KAMI' : 'OUR TEAM',
        'team_title' => $id
            ? 'Keahlian dari berbagai bidang.'
            : 'Expertise across disciplines.',
        'team_text' => $id
            ? 'Dipimpin oleh para profesional dengan pengalaman di bidang hukum, bisnis, perpajakan, dan layanan teknis.'
            : 'Led by professionals with experience in law, business, taxation, and technical services.',
        'contact_title' => $id
            ? 'Mari diskusikan kebutuhan Anda.'
            : 'Let’s discuss your needs.',
        'contact_text' => $id
            ? 'Hubungi tim kami untuk memulai percakapan mengenai kebutuhan bisnis Anda.'
            : 'Contact our team to start a conversation about your business needs.',
        'contact_cta' => $id ? 'Hubungi Kami' : 'Contact Us',
        'footer' => $id
            ? 'Mitra strategis untuk kebutuhan bisnis dan profesional Anda.'
            : 'Your strategic partner for business and professional needs.',
    ];

    $services = $id ? [
        ['01', 'Layanan Hukum', 'Solusi hukum perusahaan, properti, pertanahan, dan komersial.'],
        ['02', 'Layanan Properti', 'Dukungan jual, beli, sewa, dan pengelolaan properti.'],
        ['03', 'Perizinan & Perpajakan', 'Pendampingan perizinan usaha dan kebutuhan perpajakan.'],
        ['04', 'Virtual Office', 'Solusi alamat bisnis dan kebutuhan kantor virtual.'],
        ['05', 'Arsitektur & Konstruksi', 'Layanan arsitektur, desain interior, dan pembangunan.'],
        ['06', 'IT Business Solutions', 'Solusi teknologi untuk mendukung kebutuhan bisnis.'],
    ] : [
        ['01', 'Legal Services', 'Corporate, property, land, and commercial legal solutions.'],
        ['02', 'Property Services', 'Support for property sales, purchases, rentals, and management.'],
        ['03', 'Licensing & Tax', 'Business licensing assistance and taxation services.'],
        ['04', 'Virtual Office', 'Business address and virtual office solutions.'],
        ['05', 'Architecture & Construction', 'Architecture, interior design, and construction services.'],
        ['06', 'IT Business Solutions', 'Technology solutions tailored to business needs.'],
    ];
@endphp

<header class="border-b border-slate-200 bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-8">
        <a href="{{ url('/' . $locale) }}"
            class="text-2xl font-bold tracking-tight">
            APFIANI<span class="font-normal text-slate-500"> GROUP</span>
        </a>

        <div class="hidden items-center gap-7 text-base md:flex">
            <a href="{{ url('/' . $locale) }}" class="font-semibold">
                {{ $content['nav'][0] }}
            </a>
            <a href="{{ url('/' . $locale . '/tentang') }}" class="text-slate-600 hover:text-black">
                {{ $content['nav'][1] }}
            </a>
            <a href="{{ url('/' . $locale . ($id ? '/unit-bisnis' : '/businesses')) }}" class="text-slate-600 hover:text-black">
                {{ $content['nav'][2] }}
            </a>
            <a href="{{ url('/' . $locale . ($id ? '/tim' : '/team')) }}" class="text-slate-600 hover:text-black">
                {{ $content['nav'][3] }}
            </a>
            <a href="{{ url('/' . $locale . ($id ? '/kontak' : '/contact')) }}" class="text-slate-600 hover:text-black">
                {{ $content['nav'][4] }}
            </a>
        </div>

        <div class="inline-flex items-center gap-1 rounded-full border border-[#C4A46A]/40 bg-[#F0ECE5] p-1">
            <a href="{{ url('/id') }}"
            class="rounded-full px-4 py-2 text-sm font-semibold transition
            {{ $id
                    ? 'bg-[#C4A46A] text-[#17212D] shadow-sm'
                    : 'text-slate-600 hover:bg-white' }}">
                ID
            </a>

            <a href="{{ url('/en') }}"
            class="rounded-full px-4 py-2 text-sm font-semibold transition
            {{ !$id
                    ? 'bg-[#C4A46A] text-[#17212D] shadow-sm'
                    : 'text-slate-600 hover:bg-white' }}">
                EN
            </a>
        </div>
    </nav>
</header>

<main>
    <section class="bg-slate-950 text-white">
        <div class="mx-auto grid max-w-7xl gap-12 px-6 py-24 md:grid-cols-2 md:items-center md:py-32 lg:px-8">
            <div>
                <p class="mb-6 text-xs font-semibold tracking-[0.25em] text-slate-400">
                    {{ $content['eyebrow'] }}
                </p>
                <h1 class="max-w-2xl text-4xl font-semibold leading-tight tracking-tight md:text-6xl">
                    {{ $content['hero'] }}
                </h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-300 md:text-lg">
                    {{ $content['intro'] }}
                </p>
                <a href="{{ url('/' . $locale . ($id ? '/unit-bisnis' : '/businesses')) }}"
                class="mt-9 inline-flex items-center gap-3 rounded-md bg-[#C4A46A] px-7 py-4 text-base font-semibold text-[#17212D] shadow-sm transition hover:bg-[#D4B982] focus:outline-none focus:ring-2 focus:ring-[#C4A46A] focus:ring-offset-2 focus:ring-offset-slate-950">
                    {{ $content['cta'] }}
                </a>

            </div>

            <div class="hidden min-h-80 items-center justify-center border border-white/15 bg-white/[0.03] p-10 md:flex">
                <div class="max-w-sm">
                    <p class="text-base tracking-widest text-slate-400">APFIANI GROUP</p>
                    <div class="my-6 h-px bg-white/20"></div>
                    <p class="text-3xl font-light leading-relaxed">
                        {{ $id ? 'Beragam keahlian. Satu tujuan.' : 'Different expertise. One purpose.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FAF8F4]">
        <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 md:grid-cols-2 md:gap-16 md:py-28 lg:px-8">

            {{-- Left: Section heading --}}
            <div>
                <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                    {{ $id ? 'TENTANG KAMI' : 'ABOUT US' }}
                </p>

                <h2 class="mt-5 text-3xl font-semibold tracking-tight text-[#17212D] md:text-4xl">
                    {{ $id ? 'Satu mitra, berbagai solusi.' : 'One partner, multiple solutions.' }}
                </h2>
            </div>

            {{-- Right: Company introduction --}}
            <div>
                <p class="text-lg leading-10 text-slate-600">
                    {{ $id
                        ? 'Apfiani Group didirikan oleh Apfiani Setiyanti, S.H., M.Kn., pada tanggal 3 Maret 2025. Beliau merupakan profesional hukum yang pernah berkarier di sejumlah perusahaan properti terkemuka di Jakarta, dengan pengalaman menangani permasalahan hukum di bidang properti, komersial, korporasi, pertanahan, dan perizinan di berbagai wilayah Indonesia.'
                        : 'Apfiani Group was founded by Apfiani Setiyanti, S.H., M.Kn., on March 3, 2025. She is a legal professional with experience at leading property companies in Jakarta, handling legal matters involving property, commercial business, corporate affairs, land, and licensing across Indonesia.' }}
                </p>

                <a href="{{ url('/' . $locale . ($id ? '/tentang' : '/about')) }}"
                class="mt-7 inline-flex items-center rounded-md bg-[#C4A46A] px-6 py-3 text-base font-semibold text-[#17212D] shadow-sm transition hover:bg-[#D4B982] focus:outline-none focus:ring-2 focus:ring-[#9A7943] focus:ring-offset-2">
                    {{ $id ? 'Kenali Apfiani Group' : 'Discover Apfiani Group' }}
                </a>
            </div>

        </div>
    </section>


    
    <section class="bg-[#F0ECE5]">
        <div class="mx-auto max-w-7xl px-6 py-20 md:py-28 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                    {{ $content['services_label'] }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight md:text-4xl">
                    {{ $content['services_title'] }}
                </h2>

                <p class="mt-4 text-base leading-8 text-slate-600">
                    {{ $content['services_text'] }}
                </p>
            </div>

            @php
                $serviceCards = [
                    [
                        'number' => '01',
                        'title_id' => 'Jual, Beli & Sewa Properti',
                        'title_en' => 'Property Sales & Leasing',
                        'desc_id' => 'Solusi untuk kebutuhan transaksi dan pengelolaan properti Anda.',
                        'desc_en' => 'Solutions for your property transactions and management needs.',
                        'icon' => '⌂',
                    ],
                    [
                        'number' => '02',
                        'title_id' => 'Virtual Office',
                        'title_en' => 'Virtual Office',
                        'desc_id' => 'Dukungan alamat bisnis dan kebutuhan operasional perusahaan.',
                        'desc_en' => 'Business address and operational support for your company.',
                        'icon' => '▤',
                    ],
                    [
                        'number' => '03',
                        'title_id' => 'Arsitektur & Desain Interior',
                        'title_en' => 'Architecture & Interior Design',
                        'desc_id' => 'Perencanaan ruang dan desain yang disesuaikan dengan kebutuhan Anda.',
                        'desc_en' => 'Space planning and design tailored to your needs.',
                        'icon' => '⌘',
                    ],
                    [
                        'number' => '04',
                        'title_id' => 'Layanan Konstruksi',
                        'title_en' => 'Construction Services',
                        'desc_id' => 'Dukungan pembangunan untuk mewujudkan kebutuhan proyek Anda.',
                        'desc_en' => 'Construction support to bring your project requirements to life.',
                        'icon' => '▥',
                    ],
                    [
                        'number' => '05',
                        'title_id' => 'IT Business Solutions',
                        'title_en' => 'IT Business Solutions',
                        'desc_id' => 'Solusi teknologi untuk mendukung kebutuhan dan perkembangan bisnis.',
                        'desc_en' => 'Technology solutions to support your business needs and growth.',
                        'icon' => '⌘',
                    ],
                ];
            @endphp

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($serviceCards as $service)
                    <article class="group rounded-xl border border-[#E8E0D4] bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#C4A46A] hover:shadow-lg">
                        <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                            {{ $service['number'] }}
                        </p>

                        <h3 class="mt-4 text-xl font-semibold leading-snug text-[#202A36]">
                            {{ $id ? $service['title_id'] : $service['title_en'] }}
                        </h3>

                        <p class="mt-3 text-base leading-7 text-slate-600">
                            {{ $id ? $service['desc_id'] : $service['desc_en'] }}
                        </p>

                        <button
                            type="button"
                            onclick="document.getElementById('service-{{ $service['number'] }}').showModal()"
                            class="mt-5 text-base font-semibold text-[#8A6B38] underline decoration-[#C4A46A] underline-offset-4 hover:text-[#654C27]">
                            {{ $id ? 'Pelajari lebih lanjut' : 'Learn more' }}
                        </button>
                    </article>

                    <dialog id="service-{{ $service['number'] }}"
                        class="m-auto w-[calc(100%-2rem)] max-w-xl rounded-xl border border-[#E8E0D4] bg-[#FAF8F4] p-0 text-[#202A36] shadow-2xl backdrop:bg-slate-950/60">
                        <div class="flex items-start justify-between gap-4 border-b border-[#E8E0D4] p-6">
                            <div>
                                <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                                    {{ $service['number'] }}
                                </p>
                                <h3 class="mt-2 text-2xl font-semibold">
                                    {{ $id ? $service['title_id'] : $service['title_en'] }}
                                </h3>
                            </div>

                            <button type="button"
                                onclick="this.closest('dialog').close()"
                                aria-label="{{ $id ? 'Tutup' : 'Close' }}"
                                class="rounded-md px-3 py-1 text-2xl text-slate-500 hover:bg-[#EDE6DA]">
                                &times;
                            </button>
                        </div>

                        <div class="p-6">
                            <p class="text-base leading-8 text-slate-600">
                                {{ $id ? $service['desc_id'] : $service['desc_en'] }}
                            </p>

                            <button type="button"
                                onclick="this.closest('dialog').close()"
                                class="mt-6 rounded-md bg-[#C4A46A] px-5 py-3 font-semibold text-[#17212D] transition hover:bg-[#D4B982]">
                                {{ $id ? 'Tutup' : 'Close' }}
                            </button>
                        </div>
                    </dialog>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#FAF8F4]">
        <div class="mx-auto max-w-7xl px-6 py-20 md:py-28 lg:px-8">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div class="max-w-2xl">
                    <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                        {{ $id ? 'KARYA PILIHAN' : 'SELECTED WORK' }}
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold tracking-tight md:text-4xl">
                        {{ $id ? 'Portofolio Pilihan' : 'Featured Portfolio' }}
                    </h2>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        {{ $id
                            ? 'Lihat beberapa proyek pilihan kami dan kenali pengalaman serta hasil kerja yang telah kami kembangkan.'
                            : 'Explore selected projects and discover the experience and work we have delivered.' }}
                    </p>
                </div>

                <a href="{{ $id ? '/id/portfolio' : '/en/portfolio' }}"
                    class="inline-flex w-fit items-center rounded-md border border-slate-300 px-6 py-3 text-base font-semibold transition hover:border-[#9A7943] hover:bg-[#F0E8DA]">
                    {{ $id ? 'Lihat Semua Portofolio' : 'View All Projects' }}
                </a>
            </div>

            @php
                $projects = [
                    [
                        'number' => '01',
                        'title_id' => 'Proyek Pilihan Pertama',
                        'title_en' => 'Featured Project One',
                        'category_id' => 'Properti & Pengembangan',
                        'category_en' => 'Property & Development',
                    ],
                    [
                        'number' => '02',
                        'title_id' => 'Proyek Pilihan Kedua',
                        'title_en' => 'Featured Project Two',
                        'category_id' => 'Arsitektur & Desain',
                        'category_en' => 'Architecture & Design',
                    ],
                    [
                        'number' => '03',
                        'title_id' => 'Proyek Pilihan Ketiga',
                        'title_en' => 'Featured Project Three',
                        'category_id' => 'Solusi Bisnis',
                        'category_en' => 'Business Solutions',
                    ],
                ];
            @endphp

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <article class="group overflow-hidden rounded-xl border border-[#E8E0D4] bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                        <div class="p-7">
                            <p class="text-sm font-semibold text-[#9A7943]">
                                {{ $id ? $project['category_id'] : $project['category_en'] }}
                            </p>

                            <h3 class="mt-2 text-xl font-semibold leading-snug text-[#202A36]">
                                {{ $id ? $project['title_id'] : $project['title_en'] }}
                            </h3>

                            <p class="mt-3 text-base leading-7 text-slate-600">
                                {{ $id
                                    ? 'Informasi singkat mengenai proyek akan ditampilkan di sini.'
                                    : 'A short overview of this project will appear here.' }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#F0ECE5]">
        <div class="mx-auto max-w-7xl px-6 py-20 md:py-28 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                    {{ $id ? 'PIMPINAN & TIM' : 'LEADERSHIP & TEAM' }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight md:text-4xl">
                    {{ $id ? 'Kenali Tim Kami' : 'Meet Our Team' }}
                </h2>

                <p class="mt-4 text-base leading-8 text-[#352B1D]">
                    {{ $id
                        ? 'Tim profesional dengan pengalaman di bidang hukum, properti, perpajakan, arsitektur, dan pengembangan bisnis.'
                        : 'Experienced professionals across law, property, taxation, architecture, and business development.' }}
                </p>
            </div>

            @php
                $team = [
                    ['name' => 'Apfiani Setiyanti, S.H., M.Kn.', 'role_id' => 'Executive Chairwoman', 'role_en' => 'Executive Chairwoman'],
                    ['name' => 'Steven Chandra, S.H.', 'role_id' => 'Partner Litigasi', 'role_en' => 'Litigation Partner'],
                    ['name' => 'Ludia Imanuella, S.H.', 'role_id' => 'Head of Legal', 'role_en' => 'Head of Legal'],
                ];
            @endphp

            <div class="mt-10 divide-y divide-[#DCD2C3] border-y border-[#A88A54]">
                @foreach ($team as $member)
                    <article class="flex flex-col justify-between gap-3 py-6 sm:flex-row sm:items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-[#202A36]">
                                {{ $member['name'] }}
                            </h3>
                            <p class="mt-1 text-base text-slate-600">
                                {{ $id ? $member['role_id'] : $member['role_en'] }}
                            </p>
                        </div>

                        <a href="{{ $id ? '/id/tim' : '/en/team' }}"
                        class="w-fit text-base font-semibold text-[#17212D] underline decoration-[#C4A46A]/50 underline-offset-4 hover:text-white">
                            {{ $id ? 'Lihat Profil' : 'View Profile' }}
                        </a>
                    </article>
                @endforeach
            </div>

            <a href="{{ $id ? '/id/tim' : '/en/team' }}"
            class="mt-8 inline-flex rounded-md border border-[#17212D] bg-[#C4A46A] px-6 py-3 text-base font-semibold black transition hover:bg-[#263548]">
                {{ $id ? 'Lihat Seluruh Tim' : 'Meet the Full Team' }}
            </a>
        </div>
    </section>

    <section class="overflow-hidden bg-stone-50 py-16 md:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <p class="text-xs font-semibold tracking-[0.2em] text-slate-500">
                    {{ $id ? 'JARINGAN KAMI' : 'OUR NETWORK' }}
                </p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight">
                    {{ $id ? 'Klien & Mitra Kami' : 'Our Clients & Partners' }}
                </h2>
            </div>

            @foreach ([
                ['title' => $id ? 'Klien Kami' : 'Our Clients', 'prefix' => 'CLIENT'],
                ['title' => $id ? 'Mitra Kami' : 'Our Partners', 'prefix' => 'PARTNER'],
            ] as $group)
                <div class="mt-12">
                    <h3 class="mb-5 text-center text-sm font-semibold text-slate-500">
                        {{ $group['title'] }}
                    </h3>

                    <div class="logo-marquee">
                        <div class="logo-track">
                            @for ($i = 1; $i <= 8; $i++)
                                <div class="flex h-20 w-40 shrink-0 items-center justify-center rounded-lg border border-stone-200 bg-white px-5 text-sm font-semibold tracking-wide text-slate-400">
                                    {{ $group['prefix'] }} {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                </div>
                            @endfor

                            @for ($i = 1; $i <= 8; $i++)
                                <div class="flex h-20 w-40 shrink-0 items-center justify-center rounded-lg border border-stone-200 bg-white px-5 text-sm font-semibold tracking-wide text-slate-400" aria-hidden="true">
                                    {{ $group['prefix'] }} {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    
    <section class="bg-[#F0ECE5]">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-8 px-6 py-16 md:flex-row md:items-center md:py-20 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold tracking-[0.2em] text-[#9A7943]">
                    {{ $id ? 'MARI TERHUBUNG' : 'LET’S CONNECT' }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-[#202A36] md:text-4xl">
                    {{ $content['contact_title'] }}
                </h2>

                <p class="mt-4 max-w-xl text-base leading-8 text-slate-600">
                    {{ $content['contact_text'] }}
                </p>
            </div>

            {{-- Replace the placeholder with the official WhatsApp number --}}
            <a href="https://wa.me/62XXXXXXXXXX"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex w-fit shrink-0 items-center justify-center rounded-md bg-[#C4A46A] px-7 py-4 text-base font-semibold text-[#17212D] shadow-sm transition hover:bg-[#D4B982] focus:outline-none focus:ring-2 focus:ring-[#9A7943] focus:ring-offset-2">
                {{ $id ? 'Hubungi via WhatsApp' : 'Chat on WhatsApp' }}
            </a>
        </div>
    </section>
</main>

<footer class="bg-slate-950 text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 py-12 md:grid-cols-2 md:gap-16 md:py-14 lg:px-8">

        {{-- Left: Brand --}}
        <div class="max-w-md">
            <a href="{{ url('/' . $locale) }}"
                class="text-2xl font-bold tracking-tight">
                APFIANI<span class="font-normal text-slate-400"> GROUP</span>
            </a>

            <p class="mt-5 text-base leading-7 text-slate-300">
                {{ $id
                    ? 'Mitra strategis untuk kebutuhan bisnis dan profesional Anda.'
                    : 'Your strategic partner for business and professional needs.' }}
            </p>
        </div>

        <div class="md:justify-self-center">
            <h2 class="text-base font-semibold">
                {{ $id ? 'Jelajahi' : 'Explore' }}
            </h2>

            <nav class="mt-5 flex flex-col items-start gap-3 text-base text-slate-300">
                <a class="transition hover:text-[#D4B982]"
                    href="{{ $id ? '/id/tentang' : '/en/about' }}">
                    {{ $id ? 'Tentang Kami' : 'About Us' }}
                </a>

                <a class="transition hover:text-[#D4B982]"
                    href="{{ $id ? '/id/unit-bisnis' : '/en/businesses' }}">
                    {{ $id ? 'Unit Bisnis' : 'Businesses' }}
                </a>

                <a class="transition hover:text-[#D4B982]"
                    href="{{ $id ? '/id/portfolio' : '/en/portfolio' }}">
                    {{ $id ? 'Portofolio' : 'Portfolio' }}
                </a>

                <a class="transition hover:text-[#D4B982]"
                    href="{{ $id ? '/id/kontak' : '/en/contact' }}">
                    {{ $id ? 'Kontak' : 'Contact' }}
                </a>
            </nav>
        </div>
    </div>

    <div class="border-t border-white/15">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-6 py-5 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <p>© {{ date('Y') }} Apfiani Group</p>
            <p>{{ $id ? 'Hak cipta dilindungi.' : 'All rights reserved.' }}</p>
        </div>
    </div>
</footer>

</body>
</html>
