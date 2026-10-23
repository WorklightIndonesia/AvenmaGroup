
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

        $content = [
            'nav' => $id
                ? ['Beranda', 'Tentang Kami', 'Layanan', 'Tim', 'Kontak']
                : ['Home', 'About', 'Services', 'Team', 'Contact'],
        ];
    @endphp

    <header class="border-b border-[#E8E0D2] bg-[#FAF8F4]">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-8">
            <a href="{{ url('/' . $locale) }}" class="text-2xl font-bold tracking-tight">
                APFIANI
                <span class="font-normal text-[#C4A46A]"> 
                    GROUP
                </span>
            </a>

            <div class="hidden items-center gap-7 text-base md:flex">
                <a href="{{ $id ? '/id' : '/en' }}"
                class="{{ request()->is('id') || request()->is('en')
                    ? 'font-semibold text-[#172235]'
                    : 'text-slate-600 hover:text-black' }}">
                    {{ $content['nav'][0] }}
                </a>

                <a href="{{ $id ? '/id/tentang' : '/en/about' }}"
                class="{{ request()->is('id/tentang') || request()->is('en/about')
                    ? 'font-semibold text-[#172235]'
                    : 'text-slate-600 hover:text-black' }}">
                    {{ $content['nav'][1] }}
                </a>

                <a href="{{ $id ? '/id/layanan' : '/en/services' }}"
                class="text-slate-600 hover:text-black">
                    {{ $content['nav'][2] }}
                </a>

                <a href="{{ $id ? '/id/tim' : '/en/team' }}"
                class="text-slate-600 hover:text-black">
                    {{ $content['nav'][3] }}
                </a>

                <a href="{{ $id ? '/id#kontak' : '/en#kontak' }}"
                class="text-slate-600 hover:text-black">
                    {{ $content['nav'][4] }}
                </a>
            </div>

            <div class="inline-flex items-center gap-1 rounded-full border border-[#C4A46A]/40 bg-[#F0ECE5] p-1">
                <a href="{{ $id
                    ? request()->getRequestUri()
                    : (request()->getPathInfo() === '/en/about' ? '/id/tentang' : str_replace('/en', '/id', request()->getPathInfo())) }}"
                    class="rounded-full px-4 py-2 text-sm font-semibold transition
                    {{ $id
                        ? 'bg-[#C4A46A] text-[#17212D] shadow-sm'
                        : 'text-slate-600 hover:bg-white' }}">
                    ID
                </a>

                <a href="{{ !$id
                    ? request()->getRequestUri()
                    : (request()->getPathInfo() === '/id/tentang' ? '/en/about' : str_replace('/id', '/en', request()->getPathInfo())) }}"
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
        <section class="relative overflow-hidden border-b border-[#E8E0D2]">
            <div class="mx-auto max-w-5xl px-6 py-16 sm:py-20 lg:px-10 lg:py-28">
                <div class="min-w-0">
                    <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-[#A78243]">
                        {{ $id ? 'Profil Perusahaan' : 'Company Profile' }}
                    </p>

                    <h1 class="max-w-4xl text-4xl font-semibold leading-tight tracking-tight text-[#172235] sm:text-5xl lg:text-6xl">
                        {{ $id ? 'Mengenal Apfiani Group' : 'About Apfiani Group' }}
                    </h1>

                    <div class="mt-7 h-[2px] w-20 bg-[#C9A76B]"></div>

                    <div class="mt-7 text-justify text-base leading-8 text-[#596170] sm:text-lg">
                        {{-- Always visible: Preview --}}
                        <p>
                            {{ $id
                                ? 'Apfiani Group didirikan oleh Apfiani Setiyanti, S.H., M.Kn., pada tanggal 3 Maret 2025. Beliau merupakan profesional hukum yang berpengalaman di beberapa perusahaan properti besar terkemuka di Jakarta, dengan pengalaman menangani permasalahan hukum properti, termasuk bisnis komersial, korporasi, pertanahan, dan perizinan di hampir seluruh wilayah Indonesia.'
                                : 'Apfiani Group was founded on March 3, 2025, by Apfiani Setiyanti, S.H., M.Kn., a legal professional with experience at leading property companies in Jakarta. Her expertise includes property-related legal matters involving commercial business, corporate affairs, land, and licensing across almost all regions of Indonesia.' }}
                        </p>
                        <div id="company-extra" class="mt-5 hidden space-y-5">
                            <p>
                                {{ $id
                                    ? 'Berawal dari visi dan misi sang pendiri, Apfiani Group didirikan untuk memberikan layanan yang menyeluruh, terintegrasi, terpercaya, dan profesional. Layanan tersebut mencakup kebutuhan komersial bisnis, perpajakan, hukum, hingga penyelesaian sengketa melalui jalur nonlitigasi maupun litigasi, mulai dari pendirian perusahaan hingga selama kegiatan operasional berlangsung. Apfiani Group hadir sebagai layanan terpadu satu pintu atau one-stop solution yang memberikan kemudahan bagi para pengguna jasa.'
                                    : 'Inspired by its founder’s vision and mission, Apfiani Group was established to provide comprehensive, integrated, reliable, and professional services. These include commercial business solutions, taxation, legal services, and dispute resolution through both non-litigation and litigation, from company establishment throughout its operations. Apfiani Group aims to provide a convenient one-stop solution for its clients.' }}
                            </p>

                            <p>
                                {{ $id
                                    ? 'Seiring berjalannya waktu, Apfiani Group terus berinovasi melalui penambahan kemitraan di berbagai bidang layanan dan pengembangan kemampuan. Dengan semakin beragamnya layanan yang tersedia, kami berupaya memenuhi kebutuhan bisnis klien melalui konsep one-stop solution, termasuk memudahkan klien dalam memenuhi berbagai kebutuhan dan menangani penyelesaian sengketa.'
                                    : 'Over time, Apfiani Group has continued to innovate by expanding its partnerships and service areas. Through its growing range of services and one-stop solution approach, the group aims to simplify how clients address their business needs and resolve disputes.' }}
                            </p>

                            <p>
                                {{ $id
                                    ? 'Apfiani Group didukung oleh tenaga profesional berpengalaman di bidangnya, dengan latar belakang di sejumlah perusahaan swasta besar di Jakarta. Tim kami berkomitmen untuk memberikan layanan yang tepat dan bertanggung jawab.'
                                    : 'Apfiani Group is supported by experienced professionals with expertise in their respective fields and backgrounds at major private companies in Jakarta. Our team is committed to providing appropriate and responsible services.' }}
                            </p>
                        </div>

                        <button
                            id="company-toggle"
                            type="button"
                            aria-expanded="false"
                            aria-controls="company-extra"
                            class="mt-4 inline-flex items-center gap-2 font-semibold text-[#A78243] transition hover:text-[#172235]"
                        >
                            <span id="company-toggle-label">
                                {{ $id ? 'Baca Selengkapnya' : 'Read More' }}
                            </span>
                            <span id="company-toggle-icon" aria-hidden="true">↓</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Company Profile Read More / Read Less --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggle = document.getElementById('company-toggle');
                const extra = document.getElementById('company-extra');
                const label = document.getElementById('company-toggle-label');
                const icon = document.getElementById('company-toggle-icon');

                if (!toggle || !extra || !label || !icon) return;

                const isIndonesian = @json($id);

                toggle.addEventListener('click', function () {
                    const expanded = toggle.getAttribute('aria-expanded') === 'true';

                    toggle.setAttribute('aria-expanded', String(!expanded));
                    extra.classList.toggle('hidden', expanded);

                    label.textContent = expanded
                        ? (isIndonesian ? 'Baca Selengkapnya' : 'Read More')
                        : (isIndonesian ? 'Baca Lebih Sedikit' : 'Read Less');

                    icon.textContent = expanded ? '↓' : '↑';
                });
            });
        </script>


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

                        <p class="mt-4 text-justify leading-8 text-[#596170]">
                            {{ $id
                                ? 'Visi Apfiani Group adalah menjadi mitra strategis paling andal bagi setiap perusahaan dan/atau perorangan dalam memberikan solusi untuk memenuhi kebutuhan bisnis klien, baik dari sisi komersial maupun hukum, serta penyelesaian sengketa melalui jalur litigasi maupun nonlitigasi.'
                                : 'Apfiani Group’s vision is to become the most reliable strategic partner for every company and individual, providing solutions that meet clients’ business needs in both commercial and legal matters, as well as dispute resolution through litigation and non-litigation.' }}
                        </p>
                    </article>

                    <article class="rounded-xl border border-[#D9C8A8] bg-[#FAF8F4] p-7 sm:p-9">
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#A78243]">
                            {{ $id ? 'Misi' : 'Mission' }}
                        </span>

                        <h3 class="mt-4 text-2xl font-semibold">
                            {{ $id ? 'Misi Kami' : 'Our Mission' }}
                        </h3>

                        <p class="mt-4 text-justify leading-8 text-[#596170]">
                            {{ $id
                                ? 'Misi Apfiani Group adalah menyediakan layanan satu pintu untuk memenuhi kebutuhan komersial bisnis, hukum, teknis, perpajakan, dan perizinan bagi berbagai kegiatan usaha perusahaan maupun kebutuhan pribadi individu secara profesional, bertanggung jawab, dan tepat.'
                                : 'Apfiani Group’s mission is to provide a one-stop service for commercial business, legal, technical, taxation, and licensing needs across companies’ business activities and individuals’ personal needs, delivered professionally, responsibly, and accurately.' }}
                        </p>
                    </article>
                </div>
            </div>
        </section>

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

                    <a href="{{ $id ? '/id/layanan' : '/en/services' }}"
                        class="inline-flex shrink-0 rounded-xl border-2 border-[#A78243] bg-[#C9A76B] p-[3px] transition hover:bg-[#D4B77F]">
                        <span class="rounded-lg border-2 border-[#FAF8F4] bg-transparent px-6 py-3 font-semibold text-[#172235]">
                            {{ $id ? 'Lihat Semua Layanan' : 'View All Services' }}
                        </span>
                    </a>
                </div>
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

            {{-- Right: Explore --}}
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

        {{-- Copyright --}}
        <div class="border-t border-white/15">
            <div class="mx-auto flex max-w-7xl flex-col gap-2 px-6 py-5 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <p>© {{ date('Y') }} Apfiani Group</p>
                <p>{{ $id ? 'Hak cipta dilindungi.' : 'All rights reserved.' }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
