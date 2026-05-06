<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perulangan</title>
</head>
<body>
    @foreach ($produk as $item)
        <p>ini adalah {{ $item }}</p>
    @endforeach
</body>
</html>