<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Form registrasi Laut Bercerita 2026 bersama Ikanpausikanpindang.">
        <title>Daftar Laut Bercerita 2026 - {{ config('app.name', 'Ikanpausikanpindang') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#021426] text-white antialiased">
        <header class="relative z-30 border-b border-white/10 bg-[#021426]/75 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8" aria-label="Navigasi utama">
                <a href="{{ route('home') }}" class="font-serif text-xl font-bold tracking-tight">
                    ikanpaus<span class="text-[#63d8f2]">ikanpindang</span>
                </a>
                <div class="flex items-center gap-6 text-sm font-semibold text-white/75">
                    <a href="{{ route('home') }}#acara" class="hidden transition hover:text-[#63d8f2] sm:block">Tentang acara</a>
                    <a href="{{ route('home') }}#jadwal" class="hidden transition hover:text-[#63d8f2] sm:block">Jadwal</a>
                    <a href="{{ route('registrations.create') }}" class="rounded-full bg-[#f7c95c] px-4 py-2 text-[#032744]">Daftar</a>
                </div>
            </nav>
        </header>

        <main class="relative isolate overflow-hidden px-6 py-14 sm:py-20 lg:px-8">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_0%,#0b86a4_0%,transparent_32%),radial-gradient(circle_at_90%_35%,#075273_0%,transparent_34%),linear-gradient(180deg,#031c35_0%,#06385a_58%,#021426_100%)]"></div>
            <div class="ocean-glow absolute -left-24 top-28 h-72 w-72 rounded-full bg-[#63d8f2]/20 blur-3xl"></div>
            <div class="ocean-glow absolute -right-24 bottom-20 h-96 w-96 rounded-full bg-[#f7c95c]/10 blur-3xl" style="animation-delay: 2s"></div>
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 20%, #a6f0ff 0 1px, transparent 1px), radial-gradient(circle at 80% 60%, #a6f0ff 0 1px, transparent 1px); background-size: 72px 72px, 110px 110px;"></div>
            <div class="bubble absolute left-[10%] top-32 h-4 w-4 rounded-full border border-white/50"></div>
            <div class="bubble bubble-delay-1 absolute right-[16%] top-48 h-3 w-3 rounded-full border border-white/60"></div>
            <div class="bubble bubble-delay-2 absolute bottom-28 left-[27%] h-5 w-5 rounded-full border border-white/40"></div>
            <div class="bubble bubble-delay-3 absolute bottom-48 right-[30%] h-2 w-2 rounded-full border border-white/70"></div>

            <div class="relative mx-auto max-w-6xl">
                <div class="text-center">
                    <p class="inline-flex rounded-full border border-[#63d8f2]/30 bg-[#63d8f2]/10 px-4 py-2 text-sm font-bold uppercase tracking-[0.25em] text-[#a6f0ff]">Registrasi peserta</p>
                    <h1 class="mt-5 font-serif text-4xl font-bold leading-tight sm:text-6xl">Amankan tempatmu di <span class="text-[#63d8f2]">Laut Bercerita.</span></h1>
                    <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-white/70">Isi data berikut untuk ikut festival laut, budaya pesisir, dan konservasi pada {{ $event['date_range'] }} di {{ $event['location'] }}.</p>
                </div>

                <div class="relative mx-auto mt-12 max-w-4xl overflow-hidden rounded-[2rem] border border-white/20 bg-[#082f4d]/80 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl sm:p-10">
                    <div class="absolute -right-20 -top-20 h-52 w-52 rounded-full bg-[#63d8f2]/10 blur-3xl"></div>
                    @if (session('registration_submitted'))
                        @php($ticket = session('registration_ticket'))
                        <div class="relative overflow-hidden rounded-3xl border border-[#63d8f2]/30 bg-[#031c35]/75 p-6 text-[#d9faff] shadow-xl shadow-black/20 sm:p-8" role="status">
                            <div class="absolute -right-12 -top-16 h-44 w-44 rounded-full bg-[#63d8f2]/15 blur-3xl"></div>
                            <div class="relative flex flex-wrap items-start justify-between gap-5">
                                <div>
                                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#63d8f2]">✦ Tiket invitation</p>
                                    <h2 class="mt-3 font-serif text-3xl font-bold text-white">Pendaftaran berhasil!</h2>
                                    <p class="mt-2 max-w-xl text-sm leading-6 text-white/65">Tiket ini sudah dibuat dan email konfirmasi sudah dikirim ke <strong class="text-[#d9faff]">{{ $ticket['email'] }}</strong>.</p>
                                </div>
                                <div class="rounded-2xl border border-[#f7c95c]/40 bg-[#f7c95c]/10 px-4 py-3 text-right">
                                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#f7c95c]">Kode tiket</p>
                                    <p class="mt-1 font-mono text-lg font-bold tracking-wider text-white">{{ $ticket['code'] }}</p>
                                </div>
                            </div>
                            <div class="relative mt-7 grid gap-3 border-t border-white/10 pt-5 sm:grid-cols-2">
                                @foreach ($ticket['schedule'] as $schedule)
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                        <p class="text-xs font-bold text-[#63d8f2]">{{ config("event.schedules.{$schedule}.day") }} · {{ config("event.schedules.{$schedule}.time") }}</p>
                                        <p class="mt-1 text-sm font-semibold text-white">{{ config("event.schedules.{$schedule}.title") }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <p class="relative mt-5 text-xs text-white/45">Simpan kode ini dan tunjukkan saat registrasi ulang di lokasi acara.</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="relative mb-8 rounded-2xl border border-red-300/40 bg-red-400/10 p-5 text-red-100" role="alert">
                            <p class="font-semibold">Periksa kembali data berikut:</p>
                            <ul class="mt-2 list-inside list-disc text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (!session('registration_submitted'))
                    <form method="POST" action="{{ route('registrations.store') }}" class="relative space-y-7">
                        @csrf
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-[#d9faff]">Nama lengkap</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="120" autocomplete="name" placeholder="Nama sesuai identitas" class="mt-2 block w-full rounded-xl border border-white/15 bg-[#031c35]/60 px-4 py-3 text-white placeholder:text-white/35 outline-none transition focus:border-[#63d8f2] focus:ring-2 focus:ring-[#63d8f2]/20">
                                @error('name')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-[#d9faff]">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="255" autocomplete="email" placeholder="kamu@email.com" class="mt-2 block w-full rounded-xl border border-white/15 bg-[#031c35]/60 px-4 py-3 text-white placeholder:text-white/35 outline-none transition focus:border-[#63d8f2] focus:ring-2 focus:ring-[#63d8f2]/20">
                                @error('email')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-[#d9faff]">Nomor telepon</label>
                                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required maxlength="30" autocomplete="tel" placeholder="08xxxxxxxxxx" class="mt-2 block w-full rounded-xl border border-white/15 bg-[#031c35]/60 px-4 py-3 text-white placeholder:text-white/35 outline-none transition focus:border-[#63d8f2] focus:ring-2 focus:ring-[#63d8f2]/20">
                                @error('phone')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <fieldset>
                            <legend class="text-sm font-semibold text-[#d9faff]">Jenis kelamin</legend>
                            <div class="mt-3 flex gap-3 text-sm">
                                <label class="flex cursor-pointer items-center gap-2 rounded-full border border-white/15 bg-[#031c35]/50 px-4 py-2.5 transition hover:border-[#63d8f2]"><input type="radio" name="gender" value="male" @checked(old('gender') === 'male') required> Laki-laki</label>
                                <label class="flex cursor-pointer items-center gap-2 rounded-full border border-white/15 bg-[#031c35]/50 px-4 py-2.5 transition hover:border-[#63d8f2]"><input type="radio" name="gender" value="female" @checked(old('gender') === 'female')> Perempuan</label>
                            </div>
                            @error('gender')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </fieldset>

                        <fieldset>
                            <legend class="text-sm font-semibold text-[#d9faff]">Pilih jadwal yang ingin kamu ikuti</legend>
                            <p class="mt-1 text-sm text-white/55">Kamu bisa memilih lebih dari satu kegiatan.</p>
                            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                @foreach ($event['schedules'] as $value => $schedule)
                                    <label class="group flex cursor-pointer items-start gap-3 rounded-2xl border border-white/15 bg-[#031c35]/45 p-4 transition hover:-translate-y-0.5 hover:border-[#63d8f2]/70 hover:bg-[#0b5273]/50 has-[:checked]:border-[#f7c95c] has-[:checked]:bg-[#0b5273]/70">
                                        <input type="checkbox" name="schedule[]" value="{{ $value }}" @checked(in_array($value, old('schedule', []), true)) class="mt-1 accent-[#f7c95c]">
                                        <span><strong class="block text-sm text-[#d9faff]">{{ $schedule['day'] }} · {{ $schedule['time'] }}</strong><span class="mt-1 block text-sm text-white/55 transition group-hover:text-white/75">{{ $schedule['title'] }}</span></span>
                                    </label>
                                @endforeach
                            </div>
                            @error('schedule')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            @error('schedule.*')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </fieldset>

                        <div>
                            <label for="notes" class="block text-sm font-semibold text-[#d9faff]">Catatan <span class="font-normal text-white/40">(opsional)</span></label>
                            <textarea id="notes" name="notes" rows="3" maxlength="1000" placeholder="Ada kebutuhan khusus atau pesan untuk panitia?" class="mt-2 block w-full rounded-xl border border-white/15 bg-[#031c35]/60 px-4 py-3 text-white placeholder:text-white/35 outline-none transition focus:border-[#63d8f2] focus:ring-2 focus:ring-[#63d8f2]/20">{{ old('notes') }}</textarea>
                            @error('notes')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <label class="flex items-start gap-3 text-sm text-white/65">
                            <input type="checkbox" name="agree" value="1" @checked(old('agree')) required class="mt-1 accent-[#f7c95c]">
                            <span>Saya menyatakan data yang diisi benar dan menyetujui data ini digunakan untuk pendaftaran acara.</span>
                        </label>
                        @error('agree')<p class="-mt-3 text-sm text-red-700">{{ $message }}</p>@enderror

                        <button type="submit" class="w-full rounded-full bg-[#f7c95c] px-6 py-3.5 font-bold text-[#032744] shadow-lg shadow-[#f7c95c]/20 transition hover:-translate-y-1 hover:bg-[#ffe18d]">Kirim pendaftaran <span aria-hidden="true">→</span></button>
                    </form>
                    @endif
                </div>
            </div>
        </main>

        <footer class="bg-[#031c35] px-6 py-8 text-center text-sm text-white/55"><p>© {{ date('Y') }} Ikanpausikanpindang · Laut Bercerita 2026</p></footer>
    </body>
</html>
