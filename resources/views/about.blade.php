
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $locale === 'id' ? 'Tentang Kami' : 'About Us' }} | Apfiani Group
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAF8F4] text-[#172235] antialiased">

    @php
        $id = $locale === 'id';
    @endphp

    {{-- Navigation --}}
    <header class="border-b border-[#E8E0D2] bg-[#FAF8F4]">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-6 py-5 lg:px-10">
            <a href="{{ url('/' . $locale) }}"
                class="text-xl font-bold tracking-wide text-[#172235]">
                APFIANI <span class="font-normal text-[#A78243]">GROUP</span>
            </a>

            <nav class="flex items-center gap-4 text-sm font-medium sm:gap-7">
                <a href="{{ url('/' . $locale) }}"
                    class="transition hover:text-[#A78243]">
                    {{ $id ? 'Beranda' : 'Home' }}
                </a>

                <a href="{{ $id ? '/id/tentang' : '/en/about' }}"
                    class="border-b-2 border-[#A78243] pb-1">
                    {{ $id ? 'Tentang Kami' : 'About Us' }}
                </a>

                <a href="{{ url('/services') }}"
                    class="transition hover:text-[#A78243]">
                    {{ $id ? 'Layanan' : 'Services' }}
                </a>

                <a href="{{ $id ? '/en/about' : '/id/tentang' }}"
                    class="rounded-md border border-[#D8C7A7] px-3 py-2 text-xs transition hover:bg-[#F0E9DC]">
                    {{ $id ? 'EN' : 'ID' }}
                </a>
            </nav>
        </div>
    </header>

    <main>
        {{-- Hero --}}
        <section class="relative overflow-hidden border-b border-[#E8E0D2]">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-28 lg:px-10 lg:py-32">
                <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-[#A78243]">
                    {{ $id ? 'Mengenal Kami' : 'Get to Know Us' }}
                </p>

                <h1 class="max-w-4xl text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-7xl">
                    {{ $id
                        ? 'Mengenal Apfiani Group'
                        : 'Get to Know Apfiani Group' }}
                </h1>

                <div class="mt-7 h-[2px] w-20 bg-[#C9A76B]"></div>

                <p class="mt-7 max-w-2xl text-base leading-8 text-[#596170] sm:text-lg">
                    {{ $id
                        ? 'Kenali perusahaan kami, nilai yang kami bawa, dan berbagai layanan yang berada di bawah Apfiani Group.'
                        : 'Discover our company, the values we stand for, and the diverse services brought together under Apfiani Group.' }}
                </p>

                <a href="{{ url('/services') }}"
                    class="mt-9 inline-flex rounded-xl border-2 border-[#A78243] bg-[#C9A76B] p-[3px] transition hover:bg-[#D4B77F]">
                    <span class="rounded-lg border-2 border-[#FAF8F4] bg-transparent px-6 py-3 font-semibold text-[#172235]">
                        {{ $id ? 'Jelajahi Layanan' : 'Explore Our Services' }}
                        <span aria-hidden="true" class="ml-2">→</span>
                    </span>
                </a>
            </div>
        </section>

        {{-- Company Overview --}}
        <section class="mx-auto grid max-w-7xl gap-10 px-6 py-20 sm:py-24 lg:grid-cols-2 lg:gap-20 lg:px-10">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                    {{ $id ? 'Profil Perusahaan' : 'Company Profile' }}
                </p>

                <h2 class="mt-4 text-3xl font-semibold leading-tight sm:text-4xl">
                    {{ $id ? 'Tentang Apfiani Group' : 'About Apfiani Group' }}
                </h2>

                <div class="mt-6 h-[2px] w-16 bg-[#C9A76B]"></div>
            </div>

            <div class="space-y-5 text-base leading-8 text-[#596170]">
                <p>
                    {{ $id
                        ? 'Apfiani Group menaungi berbagai layanan yang dirancang untuk memenuhi kebutuhan bisnis dan pelanggan melalui beragam bidang usaha.'
                        : 'Apfiani Group brings together a range of services designed to support business and customer needs across different areas of expertise.' }}
                </p>

                <p>
                    {{ $id
                        ? 'Informasi lengkap mengenai latar belakang dan perjalanan perusahaan dapat ditambahkan di sini berdasarkan profil resmi perusahaan.'
                        : 'More details about the company’s background and history can be added here using the official company profile.' }}
                </p>
            </div>
        </section>

        {{-- Vision & Mission --}}
        <section class="border-y border-[#E8E0D2] bg-[#F2EDE3]">
            <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-10">
                <div class="max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                        {{ $id ? 'Arah dan Tujuan Kami' : 'Our Direction and Purpose' }}
                    </p>

                    <h2 class="mt-4 text-3xl font-semibold sm:text-4xl">
                        {{ $id ? 'Visi & Misi' : 'Vision & Mission' }}
                    </h2>
                </div>

                <div class="mt-10 grid gap-6 md:grid-cols-2">
                    <article class="rounded-xl border border-[#D9C8A8] bg-[#FAF8F4] p-7 sm:p-9">
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                            {{ $id ? 'Visi' : 'Vision' }}
                        </span>

                        <h3 class="mt-4 text-2xl font-semibold">
                            {{ $id ? 'Visi Kami' : 'Our Vision' }}
                        </h3>

                        <p class="mt-4 leading-8 text-[#596170]">
                            {{ $id
                                ? 'Visi resmi perusahaan akan ditampilkan di bagian ini.'
                                : 'The company’s official vision will be displayed here.' }}
                        </p>
                    </article>

                    <article class="rounded-xl border border-[#D9C8A8] bg-[#FAF8F4] p-7 sm:p-9">
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                            {{ $id ? 'Misi' : 'Mission' }}
                        </span>

                        <h3 class="mt-4 text-2xl font-semibold">
                            {{ $id ? 'Misi Kami' : 'Our Mission' }}
                        </h3>

                        <p class="mt-4 leading-8 text-[#596170]">
                            {{ $id
                                ? 'Misi resmi perusahaan akan ditampilkan di bagian ini.'
                                : 'The company’s official mission will be displayed here.' }}
                        </p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Services introduction --}}
        <section class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-10">
            <div class="rounded-2xl border border-[#E5D8C1] bg-[#FAF8F4] px-7 py-10 sm:px-12 sm:py-14">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                    {{ $id ? 'Jelajahi Lebih Lanjut' : 'Discover More' }}
                </p>

                <div class="mt-4 flex flex-col items-start justify-between gap-8 md:flex-row md:items-end">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-semibold leading-tight sm:text-4xl">
                            {{ $id
                                ? 'Beragam Layanan dalam Satu Grup'
                                : 'Diverse Services, One Group' }}
                        </h2>

                        <p class="mt-5 leading-8 text-[#596170]">
                            {{ $id
                                ? 'Temukan berbagai layanan Apfiani Group dan kunjungi situs masing-masing untuk informasi lebih lengkap.'
                                : 'Explore Apfiani Group’s services and visit their respective websites for more detailed information.' }}
                        </p>
                    </div>

                    <a href="{{ url('/services') }}"
                        class="inline-flex shrink-0 rounded-xl border-2 border-[#A78243] bg-[#C9A76B] p-[3px] transition hover:bg-[#D4B77F]">
                        <span class="rounded-lg border-2 border-[#FAF8F4] bg-transparent px-6 py-3 font-semibold text-[#172235]">
                            {{ $id ? 'Lihat Semua Layanan' : 'View All Services' }}
                            <span aria-hidden="true" class="ml-2">→</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="border-t border-[#E8E0D2] bg-[#172235] text-[#FAF8F4]">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 sm:flex-row sm:items-center sm:justify-between lg:px-10">
            <a href="{{ url('/' . $locale) }}"
                class="font-semibold tracking-wide">
                APFIANI <span class="font-normal text-[#C9A76B]">GROUP</span>
            </a>

            <p class="text-sm text-white/65">
                © {{ date('Y') }} Apfiani Group.
                {{ $id ? 'Hak cipta dilindungi.' : 'All rights reserved.' }}
            </p>
        </div>
    </footer>

</body>
</html>
