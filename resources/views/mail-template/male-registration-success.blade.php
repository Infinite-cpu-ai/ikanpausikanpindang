<!DOCTYPE html>
<html lang="id">
    <body style="margin: 0; background: #e9fbff; color: #032744; font-family: Arial, sans-serif; line-height: 1.6;">
        <div style="max-width: 600px; margin: 0 auto; padding: 32px 20px;">
            <div style="background: #031c35; border-radius: 20px 20px 0 0; padding: 28px; color: #ffffff;">
                <p style="margin: 0 0 8px; color: #63d8f2; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">
                    Ikanpausikanpindang
                </p>
                <h1 style="margin: 0; font-size: 28px;">Sampai jumpa di Laut Bercerita!</h1>
            </div>
            <div style="background: #ffffff; border-radius: 0 0 20px 20px; padding: 28px;">
                <p>Halo, <strong>{{ $registration['name'] }}</strong>.</p>
                <p>Terima kasih sudah mendaftar. Data kamu sudah kami terima dan tempatmu di festival laut Laut Bercerita 2026 sudah tercatat.</p>

                <div style="margin: 24px 0; border-left: 4px solid #0b86a4; padding: 4px 0 4px 16px;">
                    <p style="margin: 0 0 6px;"><strong>Acara:</strong> Laut Bercerita 2026</p>
                    <p style="margin: 0 0 6px;"><strong>Waktu:</strong> 14–15 Juni 2026, 08.00–21.00 WIB</p>
                    <p style="margin: 0 0 6px;"><strong>Lokasi:</strong> Pantai Tanjung Biru</p>
                    <p style="margin: 0 0 6px;"><strong>Email:</strong> {{ $registration['email'] }}</p>
                    <p style="margin: 0 0 6px;"><strong>No. telepon:</strong> {{ $registration['phone'] }}</p>
                    <p style="margin: 6px 0 0;"><strong>Jenis kelamin:</strong> {{ $registration['gender'] === 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>

                <p><strong>Jadwal yang dipilih:</strong></p>
                <ul style="padding-left: 20px;">
                    @foreach ($registration['schedule'] as $schedule)
                        <li>
                            @switch($schedule)
                                @case('saturday-morning') Sabtu, 08.00 — Registrasi & sarapan pesisir @break
                                @case('saturday-evening') Sabtu, 16.30 — Sunset acoustic & cerita nelayan @break
                                @case('saturday-night') Sabtu, 19.00 — Malam kuliner laut nusantara @break
                                @case('sunday-morning') Minggu, 07.00 — Beach clean-up bersama @break
                                @case('sunday-day') Minggu, 10.00 — Workshop fotografi bawah air @break
                                @case('sunday-closing') Minggu, 17.00 — Penutupan & pelepasan tukik @break
                            @endswitch
                        </li>
                    @endforeach
                </ul>
                @if (filled($registration['notes']))
                    <p><strong>Catatan:</strong><br>{{ $registration['notes'] }}</p>
                @endif
                <p style="margin-bottom: 0;">Simpan email ini sebagai bukti pendaftaran. Kami akan menghubungi kamu jika ada informasi berikutnya.</p>
            </div>
            <p style="margin: 20px 0 0; color: #03274499; font-size: 12px; text-align: center;">
                Email ini dikirim otomatis, mohon tidak membalas email ini.
            </p>
        </div>
    </body>
</html>
