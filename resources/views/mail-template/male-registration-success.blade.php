<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran berhasil - {{ config('event.name') }}</title>
        <style>
            @media only screen and (max-width: 620px) {
                .email-shell { width: 100% !important; }
                .email-pad { padding: 28px 20px !important; }
                .hero-title { font-size: 30px !important; line-height: 1.15 !important; }
                .mobile-stack { display: block !important; width: 100% !important; }
                .schedule-cell { padding: 14px !important; }
            }
        </style>
    </head>
    <body style="margin: 0; min-width: 100%; background: #e7f7fb; color: #082f4d; font-family: Arial, Helvetica, sans-serif;">
        <div style="display: none; max-height: 0; overflow: hidden; opacity: 0;">
            Pendaftaran kamu untuk {{ config('event.name') }} berhasil dikonfirmasi.
        </div>

        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background: #e7f7fb;">
            <tr>
                <td align="center" style="padding: 34px 14px;">
                    <table role="presentation" class="email-shell" width="600" cellspacing="0" cellpadding="0" border="0" style="width: 600px; max-width: 600px;">
                        <tr>
                            <td style="padding: 0 0 16px 4px; color: #0b6580; font-size: 13px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">
                                Ikanpausikanpindang
                            </td>
                        </tr>
                        <tr>
                            <td style="overflow: hidden; border-radius: 24px 24px 0 0; background: #031c35;">
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td style="padding: 32px 38px 36px; background: linear-gradient(135deg, #031c35 0%, #075273 62%, #0b86a4 100%);">
                                            <div style="display: inline-block; margin-bottom: 24px; border: 2px solid #a6f0ff; border-radius: 999px; padding: 14px 20px; color: #d9faff; font-size: 16px; font-weight: bold; letter-spacing: 1px;">IKANPAUS<br><span style="color: #f7c95c;">IKANPINDANG</span></div>
                                            <p style="margin: 0 0 12px; color: #f7c95c; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">Registrasi terkonfirmasi</p>
                                            <h1 class="hero-title" style="margin: 0; color: #ffffff; font-size: 38px; line-height: 1.1;">Sampai jumpa di laut.</h1>
                                            <p style="margin: 16px 0 0; color: #d9faff; font-size: 16px; line-height: 1.6;">Tempatmu sudah aman untuk pengalaman pesisir yang penuh cerita.</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="email-pad" style="padding: 34px 38px 38px; background: #ffffff;">
                                <p style="margin: 0 0 8px; color: #082f4d; font-size: 18px; font-weight: bold;">Halo, {{ $registration['name'] }}! 👋</p>
                                <p style="margin: 0; color: #557084; font-size: 15px; line-height: 1.7;">Terima kasih sudah mendaftar. Data kamu telah kami terima dan pendaftaranmu untuk <strong style="color: #0b6580;">{{ config('event.name') }}</strong> berhasil.</p>

                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 26px; border: 1px solid #c9edf4; border-radius: 16px; background: #f1fcfe;">
                                    <tr>
                                        <td style="padding: 20px;">
                                            <p style="margin: 0 0 14px; color: #0b6580; font-size: 12px; font-weight: bold; letter-spacing: 1.5px; text-transform: uppercase;">Detail acara</p>
                                            <p style="margin: 0 0 9px; color: #082f4d; font-size: 14px; line-height: 1.5;"><strong>Acara</strong><br>{{ config('event.name') }}</p>
                                            <p style="margin: 0 0 9px; color: #082f4d; font-size: 14px; line-height: 1.5;"><strong>Waktu</strong><br>{{ config('event.date_range') }}</p>
                                            <p style="margin: 0; color: #082f4d; font-size: 14px; line-height: 1.5;"><strong>Lokasi</strong><br>{{ config('event.location') }}</p>
                                        </td>
                                    </tr>
                                </table>

                                <h2 style="margin: 32px 0 12px; color: #082f4d; font-size: 20px;">Agenda pilihanmu</h2>
                                <p style="margin: 0 0 15px; color: #718696; font-size: 14px; line-height: 1.5;">Simpan daftar ini agar tidak melewatkan kegiatan favoritmu.</p>
                                @foreach ($registration['schedule'] as $schedule)
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 10px; border: 1px solid #d6e8ed; border-radius: 14px; background: #ffffff;">
                                        <tr>
                                            <td class="schedule-cell" width="150" style="padding: 17px; vertical-align: top; color: #0b86a4; font-size: 13px; font-weight: bold; line-height: 1.5;">
                                                {{ config("event.schedules.{$schedule}.day") }}<br>
                                                <span style="color: #082f4d; font-size: 15px;">{{ config("event.schedules.{$schedule}.time") }} WIB</span>
                                            </td>
                                            <td class="schedule-cell" style="padding: 15px 15px 15px 0; vertical-align: top; color: #557084; font-size: 14px; line-height: 1.5;">
                                                <strong style="color: #082f4d;">{{ config("event.schedules.{$schedule}.title") }}</strong><br>
                                                {{ config('event.location') }}
                                            </td>
                                        </tr>
                                    </table>
                                @endforeach

                                @if (filled($registration['notes']))
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 22px; border-left: 4px solid #f7c95c; background: #fff9e8;">
                                        <tr>
                                            <td style="padding: 13px 16px; color: #6b5a2c; font-size: 14px; line-height: 1.5;"><strong>Catatanmu</strong><br>{{ $registration['notes'] }}</td>
                                        </tr>
                                    </table>
                                @endif

                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 30px; border-top: 1px solid #e4eef1;">
                                    <tr>
                                        <td style="padding-top: 24px; color: #557084; font-size: 14px; line-height: 1.7;">
                                            <strong style="color: #082f4d;">Simpan email ini sebagai bukti pendaftaran.</strong><br>
                                            Jika ada perubahan jadwal atau informasi penting, panitia akan menghubungimu melalui email ini.
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-radius: 0 0 24px 24px; background: #031c35; padding: 26px 38px; text-align: center;">
                                <p style="margin: 0 0 8px; color: #a6f0ff; font-size: 13px; font-weight: bold;">Laut bercerita. Kamu jadi bagiannya.</p>
                                <p style="margin: 0; color: #8ca4b2; font-size: 12px; line-height: 1.6;">Email ini dikirim otomatis oleh {{ config('app.name', 'Ikanpausikanpindang') }}.<br>Mohon tidak membalas email ini.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
