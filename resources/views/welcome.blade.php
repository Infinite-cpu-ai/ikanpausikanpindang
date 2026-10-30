<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cerita laut, resep rumahan, dan rasa khas Ikanpausikanpindang.">

        <title>{{ config('app.name', 'Ikanpausikanpindang') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#f7f4ed] text-[#183b3a] antialiased">
        <header class="sticky top-0 z-50 border-b border-[#183b3a]/10 bg-[#f7f4ed]/95 backdrop-blur">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8" aria-label="Navigasi utama">
                <a href="#beranda" class="font-serif text-xl font-bold tracking-tight text-[#183b3a]">
                    ikanpaus<span class="text-[#d96c3f]">ikanpindang</span>
                </a>

                <button
                    type="button"
                    class="rounded-lg p-2 text-[#183b3a] hover:bg-[#183b3a]/10 lg:hidden"
                    data-menu-toggle
                    aria-controls="main-menu"
                    aria-expanded="false"
                    aria-label="Buka menu"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div id="main-menu" class="absolute inset-x-0 top-full hidden border-b border-[#183b3a]/10 bg-[#f7f4ed] px-6 py-4 lg:static lg:flex lg:items-center lg:gap-8 lg:border-0 lg:bg-transparent lg:p-0" data-menu>
                    <div class="flex flex-col gap-4 text-sm font-medium lg:flex-row lg:items-center">
                        <a href="#cerita" class="transition hover:text-[#d96c3f]" data-menu-link>Cerita Kami</a>
                        <a href="#rasa" class="transition hover:text-[#d96c3f]" data-menu-link>Rasa Pilihan</a>
                        <a href="#nilai" class="transition hover:text-[#d96c3f]" data-menu-link>Kenapa Kami</a>
                    </div>
                    <a href="#mulai" class="mt-4 inline-flex items-center justify-center rounded-full bg-[#d96c3f] px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-[#b9532c] lg:mt-0" data-menu-link>
                        Jelajahi Sekarang
                    </a>
                </div>
            </nav>
        </header>

        <main>
            <section id="beranda" class="overflow-hidden">
                <div class="mx-auto grid max-w-7xl gap-12 px-6 py-20 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-8 lg:py-28">
                    <div>
                        <p class="mb-5 text-sm font-bold uppercase tracking-[0.25em] text-[#d96c3f]">Dari laut, untuk meja makan</p>
                        <h1 class="max-w-3xl font-serif text-5xl font-bold leading-[1.05] tracking-tight text-[#183b3a] sm:text-6xl lg:text-7xl">
                            Rasa pesisir yang <span class="text-[#d96c3f]">pulang</span> ke rumah.
                        </h1>
                        <p class="mt-6 max-w-xl text-lg leading-8 text-[#183b3a]/70">
                            Ikanpausikanpindang merayakan cerita laut dan kuliner khas Indonesia lewat resep yang hangat, jujur, dan mudah dinikmati siapa saja.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-4" id="mulai">
                            <a href="{{ route('registrations.create') }}" class="inline-flex items-center gap-2 rounded-full bg-[#183b3a] px-6 py-3.5 font-semibold text-white transition hover:bg-[#285957]">
                                Daftar sekarang
                                <span aria-hidden="true">→</span>
                            </a>
                            <a href="#cerita" class="inline-flex items-center rounded-full border border-[#183b3a]/20 px-6 py-3.5 font-semibold transition hover:border-[#d96c3f] hover:text-[#d96c3f]">
                                Baca cerita kami
                            </a>
                        </div>
                    </div>

                    <div class="relative mx-auto w-full max-w-xl">
                        <div class="absolute -right-4 -top-4 h-32 w-32 rounded-full bg-[#e6a84d]/50 blur-2xl"></div>
                        <div class="relative overflow-hidden rounded-[2rem] bg-[#183b3a] p-5 shadow-2xl shadow-[#183b3a]/20">
                            <div class="flex aspect-[4/5] flex-col justify-between rounded-[1.5rem] border border-white/15 bg-gradient-to-br from-[#286765] via-[#183b3a] to-[#102b2b] p-7 text-white">
                                <div class="flex items-start justify-between">
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs uppercase tracking-widest text-white/70">Sejak dari dulu</span>
                                    <span class="text-3xl" aria-hidden="true">✦</span>
                                </div>
                                <div>
                                    <div class="mb-5 text-7xl" aria-hidden="true">🐟</div>
                                    <p class="font-serif text-4xl leading-tight">Laut punya banyak cerita. Kami menyajikannya.</p>
                                </div>
                                <div class="flex items-center justify-between border-t border-white/20 pt-4 text-sm text-white/60">
                                    <span>Rasa lokal</span>
                                    <span>01 / 03</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cerita" class="bg-[#e6a84d]">
                <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-2 lg:items-center lg:px-8">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#183b3a]/60">Cerita kami</p>
                        <h2 class="mt-4 max-w-lg font-serif text-4xl font-bold leading-tight text-[#183b3a] sm:text-5xl">
                            Bukan sekadar hidangan, tapi rasa yang mengingatkan.
                        </h2>
                    </div>
                    <div class="space-y-5 text-lg leading-8 text-[#183b3a]/75">
                        <p>
                            Kami percaya masakan yang baik selalu membawa cerita: tentang kampung halaman, tangan yang menyiapkan, dan orang-orang yang berkumpul di sekelilingnya.
                        </p>
                        <p>
                            Di sini, tradisi bertemu cara baru untuk menikmati kekayaan laut Indonesia.
                        </p>
                    </div>
                </div>
            </section>

            <section id="rasa" class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#d96c3f]">Rasa pilihan</p>
                        <h2 class="mt-3 font-serif text-4xl font-bold text-[#183b3a] sm:text-5xl">Yang selalu dirindukan.</h2>
                    </div>
                    <p class="max-w-sm text-[#183b3a]/60">Tiga alasan untuk kembali ke meja makan dan berbagi lebih lama.</p>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    <article class="rounded-3xl bg-[#183b3a] p-7 text-white">
                        <span class="text-4xl" aria-hidden="true">🌊</span>
                        <h3 class="mt-10 font-serif text-2xl font-bold">Segar dari sumbernya</h3>
                        <p class="mt-3 leading-7 text-white/65">Memilih bahan dengan perhatian supaya rasa lautnya tetap terasa.</p>
                    </article>
                    <article class="rounded-3xl bg-[#f0dfc0] p-7 text-[#183b3a]">
                        <span class="text-4xl" aria-hidden="true">🥣</span>
                        <h3 class="mt-10 font-serif text-2xl font-bold">Resep penuh cerita</h3>
                        <p class="mt-3 leading-7 text-[#183b3a]/65">Terinspirasi dari dapur rumahan dan kearifan lokal di setiap pesisir.</p>
                    </article>
                    <article class="rounded-3xl bg-[#d96c3f] p-7 text-white">
                        <span class="text-4xl" aria-hidden="true">🤝</span>
                        <h3 class="mt-10 font-serif text-2xl font-bold">Dibuat untuk berbagi</h3>
                        <p class="mt-3 leading-7 text-white/70">Karena makanan terbaik adalah yang membuat kita duduk lebih dekat.</p>
                    </article>
                </div>
            </section>

            <section id="nilai" class="border-y border-[#183b3a]/10 bg-white/40">
                <div class="mx-auto max-w-7xl px-6 py-16 text-center lg:px-8">
                    <p class="mx-auto max-w-2xl font-serif text-3xl font-bold leading-tight text-[#183b3a] sm:text-4xl">
                        “Setiap suapan adalah perjalanan kecil menuju rumah.”
                    </p>
                    <p class="mt-5 text-sm font-semibold uppercase tracking-[0.2em] text-[#d96c3f]">Ikanpausikanpindang</p>
                </div>
            </section>
        </main>

        <footer class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm text-[#183b3a]/60 sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <p>© {{ date('Y') }} {{ config('app.name', 'Ikanpausikanpindang') }}.</p>
            <a href="#beranda" class="font-semibold text-[#183b3a] transition hover:text-[#d96c3f]">Kembali ke atas ↑</a>
        </footer>
    </body>
</html>
