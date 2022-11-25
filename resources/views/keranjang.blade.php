<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
</head>
<body>
    @foreach($barangUser as $barang)
        <img src="images/{{ $barang->gambar }}" width="200px" height="200px" alt="Gambar Barang"/>
        <p>Harga : {{ $barang->harga }}</p>
    @endforeach
</body>
</html>
