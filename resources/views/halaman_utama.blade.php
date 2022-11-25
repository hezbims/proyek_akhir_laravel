<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        img{
            background-size : cover;

        }
        td{
            border: 1px solid black;
            padding : 25px;
        }
    </style>
</head>
    <a href="../logout">Logout</a>&emsp;<a href="../keranjang/{{ Auth::id() }}">Keranjang</a>
    <table>
        @foreach($datas as $index => $barang)
            @if($index % 5 == 0)
                 <tr>
            @endif

            <td>
                <img src="images/{{ $barang->gambar }}" width="200px" height="200px" alt="Gambar Barang"/>
                <p>Harga : {{ $barang->harga }}</p>
                <form method="POST" action="/halaman_utama">
                    @csrf

                    <input type="hidden" value="{{ $barang->id }}" name="id_barang"/>
                    <input type="hidden" value="{{ Auth::id() }}" name="id_user"/>
                    <button type="submit">Beli</button>
                </form>
            </td>

            @if($index % 5 == 4)
                 </tr>
            @endif
        @endforeach
    </table>
</body>
</html>
