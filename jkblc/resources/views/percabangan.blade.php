<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
    <h1>Percabangan</h1>
    @if ($umur > 80 && $nilai > 80)
        <p>Anda memenuhi syarat {{$umur}}</p>
    @else
        <p>Belum memenuhi syarat</p>
    @endif
</body>
</html>