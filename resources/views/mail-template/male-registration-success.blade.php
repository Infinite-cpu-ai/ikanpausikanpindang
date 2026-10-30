<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran berhasil - {{ config('event.name') }}</title>
        <style>
            @keyframes bubble-rise {
                0%, 100% { transform: translateY(4px); opacity: .58; }
                50% { transform: translateY(-10px); opacity: 1; }
            }
            @keyframes wave-drift {
                0%, 100% { transform: translateX(-6px) scaleY(.92); }
                50% { transform: translateX(6px) scaleY(1.08); }
            }
            @keyframes ocean-shimmer {
                0%, 100% { opacity: .78; }
                50% { opacity: 1; }
            }
            .email-bubbles td > div {
                animation: bubble-rise 3.8s ease-in-out infinite;
            }
            .email-bubbles td:nth-child(2) > div { animation-delay: .35s; }
            .email-bubbles td:nth-child(3) > div { animation-delay: .7s; }
            .email-bubbles td:nth-child(4) > div { animation-delay: 1.05s; }
            .email-bubbles td:nth-child(5) > div { animation-delay: 1.4s; }
            .email-wave {
                animation: wave-drift 5s ease-in-out infinite;
                transform-origin: center;
            }
            .email-wave-large {
                animation-duration: 6.5s;
                animation-delay: .4s;
            }
            .email-wave td {
                animation: ocean-shimmer 4s ease-in-out infinite;
            }
            .email-wave td:nth-child(2),
            .email-wave td:nth-child(4) {
                animation-delay: .8s;
            }
            @media (prefers-reduced-motion: reduce) {
                .email-bubbles td > div,
                .email-wave,
                .email-wave td {
                    animation: none !important;
                }
            }
            @media only screen and (max-width: 620px) {
                .email-shell { width: 100% !important; }
                .email-pad { padding: 28px 20px !important; }
                .hero-title { font-size: 30px !important; line-height: 1.15 !important; }
                .mobile-stack { display: block !important; width: 100% !important; }
                .schedule-cell { padding: 14px !important; }
            }
        </style>
    </head>
    <body style="margin: 0; min-width: 100%; background: #d8f4fa; color: #082f4d; font-family: Arial, Helvetica, sans-serif;">
        <div style="display: none; max-height: 0; overflow: hidden; opacity: 0;">
            Pendaftaran kamu untuk {{ config('event.name') }} berhasil dikonfirmasi.
        </div>

        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background: #d8f4fa;">
            <tr>
                <td align="center" style="padding: 34px 14px;">
                    <table role="presentation" class="email-shell" width="600" cellspacing="0" cellpadding="0" border="0" style="width: 600px; max-width: 600px;">
                        <tr>
                            <td style="overflow: hidden; border-radius: 24px; background: #031c35;">
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td style="padding: 34px 38px 38px; background: linear-gradient(160deg, #021426 0%, #06466a 52%, #0b86a4 100%);">
                                            <div style="margin-bottom: 26px; border-bottom: 1px solid #63d8f2; padding-bottom: 18px;">
                                                <p style="margin: 0; color: #ffffff; font-size: 19px; font-weight: 900; letter-spacing: 3px; line-height: 1.15;">IKANPAUS</p>
                                                <p style="margin: 4px 0 0; color: #f7c95c; font-size: 12px; font-weight: bold; letter-spacing: 4px;">IKANPINDANG</p>
                                                <p style="margin: 10px 0 0; color: #a6f0ff; font-size: 10px; letter-spacing: 2px; text-transform: uppercase;">Festival laut &amp; konservasi</p>
                                            </div>
                                            <table role="presentation" class="email-bubbles" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin: 0 0 22px;">
                                                <tr>
                                                    <td style="height: 30px; vertical-align: top;"><div style="width: 18px; height: 18px; border: 2px solid #bceff8; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="center" style="vertical-align: top;"><div style="width: 8px; height: 8px; border: 1px solid #63d8f2; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="right" style="vertical-align: top;"><div style="width: 24px; height: 24px; border: 2px solid #a6f0ff; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="center" style="vertical-align: top;"><div style="width: 6px; height: 6px; border: 1px solid #63d8f2; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="right" style="vertical-align: top;"><div style="width: 14px; height: 14px; border: 2px solid #bceff8; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                </tr>
                                            </table>
                                            <p style="margin: 0 0 14px; color: #f7c95c; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">Registrasi terkonfirmasi</p>
                                            <h1 class="hero-title" style="margin: 0; color: #ffffff; font-size: 40px; line-height: 1.1;">Pendaftaran berhasil!</h1>
                                            <p style="margin: 16px 0 0; color: #d9faff; font-size: 16px; line-height: 1.6;">Tiket invitation kamu sudah siap untuk {{ config('event.name') }}.</p>
                                            <table role="presentation" class="email-wave" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 24px;">
                                                <tr>
                                                    <td style="height: 13px; border-radius: 50% 50% 0 0; background: #38c4df; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 20px; border-radius: 50% 50% 0 0; background: #63d8f2; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 13px; border-radius: 50% 50% 0 0; background: #38c4df; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 20px; border-radius: 50% 50% 0 0; background: #63d8f2; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 13px; border-radius: 50% 50% 0 0; background: #38c4df; font-size: 0; line-height: 0;">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background: #082f4d;">
                                    <tr>
                                        <td class="email-pad" style="padding: 34px 38px 38px;">
                                            <p style="margin: 0 0 8px; color: #d9faff; font-size: 18px; font-weight: bold;">Halo, {{ $registration['name'] }}!</p>
                                            <p style="margin: 0; color: #a9c2cf; font-size: 15px; line-height: 1.7;">Data pendaftaranmu sudah kami terima. Simpan tiket ini sebagai bukti kehadiran di festival laut kita.</p>

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
                                                    <td style="width: 33%; padding: 15px; border-radius: 12px; background: #1d5271; color: #ffffff; font-size: 13px; line-height: 1.5;"><span style="color: #63d8f2; font-size: 10px; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;">Tanggal</span><br><strong>{{ config('event.date_range') }}</strong></td>
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 33%; padding: 15px; border-radius: 12px; background: #1d5271; color: #ffffff; font-size: 13px; line-height: 1.5;"><span style="color: #63d8f2; font-size: 10px; font-weight: bold; text-transform: uppercase;">Lokasi</span><br><strong>{{ config('event.location') }}</strong></td>
                                                </tr>
                                            </table>

                                            <h2 style="margin: 32px 0 12px; color: #ffffff; font-size: 22px;">Jadwal pilihanmu</h2>
                                            <p style="margin: 0 0 15px; color: #a9c2cf; font-size: 14px; line-height: 1.5;">{{ count($registration['schedule']) }} kegiatan sudah terdaftar untukmu.</p>
                                            @foreach ($registration['schedule'] as $schedule)
                                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 10px; border: 1px solid #3d6c84; border-radius: 14px; background: linear-gradient(90deg, #174c6b, #1d5271);">
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

                                            <table role="presentation" class="email-bubbles email-bubbles-large" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 38px; border-top: 1px solid #21627f; padding-top: 18px;">
                                                <tr>
                                                    <td style="height: 58px; vertical-align: bottom;"><div style="width: 42px; height: 42px; border: 2px solid #63d8f2; border-radius: 50%; background: rgba(99, 216, 242, 0.08); font-size: 0; line-height: 0;"></div></td>
                                                    <td align="center" style="vertical-align: top;"><div style="width: 15px; height: 15px; border: 2px solid #bceff8; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="center" style="vertical-align: bottom;"><div style="width: 28px; height: 28px; border: 2px solid #38c4df; border-radius: 50%; background: rgba(56, 196, 223, 0.08); font-size: 0; line-height: 0;"></div></td>
                                                    <td align="right" style="vertical-align: top;"><div style="width: 10px; height: 10px; border: 1px solid #a6f0ff; border-radius: 50%; font-size: 0; line-height: 0;"></div></td>
                                                    <td align="right" style="vertical-align: bottom;"><div style="width: 58px; height: 58px; border: 2px solid #63d8f2; border-radius: 50%; background: rgba(99, 216, 242, 0.08); font-size: 0; line-height: 0;"></div></td>
                                                </tr>
                                            </table>
                                            <table role="presentation" class="email-wave email-wave-large" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 14px;">
                                                <tr>
                                                    <td style="height: 22px; border-radius: 50% 50% 0 0; background: #155878; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 34px; border-radius: 50% 50% 0 0; background: #1d6b8c; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 25px; border-radius: 50% 50% 0 0; background: #155878; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 34px; border-radius: 50% 50% 0 0; background: #1d6b8c; font-size: 0; line-height: 0;">&nbsp;</td>
                                                    <td style="height: 22px; border-radius: 50% 50% 0 0; background: #155878; font-size: 0; line-height: 0;">&nbsp;</td>
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
