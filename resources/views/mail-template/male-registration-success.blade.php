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
                    <p style="margin: 0 0 6px;"><strong>Acara:</strong> {{ config('event.name') }}</p>
                    <p style="margin: 0 0 6px;"><strong>Waktu:</strong> {{ config('event.date_range') }}</p>
                    <p style="margin: 0 0 6px;"><strong>Lokasi:</strong> {{ config('event.location') }}</p>
                    <p style="margin: 0 0 6px;"><strong>Email:</strong> {{ $registration['email'] }}</p>
                    <p style="margin: 0 0 6px;"><strong>No. telepon:</strong> {{ $registration['phone'] }}</p>
                    <p style="margin: 6px 0 0;"><strong>Jenis kelamin:</strong> {{ $registration['gender'] === 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>

                <p><strong>Jadwal yang dipilih:</strong></p>
                <ul style="padding-left: 20px;">
                    @foreach ($registration['schedule'] as $schedule)
                        <li>
                            {{ config("event.schedules.{$schedule}.day") }} ·
                            {{ config("event.schedules.{$schedule}.time") }} —
                            {{ config("event.schedules.{$schedule}.title") }}
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
