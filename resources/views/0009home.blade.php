@extends('0009layout')
@section('judul','home')
@section('badan')
<div class="container">
    <h5>Select bidang dan nama kelas</h5>
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>Nomer</td>
                <td>Nama Kelas</td>
                <td>Bidang</td>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswaselect as $mhssel)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mhssel->nama_kelas}}</td>
                <td>{{$mhssel->bidang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Menampilkan kelas di bidang fisika</h5>
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>Nomer</td>
                <td>Nama Kelas</td>
                <td>Bidang</td>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswawhere as $mhsw)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mhsw->nama_kelas}}</td>
                <td>{{$mhsw->bidang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Join kelas dan pelajaran di bidang yang sama</h5>
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>Nomer</td>
                <td>Nama Kelas</td>
                <td>Bidang</td>
                <td>Id Pelajran</td>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswajoin as $mhsjoin)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mhsjoin->nama_kelas}}</td>
                <td>{{$mhsjoin->bidang}}</td>
                <td>{{$mhsjoin->id_pelajaran}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Join kelas dan pelajaran di bidang yang sama di fisika</h5>
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>Nomer</td>
                <td>Nama Kelas</td>
                <td>Bidang</td>
                <td>Id Pelajran</td>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswaselect as $mhssel)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mhsjoin->nama_kelas}}</td>
                <td>{{$mhsjoin->bidang}}</td>
                <td>{{$mhsjoin->id_pelajaran}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection