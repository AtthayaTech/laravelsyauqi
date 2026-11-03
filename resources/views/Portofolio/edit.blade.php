```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CV | CV Builder</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #263248;
        }

        nav {
            background: white;
            padding: 20px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e9f0;
        }

        .logo {
            color: #3459db;
            font-size: 23px;
            font-weight: bold;
        }

        nav a {
            color: #526078;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .container {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .heading {
            margin-bottom: 25px;
        }

        .heading h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .heading p {
            color: #718096;
            line-height: 1.6;
        }

        .form-card {
            background: white;
            padding: 30px;
            border: 1px solid #e5e9f0;
            border-radius: 12px;
        }

        .section-title {
            font-size: 19px;
            margin-bottom: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 14px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d8deea;
            border-radius: 7px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3459db;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .required, .error {
            color: #dc2626;
        }

        .error {
            margin-top: 7px;
            font-size: 13px;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-cancel {
            background: #edf0f5;
            color: #526078;
        }

        .btn-save {
            background: #3459db;
            color: white;
        }

        @media (max-width: 600px) {
            nav {
                flex-wrap: wrap;
                gap: 15px;
            }

            nav a {
                margin-left: 0;
                margin-right: 12px;
            }

            .form-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">CV Builder</div>

        <div>
            <a href="{{ route('portofolio.index') }}">Daftar CV</a>
        </div>
    </nav>

    <main class="container">

        <div class="heading">
            <h1>Edit CV</h1>
            <p>Perbarui informasi CV kamu melalui formulir berikut.</p>
        </div>

        <div class="form-card">

            <h2 class="section-title">Informasi Pribadi</h2>

            <form action="{{ route('portofolio.update', $portofolio->getKey()) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">
                        Nama Lengkap <span class="required">*</span>
                    </label>

                    <input type="text"
                           id="nama"
                           name="nama"
                           value="{{ old('nama', $portofolio->nama) }}"
                           required>

                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">
                        Email <span class="required">*</span>
                    </label>

                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email', $portofolio->email) }}"
                           required>

                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor Telepon</label>

                    <input type="text"
                           id="no_hp"
                           name="no_hp"
                           value="{{ old('no_hp', $portofolio->no_hp) }}">

                    @error('no_hp')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>

                    <textarea id="alamat"
                              name="alamat">{{ old('alamat', $portofolio->alamat) }}</textarea>

                    @error('alamat')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <h2 class="section-title">Profil Profesional</h2>

                <div class="form-group">
                    <label for="ringkasan">Ringkasan Diri</label>

                    <textarea id="ringkasan"
                              name="ringkasan">{{ old('ringkasan', $portofolio->ringkasan) }}</textarea>

                    @error('ringkasan')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>

                    <textarea id="pendidikan"
                              name="pendidikan">{{ old('pendidikan', $portofolio->pendidikan) }}</textarea>

                    @error('pendidikan')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>

                    <textarea id="pengalaman"
                              name="pengalaman">{{ old('pengalaman', $portofolio->pengalaman) }}</textarea>

                    @error('pengalaman')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="keahlian">Keahlian</label>

                    <textarea id="keahlian"
                              name="keahlian">{{ old('keahlian', $portofolio->keahlian) }}</textarea>

                    @error('keahlian')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="actions">
                    <a href="{{ route('portofolio.index') }}"
                       class="btn btn-cancel">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-save">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </main>

</body>
</html>
