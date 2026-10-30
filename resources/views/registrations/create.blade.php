<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Form pendaftaran Ikanpausikanpindang.">
        <title>Pendaftaran - {{ config('app.name', 'Ikanpausikanpindang') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f7f4ed] text-[#183b3a] antialiased">
        <header class="border-b border-[#183b3a]/10">
            <nav class="mx-auto flex max-w-5xl items-center justify-between px-6 py-5 lg:px-8" aria-label="Navigasi utama">
                <a href="{{ route('home') }}" class="font-serif text-xl font-bold tracking-tight">
                    ikanpaus<span class="text-[#d96c3f]">ikanpindang</span>
                </a>
                <a href="{{ route('home') }}" class="text-sm font-semibold text-[#183b3a]/70 transition hover:text-[#d96c3f]">Kembali ke beranda</a>
            </nav>
        </header>

        <main class="mx-auto max-w-5xl px-6 py-12 lg:px-8 lg:py-20">
            <div class="mx-auto max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#d96c3f]">Form pendaftaran</p>
                <h1 class="mt-3 font-serif text-4xl font-bold leading-tight sm:text-5xl">Mari bergabung dalam cerita kami.</h1>
                <p class="mt-5 text-lg leading-8 text-[#183b3a]/65">Isi data dengan benar. Setelah dikirim, konfirmasi akan dikirim ke alamat email kamu.</p>

                @if (session('registration_submitted'))
                    <div class="mt-8 rounded-2xl border border-[#286765]/20 bg-[#e6a84d]/30 p-5" role="status">
                        <p class="font-semibold">Pendaftaran berhasil dikirim.</p>
                        <p class="mt-1 text-sm text-[#183b3a]/70">Silakan cek inbox email untuk konfirmasi pendaftaran.</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mt-8 rounded-2xl border border-red-300 bg-red-50 p-5 text-red-800" role="alert">
                        <p class="font-semibold">Periksa kembali data berikut:</p>
                        <ul class="mt-2 list-inside list-disc text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('registrations.store') }}" class="mt-10 space-y-6">
                    @csrf
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-semibold">Nama lengkap</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="120" autocomplete="name" class="mt-2 block w-full rounded-xl border border-[#183b3a]/15 bg-white px-4 py-3 outline-none transition focus:border-[#d96c3f] focus:ring-2 focus:ring-[#d96c3f]/20">
                            @error('name') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="255" autocomplete="email" class="mt-2 block w-full rounded-xl border border-[#183b3a]/15 bg-white px-4 py-3 outline-none transition focus:border-[#d96c3f] focus:ring-2 focus:ring-[#d96c3f]/20">
                            @error('email') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold">Nomor telepon</label>
                            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required maxlength="30" autocomplete="tel" class="mt-2 block w-full rounded-xl border border-[#183b3a]/15 bg-white px-4 py-3 outline-none transition focus:border-[#d96c3f] focus:ring-2 focus:ring-[#d96c3f]/20">
                            @error('phone') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="birth_date" class="block text-sm font-semibold">Tanggal lahir</label>
                            <input id="birth_date" name="birth_date" type="date" value="{{ old('birth_date') }}" max="{{ now()->subDay()->toDateString() }}" required>
                            @error('birth_date') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <fieldset>
                        <legend class="text-sm font-semibold">Jenis kelamin</legend>
                        <div class="mt-3 flex gap-6">
                            <label class="flex items-center gap-2 text-sm"><input type="radio" name="gender" value="male" @checked(old('gender') === 'male') required> Laki-laki</label>
                            <label class="flex items-center gap-2 text-sm"><input type="radio" name="gender" value="female" @checked(old('gender') === 'female')> Perempuan</label>
                        </div>
                        @error('gender') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                    </fieldset>

                    <div>
                        <label for="address" class="block text-sm font-semibold">Alamat</label>
                        <textarea id="address" name="address" rows="3" required maxlength="500" autocomplete="street-address" class="mt-2 block w-full rounded-xl border border-[#183b3a]/15 bg-white px-4 py-3 outline-none transition focus:border-[#d96c3f] focus:ring-2 focus:ring-[#d96c3f]/20">{{ old('address') }}</textarea>
                        @error('address') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="notes" class="block text-sm font-semibold">Catatan <span class="font-normal text-[#183b3a]/50">(opsional)</span></label>
                        <textarea id="notes" name="notes" rows="3" maxlength="1000" class="mt-2 block w-full rounded-xl border border-[#183b3a]/15 bg-white px-4 py-3 outline-none transition focus:border-[#d96c3f] focus:ring-2 focus:ring-[#d96c3f]/20">{{ old('notes') }}</textarea>
                        @error('notes') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>

                    <label class="flex items-start gap-3 text-sm text-[#183b3a]/75">
                        <input type="checkbox" name="agree" value="1" @checked(old('agree')) required class="mt-1">
                        <span>Saya menyatakan data yang diisi benar dan menyetujui data ini digunakan untuk keperluan pendaftaran.</span>
                    </label>
                    @error('agree') <p class="-mt-4 text-sm text-red-700">{{ $message }}</p> @enderror

                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-[#d96c3f] px-6 py-3.5 font-semibold text-white transition hover:bg-[#b9532c] sm:w-auto">
                        Kirim pendaftaran
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>
