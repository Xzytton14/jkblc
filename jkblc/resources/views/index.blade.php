<body>
    <table border="1">
        <tr>
            <th>Nama Karyawan</th>
            <th>Alamat</th>
        </tr>
        @foreach ($karyawan as $k)
        <tr>
            <td>{{ $k->id_karyawan }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->alamat }}</td>
        </tr>
            <a href="/karyawan/edit/{{ $k->id }}">Edit</a>
            <a href="/karyawan/hapus/{{ $k->id }}">Hapus</a>
        @endforeach
    </table>
</body>