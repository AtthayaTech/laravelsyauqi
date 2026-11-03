```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Portofolio</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 40px 20px;
            color: #1e293b;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
        }

        .header {
            background: linear-gradient(135deg, #172554, #2563eb);
            color: white;
            padding: 35px;
        }

        .header .label {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .header h1 {
            font-size: 30px;
            margin: 0 0 10px;
        }

        .header p {
            color: #dbeafe;
            margin: 0;
            line-height: 1.6;
        }

        .content {
            padding: 30px 35px 35px;
        }

        .section-title {
            font-size: 18px;
            margin: 0 0 20px;
            color: #172554;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            min-width: 0;
        }

        .item.full {
            grid-column: 1 / -1;
        }

        .item .label {
            display: block;
            color: #64748b;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 9px;
        }

        .item .value {
            color: #1e293b;
            font-size: 15px;
            line-height: 1.7;
            white-space: pre-line;
            overflow-wrap: anywhere;
            margin: 0;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid #e2e8f0;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-back {
            background: #e2e8f0;
            color: #334155;
        }

        .btn-edit {
            background: #2563eb;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .footer-note {
            font-size: 12px;
            color: #94a3b8;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .header {
                padding: 25px;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 22px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .item.full {
                grid-column: auto;
            }

            .footer {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <span class="label">PORTOFOLIO / DETAIL PROFIL</span>

        <h1>{{ $portofolio->nama }}</h1>

        <p>
            {{ $portofolio->ringkasan }}
        </p>
    </div>

    <div class="content">

        <h2 class="section-title">Informasi Pribadi</h2>

        <div class="grid">

            <div class="item">
                <span class="label">✉ Email</span>
                <p class="value">{{ $portofolio->email }}</p>
            </div>

            <div class="item">
                <span class="label">☎ Nomor HP</span>
                <p class="value">{{ $portofolio->no_hp }}</p>
            </div>

            <div class="item full">
                <span class="label">⌖ Alamat</span>
                <p class="value">{{ $portofolio->alamat }}</p>
            </div>

            <div class="item full">
                <span class="label">▤ Ringkasan Diri</span>
                <p class="value">{{ $portofolio->ringkasan }}</p>
            </div>

            <div class="item full">
                <span class="label">🎓 Pendidikan</span>
                <p class="value">{{ $portofolio->pendidikan }}</p>
            </div>

            <div class="item full">
                <span class="label">▣ Pengalaman</span>
                <p class="value">{{ $portofolio->pengalaman }}</p>
            </div>

            <div class="item full">
                <span class="label">✦ Keahlian</span>
                <p class="value">{{ $portofolio->keahlian }}</p>
            </div>

        </div>

        <div class="footer">
            <div class="buttons">
                <a href="{{ route('portofolio.index') }}"
                   class="btn btn-back">
                    ← Kembali
                </a>

                <a href="{{ route('portofolio.edit', $portofolio->id) }}"
                   class="btn btn-edit">
                    ✎ Edit Portofolio
                </a>
            </div>

            <span class="footer-note">Detail profil pengguna</span>
        </div>

    </div>
</div>

</body>
</html>

