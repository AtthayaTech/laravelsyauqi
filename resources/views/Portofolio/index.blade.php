
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Portofolio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f5f6fa;
        }

        h1 {
            color: #263238;
        }

        .tambah {
            display: inline-block;
            padding: 10px 15px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #263238;
            color: white;
        }

        .aksi a, .aksi button {
            display: inline-block;
            padding: 6px 9px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .lihat {
            background: #0d6efd;
        }

        .edit {
            background: #f0ad4e;
        }

        .hapus {
            background: #dc3545;
        }

        .pesan {
            background: #d1e7dd;
            padding: 12px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Data Portofolio</h1>
    <p>Daftar CV dan portofolio pengguna.</p>

    @if (session('success'))
        <div class="pesan">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('portofolio.create') }}" class="tambah">
        + Tambah Portofolio
    </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($dataPortofolio as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->alamat }}</td>

                    <td class="aksi">
                        <a href="{{ route('portofolio.show', $item->id) }}"
                           class="lihat">Lihat</a>

                        <a href="{{ route('portofolio.edit', $item->id) }}"
                           class="edit">Edit</a>

                        <form action="{{ route('portofolio.destroy', $item->id) }}"
                              method="POST"
                              style="display:inline"
                              onsubmit="return confirm('Yakin ingin menghapus portofolio ini?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="hapus">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center">
                        Belum ada data portofolio.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
