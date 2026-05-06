<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <p>Silahkan Isi Data Mahasiswa:</p>
    <form action="/mahasiswa/proses" method="post">
        @csrf <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="alamat">Alamat: </label>
        <input type="text" name="alamat" id="alamat"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>