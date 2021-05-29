@extends('0009layout')
@section('judul','home')
@section('badan')
<div class="container">
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>Nomer</td>
                <td>Nama</td>
                <td>NBI</td>
                <td>Prodi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nbi}}</td>
                <td>{{$mhs->prodi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection