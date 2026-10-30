<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Form registrasi Laut Bercerita 2026 bersama Ikanpausikanpindang.">
        <title>Daftar Laut Bercerita 2026 - {{ config('app.name', 'Ikanpausikanpindang') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-gradient-to-b from-[#031c35] via-[#06466a] to-[#e9fbff] text-white antialiased">
        <header class="relative z-30 border-b border-white/10 bg-[#031c35]/80 backdrop-blur-md">
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

        <main class="relative px-6 py-14 sm:py-20 lg:px-8">
            <div class="bubble absolute left-[14%] top-24 h-4 w-4 rounded-full border border-white/60"></div>
            <div class="bubble bubble-delay-1 absolute right-[18%] top-48 h-3 w-3 rounded-full border border-white/60"></div>
            <div class="bubble bubble-delay-2 absolute bottom-28 left-[30%] h-5 w-5 rounded-full border border-white/50"></div>

            <div class="relative mx-auto max-w-3xl">
                <div class="text-center">
                    <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#a6f0ff]">Registrasi peserta</p>
                    <h1 class="mt-4 font-serif text-4xl font-bold leading-tight sm:text-6xl">Amankan tempatmu di Laut Bercerita.</h1>
                    <p class="mx-auto mt-5 max-w-xl text-lg leading-8 text-white/70">Isi data berikut untuk ikut festival laut, budaya pesisir, dan konservasi pada 14–15 Juni 2026 di Pantai Tanjung Biru.</p>
                </div>

                <div class="mt-12 rounded-[2rem] border border-white/20 bg-white p-6 text-[#032744] shadow-2xl shadow-[#031c35]/30 sm:p-10">
                    @if (session('registration_submitted'))
                        <div class="mb-8 rounded-2xl border border-[#0b86a4]/20 bg-[#bceff8] p-5" role="status">
                            <p class="font-semibold">Pendaftaran berhasil dikirim.</p>
                            <p class="mt-1 text-sm text-[#032744]/70">Silakan cek inbox email untuk konfirmasi.</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-8 rounded-2xl border border-red-300 bg-red-50 p-5 text-red-800" role="alert">
                            <p class="font-semibold">Periksa kembali data berikut:</p>
                            <ul class="mt-2 list-inside list-disc text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('registrations.store') }}" class="space-y-5">
                        @csrf
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-semibold">Nama lengkap</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="120" autocomplete="name" class="mt-2 block w-full rounded-xl border border-[#032744]/15 px-4 py-3 outline-none transition focus:border-[#0b86a4] focus:ring-2 focus:ring-[#0b86a4]/20">
                                @error('name')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="255" autocomplete="email" class="mt-2 block w-full rounded-xl border border-[#032744]/15 px-4 py-3 outline-none transition focus:border-[#0b86a4] focus:ring-2 focus:ring-[#0b86a4]/20">
                                @error('email')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold">Nomor telepon</label>
                                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required maxlength="30" autocomplete="tel" class="mt-2 block w-full rounded-xl border border-[#032744]/15 px-4 py-3 outline-none transition focus:border-[#0b86a4] focus:ring-2 focus:ring-[#0b86a4]/20">
                                @error('phone')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <fieldset>
                            <legend class="text-sm font-semibold">Jenis kelamin</legend>
                            <div class="mt-3 flex gap-6 text-sm">
                                <label class="flex items-center gap-2"><input type="radio" name="gender" value="male" @checked(old('gender') === 'male') required> Laki-laki</label>
                                <label class="flex items-center gap-2"><input type="radio" name="gender" value="female" @checked(old('gender') === 'female')> Perempuan</label>
                            </div>
                            @error('gender')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </fieldset>

                        <fieldset>
                            <legend class="text-sm font-semibold">Pilih jadwal yang ingin kamu ikuti</legend>
                            <p class="mt-1 text-sm text-[#032744]/60">Kamu bisa memilih lebih dari satu kegiatan.</p>
                            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                @foreach ([
                                    'saturday-morning' => ['Sabtu, 08.00', 'Registrasi & sarapan pesisir'],
                                    'saturday-evening' => ['Sabtu, 16.30', 'Sunset acoustic & cerita nelayan'],
                                    'saturday-night' => ['Sabtu, 19.00', 'Malam kuliner laut nusantara'],
                                    'sunday-morning' => ['Minggu, 07.00', 'Beach clean-up bersama'],
                                    'sunday-day' => ['Minggu, 10.00', 'Workshop fotografi bawah air'],
                                    'sunday-closing' => ['Minggu, 17.00', 'Penutupan & pelepasan tukik'],
                                ] as $value => [$time, $activity])
                                    <label class="flex cursor-pointer items-start gap-3 rounded-xl border border-[#032744]/15 p-4 transition hover:border-[#0b86a4] has-[:checked]:border-[#0b86a4] has-[:checked]:bg-[#e9fbff]">
                                        <input type="checkbox" name="schedule[]" value="{{ $value }}" @checked(in_array($value, old('schedule', []), true)) class="mt-1">
                                        <span><strong class="block text-sm">{{ $time }}</strong><span class="mt-1 block text-sm text-[#032744]/65">{{ $activity }}</span></span>
                                    </label>
                                @endforeach
                            </div>
                            @error('schedule')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                            @error('schedule.*')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </fieldset>

                        <div>
                            <label for="notes" class="block text-sm font-semibold">Catatan <span class="font-normal text-[#032744]/50">(opsional)</span></label>
                            <textarea id="notes" name="notes" rows="3" maxlength="1000" class="mt-2 block w-full rounded-xl border border-[#032744]/15 px-4 py-3 outline-none transition focus:border-[#0b86a4] focus:ring-2 focus:ring-[#0b86a4]/20">{{ old('notes') }}</textarea>
                            @error('notes')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <label class="flex items-start gap-3 text-sm text-[#032744]/70">
                            <input type="checkbox" name="agree" value="1" @checked(old('agree')) required class="mt-1">
                            <span>Saya menyatakan data yang diisi benar dan menyetujui data ini digunakan untuk pendaftaran acara.</span>
                        </label>
                        @error('agree')<p class="-mt-3 text-sm text-red-700">{{ $message }}</p>@enderror

                        <button type="submit" class="w-full rounded-full bg-[#0b86a4] px-6 py-3.5 font-bold text-white transition hover:-translate-y-0.5 hover:bg-[#076b88]">Kirim pendaftaran →</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="bg-[#031c35] px-6 py-8 text-center text-sm text-white/55"><p>© {{ date('Y') }} Ikanpausikanpindang · Laut Bercerita 2026</p></footer>
    </body>
</html>
