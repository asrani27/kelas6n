@extends('layout.master')
@section('content')
<div class="row" style="padding-top: 25px; padding-left:25px;">
    <div class="col-md-12" style="padding-left: 0px;">
        <a class="btn btn-primary" href="/mahasiswa/add"> <i class="fas fa-plus"></i> TAMBAH DATA</a> | 
        <a class="btn btn-danger" href="/mahasiswa/cetak" target="_blank"> <i class="fas fa-print"></i> CETAK PDF</a>
    </div>
    <br/><br/>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-users"></i>  Data Mahasiswa
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
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
                        <a class="btn btn-sm btn-success" href="/mahasiswa/edit/{{$item->id}}"><i class="fas fa-edit"></i> EDIT</a> |
                        <a class="btn btn-sm btn-warning" href="/mahasiswa/delete/{{$item->id}}"><i class="fas fa-trash"></i> HAPUS</a> 
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>


@endsection