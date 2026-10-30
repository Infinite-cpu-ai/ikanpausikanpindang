<!DOCTYPE html>
<html lang="id">
    <body style="margin: 0; background: #f7f4ed; color: #183b3a; font-family: Arial, sans-serif; line-height: 1.6;">
        <div style="max-width: 600px; margin: 0 auto; padding: 32px 20px;">
            <div style="background: #183b3a; border-radius: 20px 20px 0 0; padding: 28px; color: #ffffff;">
                <p style="margin: 0 0 8px; color: #e6a84d; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">
                    Ikanpausikanpindang
                </p>
                <h1 style="margin: 0; font-size: 28px;">Pendaftaran berhasil!</h1>
            </div>
            <div style="background: #ffffff; border-radius: 0 0 20px 20px; padding: 28px;">
                <p>Halo, <strong>{{ $registration['name'] }}</strong>.</p>
                <p>Terima kasih sudah melakukan pendaftaran. Data kamu sudah kami terima dan akan kami proses.</p>

                <div style="margin: 24px 0; border-left: 4px solid #d96c3f; padding: 4px 0 4px 16px;">
                    <p style="margin: 0 0 6px;"><strong>Email:</strong> {{ $registration['email'] }}</p>
                    <p style="margin: 0 0 6px;"><strong>No. telepon:</strong> {{ $registration['phone'] }}</p>
                    <p style="margin: 0;"><strong>Tanggal lahir:</strong> {{ \Illuminate\Support\Carbon::parse($registration['birth_date'])->translatedFormat('d F Y') }}</p>
                    <p style="margin: 6px 0 0;"><strong>Jenis kelamin:</strong> {{ $registration['gender'] === 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>

                <p><strong>Alamat pendaftaran:</strong><br>{{ $registration['address'] }}</p>
                @if (filled($registration['notes']))
                    <p><strong>Catatan:</strong><br>{{ $registration['notes'] }}</p>
                @endif
                <p style="margin-bottom: 0;">Simpan email ini sebagai bukti pendaftaran. Kami akan menghubungi kamu jika ada informasi berikutnya.</p>
            </div>
            <p style="margin: 20px 0 0; color: #183b3a99; font-size: 12px; text-align: center;">
                Email ini dikirim otomatis, mohon tidak membalas email ini.
            </p>
        </div>
    </body>
</html>
