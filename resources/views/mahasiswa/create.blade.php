<html>

<head>
    <title>Form Mahasiswa</title>
</head>

<body>

    <form action="/mahasiswa" method="POST">
    <h2>Tambah Data Mahasiswa Baru</h2>
        @csrf
        <table>
            <tr>
                <label>
                    <td>NIM</td>
                    <td>
                        : <input type="text" name="nim" id="nim" />
                    </td>
                </label>
            </tr>

            <tr>
                <label>
                    <td>Nama </td>
                    <td>
                        : <input type="text" name="nama" id="nama" />
                    </td>
                </label>
            </tr>

            <tr>
                <label>
                    <td>Alamat</td>
                    <td>
                        : <input type="text" name="alamat" id="alamat" />
                    </td>
                </label>
            </tr>

            <tr>
                <label>
                    <td>Hobi</td>
                    <td>
                        : <input type="text" name="hobi" id="hobi" />
                    </td>
                </label>
            </tr>
            <tr>
                <td colspan="2">
                    @if ($errors->any() && !$errors->has('nim'))
                        <div style="color: red;">Semua kolom harus diisi.</div>
                    @endif
                    @error('nim')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </td>
            </tr>


        </table>
        <button type="submit">Simpan Data</button>
    </form>

    <hr>

    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>

        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td> {{ $mahasiswa->nim }}</td>
                <td> {{ $mahasiswa->nama }}</td>
                <td> {{ $mahasiswa->alamat }}</td>
                <td> {{ $mahasiswa->hobi }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
