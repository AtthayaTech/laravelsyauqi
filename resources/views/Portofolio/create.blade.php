<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portofolio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 90px;
        }

        button, .kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: #198754;
        }

        .kembali {
            background: #6c757d;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tambah Portofolio</h1>
    <p>Silakan isi data portofolio berikut.</p>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portofolio.store') }}" method="POST">
        @csrf

        <label>Nama Lengkap</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Nomor HP</label>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}" required>

        <label>Alamat</label>
        <textarea name="alamat" required>{{ old('alamat') }}</textarea>

        <label>Ringkasan Diri</label>
        <textarea name="ringkasan" required>{{ old('ringkasan') }}</textarea>

        <label>Pendidikan</label>
        <textarea name="pendidikan" required>{{ old('pendidikan') }}</textarea>

        <label>Pengalaman</label>
        <textarea name="pengalaman" required>{{ old('pengalaman') }}</textarea>

        <label>Keahlian</label>
        <textarea name="keahlian" required>{{ old('keahlian') }}</textarea>

        <button type="submit">Simpan Portofolio</button>

        <a href="{{ route('portofolio.index') }}" class="kembali">
            Kembali
        </a>
    </form>
</div>

</body>
</html>
