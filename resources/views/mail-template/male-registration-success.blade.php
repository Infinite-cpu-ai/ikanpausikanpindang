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
                            <td style="overflow: hidden; border-radius: 24px; background: #031c35;">
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td style="padding: 42px 38px; background: linear-gradient(135deg, #031c35 0%, #075273 62%, #0b86a4 100%);">
                                            <p style="margin: 0 0 14px; color: #f7c95c; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">Registrasi terkonfirmasi</p>
                                            <h1 class="hero-title" style="margin: 0; color: #ffffff; font-size: 40px; line-height: 1.1;">Pendaftaran berhasil!</h1>
                                            <p style="margin: 16px 0 0; color: #d9faff; font-size: 16px; line-height: 1.6;">Tiket invitation kamu sudah siap untuk {{ config('event.name') }}.</p>
                                        </td>
                                    </tr>
                                </table>
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background: #082f4d;">
                                    <tr>
                                        <td class="email-pad" style="padding: 34px 38px 38px;">
                                            <p style="margin: 0 0 8px; color: #d9faff; font-size: 18px; font-weight: bold;">Halo, {{ $registration['name'] }}!</p>
                                            <p style="margin: 0; color: #a9c2cf; font-size: 15px; line-height: 1.7;">Data pendaftaranmu sudah kami terima. Simpan tiket ini sebagai bukti kehadiran.</p>

                                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 26px; border: 2px solid #f7c95c; border-radius: 18px; background: #0b5273;">
                                                <tr>
                                                    <td style="padding: 24px;">
                                                        <p style="margin: 0; color: #f7c95c; font-size: 11px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">Kode tiket invitation</p>
                                                        <p style="margin: 10px 0 0; color: #ffffff; font-family: monospace; font-size: 30px; font-weight: bold; letter-spacing: 4px;">{{ $registration['ticket_code'] }}</p>
                                                        <p style="margin: 10px 0 0; color: #c4e5ed; font-size: 13px;">Tunjukkan kode ini saat registrasi ulang.</p>
                                                    </td>
                                                </tr>
                                            </table>

                                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 18px;">
                                                <tr>
                                                    <td style="width: 33%; padding: 15px; border-radius: 12px; background: #1d5271; color: #ffffff; font-size: 13px; line-height: 1.5;"><span style="color: #63d8f2; font-size: 10px; font-weight: bold; text-transform: uppercase;">Acara</span><br><strong>{{ config('event.name') }}</strong></td>
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 33%; padding: 15px; border-radius: 12px; background: #1d5271; color: #ffffff; font-size: 13px; line-height: 1.5;"><span style="color: #63d8f2; font-size: 10px; font-weight: bold; text-transform: uppercase;">Tanggal</span><br><strong>{{ config('event.date_range') }}</strong></td>
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 33%; padding: 15px; border-radius: 12px; background: #1d5271; color: #ffffff; font-size: 13px; line-height: 1.5;"><span style="color: #63d8f2; font-size: 10px; font-weight: bold; text-transform: uppercase;">Lokasi</span><br><strong>{{ config('event.location') }}</strong></td>
                                                </tr>
                                            </table>

                                            <h2 style="margin: 32px 0 12px; color: #ffffff; font-size: 22px;">Jadwal pilihanmu</h2>
                                            <p style="margin: 0 0 15px; color: #a9c2cf; font-size: 14px; line-height: 1.5;">{{ count($registration['schedule']) }} kegiatan sudah terdaftar untukmu.</p>
                                            @foreach ($registration['schedule'] as $schedule)
                                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 10px; border: 1px solid #3d6c84; border-radius: 14px; background: #1d5271;">
                                                    <tr>
                                                        <td class="schedule-cell" width="155" style="padding: 17px; vertical-align: top; color: #63d8f2; font-size: 13px; font-weight: bold; line-height: 1.5;">
                                                            {{ config("event.schedules.{$schedule}.day") }}<br>
                                                            <span style="color: #ffffff; font-size: 15px;">{{ config("event.schedules.{$schedule}.time") }} WIB</span>
                                                        </td>
                                                        <td class="schedule-cell" style="padding: 17px 17px 17px 0; vertical-align: top; color: #ffffff; font-size: 14px; line-height: 1.5;">
                                                            <strong>{{ config("event.schedules.{$schedule}.title") }}</strong><br>
                                                            <span style="color: #b6d0da;">{{ config('event.location') }}</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endforeach

                                            @if (filled($registration['notes']))
                                                <p style="margin: 22px 0 0; border-left: 4px solid #f7c95c; padding: 12px 16px; background: #315d72; color: #d9faff; font-size: 14px; line-height: 1.5;"><strong>Catatanmu</strong><br>{{ $registration['notes'] }}</p>
                                            @endif

                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 30px auto 0;">
                                                <tr>
                                                    <td style="border-radius: 999px; background: #f7c95c;">
                                                        <a href="{{ route('registrations.ticket', ['ticketCode' => $registration['ticket_code']]) }}" style="display: inline-block; padding: 15px 26px; color: #032744; font-size: 14px; font-weight: bold; text-decoration: none;">Buka tiket invitation</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
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
                </td>
            </tr>
        </table>
    </body>
</html>
