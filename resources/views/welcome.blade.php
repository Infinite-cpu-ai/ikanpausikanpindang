<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Laut Bercerita 2026 - festival laut, budaya pesisir, dan konservasi bersama Ikanpausikanpindang.">
        <title>Laut Bercerita 2026 - {{ config('app.name', 'Ikanpausikanpindang') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#031c35] text-white antialiased">
        <header class="absolute inset-x-0 top-0 z-30 border-b border-white/10 bg-[#031c35]/30 backdrop-blur-md">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8" aria-label="Navigasi utama">
                <a href="#beranda" class="flex items-center gap-3 font-serif text-xl font-bold tracking-tight">
                    <img src="{{ asset('images/ikanpausikanpindang-mascot.jpeg') }}" alt="Maskot Ikanpausikanpindang" class="h-11 w-11 rounded-full border border-[#63d8f2]/60 object-cover">
                    <span>ikanpaus<span class="text-[#63d8f2]">ikanpindang</span></span>
                </a>
                <div class="flex items-center gap-6 text-sm font-semibold text-white/75">
                    <a href="#acara" class="hidden transition hover:text-[#63d8f2] sm:block">Tentang acara</a>
                    <a href="#jadwal" class="hidden transition hover:text-[#63d8f2] sm:block">Jadwal</a>
                    <a href="{{ route('registrations.create') }}" class="rounded-full bg-[#f7c95c] px-4 py-2 text-[#032744] transition hover:bg-[#ffe18d]">Daftar</a>
                </div>
            </nav>
        </header>

        <main>
            <section id="beranda" class="relative isolate min-h-[720px] overflow-hidden bg-gradient-to-b from-[#031c35] via-[#06466a] to-[#0b86a4]">
                <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 20% 20%, #8deaff 0 1px, transparent 1px), radial-gradient(circle at 80% 60%, #8deaff 0 1px, transparent 1px); background-size: 80px 80px, 120px 120px;"></div>
                <div class="bubble absolute bottom-16 left-[12%] h-3 w-3 rounded-full border border-white/60"></div>
                <div class="bubble bubble-delay-1 absolute bottom-20 left-[28%] h-5 w-5 rounded-full border border-white/50"></div>
                <div class="bubble bubble-delay-2 absolute bottom-10 left-[66%] h-4 w-4 rounded-full border border-white/50"></div>
                <div class="bubble bubble-delay-3 absolute bottom-24 right-[12%] h-2 w-2 rounded-full border border-white/70"></div>

                <div class="relative mx-auto grid max-w-7xl gap-12 px-6 pb-36 pt-40 lg:grid-cols-[1.1fr_.9fr] lg:items-center lg:px-8">
                    <div class="max-w-3xl">
                        <p class="mb-6 inline-flex rounded-full border border-[#63d8f2]/40 bg-[#63d8f2]/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.25em] text-[#a6f0ff]">
                            Festival laut & konservasi · {{ $event['date_range'] }}
                        </p>
                        <h1 class="font-serif text-5xl font-bold leading-[.98] tracking-tight sm:text-7xl">
                            Laut <span class="text-[#63d8f2]">bercerita.</span><br>
                            Kamu jadi bagiannya.
                        </h1>
                        <p class="mt-7 max-w-xl text-lg leading-8 text-white/75">
                            Tujuh hari untuk menyelam lebih dekat ke budaya pesisir, mencicipi rasa laut, dan bergerak bersama menjaga laut Indonesia.
                        </p>
                        <div class="mt-9 flex flex-wrap gap-4">
                            <a href="{{ route('registrations.create') }}" class="rounded-full bg-[#f7c95c] px-6 py-3.5 font-bold text-[#032744] transition hover:-translate-y-1 hover:bg-[#ffe18d]">Daftar acara <span aria-hidden="true">→</span></a>
                            <a href="#jadwal" class="rounded-full border border-white/25 px-6 py-3.5 font-bold text-white transition hover:border-[#63d8f2] hover:text-[#a6f0ff]">Lihat jadwal</a>
                        </div>
                    </div>

                    <div class="ocean-drift relative mx-auto w-full max-w-sm">
                        <div class="absolute -inset-8 rounded-full bg-[#63d8f2]/20 blur-3xl"></div>
                        <div class="relative rounded-[2rem] border border-white/20 bg-white/10 p-4 shadow-2xl backdrop-blur-sm">
                            <div class="flex aspect-[4/5] flex-col justify-between overflow-hidden rounded-[1.4rem] bg-gradient-to-b from-[#107da0] via-[#075273] to-[#032744] p-7">
                                <div class="flex justify-between text-xs font-bold uppercase tracking-widest text-[#a6f0ff]"><span>LB / 26</span><span>✦</span></div>
                                <div><img src="{{ asset('images/ikanpausikanpindang-mascot.jpeg') }}" alt="Maskot Ikanpausikanpindang" class="mx-auto mb-5 h-52 w-52 rounded-full border-4 border-[#a6f0ff]/80 object-cover shadow-xl"><p class="font-serif text-4xl font-bold leading-tight">Temui laut dari sisi yang berbeda.</p></div>
                                <div class="border-t border-white/20 pt-4 text-sm text-white/65">{{ $event['location'] }}<br>{{ $event['date_range'] }} · 08.00–21.00 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 flex w-[200%] text-[#e9fbff] wave-slide" aria-hidden="true">
                    <svg class="h-28 w-1/2 shrink-0" viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="currentColor" d="M0 64c120-50 240-50 360 0s240 50 360 0 240-50 360 0 240 50 360 0v56H0z"/></svg>
                    <svg class="h-28 w-1/2 shrink-0" viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="currentColor" d="M0 64c120-50 240-50 360 0s240 50 360 0 240-50 360 0 240 50 360 0v56H0z"/></svg>
                </div>
            </section>

            <section id="acara" class="bg-[#e9fbff] py-20 text-[#032744] lg:py-28">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[.8fr_1.2fr] lg:items-end">
                        <div><p class="text-sm font-bold uppercase tracking-[0.25em] text-[#0b86a4]">Tentang acara</p><h2 class="mt-4 font-serif text-4xl font-bold leading-tight sm:text-5xl">Satu akhir pekan. Banyak cerita.</h2></div>
                        <p class="max-w-2xl text-lg leading-8 text-[#032744]/65">Laut Bercerita adalah ruang temu untuk siapa pun yang ingin mengenal laut lebih dekat. Ikuti lokakarya, pertunjukan, jelajah kuliner, dan aksi nyata bersama komunitas pesisir.</p>
                    </div>
                    <div class="mt-12 grid gap-5 md:grid-cols-3">
                        <article class="rounded-3xl bg-white p-7 shadow-lg shadow-[#0b86a4]/10"><span class="text-4xl" aria-hidden="true">🤿</span><h3 class="mt-8 font-serif text-2xl font-bold">Jelajah bawah laut</h3><p class="mt-3 leading-7 text-[#032744]/60">Kenali ekosistem terumbu karang bersama penyelam dan pegiat konservasi.</p></article>
                        <article class="rounded-3xl bg-[#bceff8] p-7"><span class="text-4xl" aria-hidden="true">🎶</span><h3 class="mt-8 font-serif text-2xl font-bold">Senja di pesisir</h3><p class="mt-3 leading-7 text-[#032744]/60">Nikmati musik, cerita nelayan, dan langit senja dengan komunitas baru.</p></article>
                        <article class="rounded-3xl bg-[#06385a] p-7 text-white"><span class="text-4xl" aria-hidden="true">♻️</span><h3 class="mt-8 font-serif text-2xl font-bold">Aksi biru</h3><p class="mt-3 leading-7 text-white/65">Bawa pulang kebiasaan kecil yang berdampak besar untuk laut kita.</p></article>
                    </div>
                </div>
            </section>

            <section id="jadwal" class="bg-[#06385a] py-20 lg:py-28">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><p class="text-sm font-bold uppercase tracking-[0.25em] text-[#63d8f2]">Agenda utama</p><h2 class="mt-4 font-serif text-4xl font-bold sm:text-5xl">Ikuti alirannya.</h2></div><p class="max-w-sm text-white/60">Pilih kegiatan favoritmu, lalu amankan tempat sebelum penuh.</p></div>
                    <div class="mt-12 grid gap-5 lg:grid-cols-2">
                        @foreach ($event['schedules'] as $index => $schedule)
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-7">
                                <div class="flex items-center justify-between border-b border-white/10 pb-5">
                                    <div><p class="text-sm text-[#63d8f2]">{{ $schedule['day'] }}</p><p class="mt-1 text-2xl font-bold">{{ $schedule['time'] }} WIB</p></div>
                                    <span class="rounded-full bg-[#63d8f2] px-3 py-1 text-xs font-bold text-[#032744]">HARI {{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                                <div class="pt-5"><h3 class="font-bold">{{ $schedule['title'] }}</h3><p class="mt-1 text-sm text-white/55">{{ $event['location'] }}</p></div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="bg-[#bceff8] px-6 py-20 text-center text-[#032744] lg:py-28">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#0b86a4]">Amankan tempatmu</p>
                <h2 class="mx-auto mt-4 max-w-2xl font-serif text-4xl font-bold leading-tight sm:text-5xl">Siap ikut arus?</h2>
                <p class="mx-auto mt-5 max-w-xl leading-7 text-[#032744]/65">Daftar sekarang dan dapatkan konfirmasi acara langsung di email kamu.</p>
                <a href="{{ route('registrations.create') }}" class="mt-8 inline-flex rounded-full bg-[#032744] px-7 py-3.5 font-bold text-white transition hover:-translate-y-1 hover:bg-[#075273]">Isi formulir registrasi →</a>
            </section>
        </main>

        <footer class="bg-[#031c35] px-6 py-8 text-center text-sm text-white/55"><p>© {{ date('Y') }} Ikanpausikanpindang · Laut Bercerita 2026</p></footer>
    </body>
</html>
