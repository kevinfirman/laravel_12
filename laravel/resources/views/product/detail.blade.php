<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>halaman detil</h1>
    <h1>ini hasil dari produk id {{$data['id']}}</h1>


    <table>
        <tr>
            <td>id</td>
            <td>:</td>
            <td>{{$data['id']}}</td>
        </tr>
        <tr>
            <td>nama produk</td>
            <td>:</td>
            <td>{{$data['nama_produk']}}</td>
        </tr>
        <tr>
            <td>harga</td>
            <td>:</td>
            <td>{{$data['harga']}}</td>
        </tr>
        <tr>
            <td>stok</td>
            <td>:</td>
            <td>{{$data['stok']}}</td>
        </tr>
    </table>

</body>
</html>
