<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <a href="/">< Kembali</a>
    <h1>DATA MAHASISWA</h1>
    <a href="/mahasiswa/add">+ TAMBAH DATA</a> | 
    <a href="/mahasiswa/cetak" target="_blank">CETAK PDF</a>
    <table border="1" cellpadding="10px">
        <tr>
            <td>NO</td>
            <td>NPM</td>
            <td>NAMA</td>
            <td>JURUSAN</td>
            <td>AKSI/TOMBOL</td>
        </tr>

        @foreach($mahasiswa as $nomor => $item)
        <tr>
            <td>{{$nomor + 1}}</td>
            <td>{{$item->npm}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jurusan}}</td>
            <td>
                <a href="/mahasiswa/edit/{{$item->id}}">EDIT</a> |
                <a href="/mahasiswa/delete/{{$item->id}}">HAPUS</a> 
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>