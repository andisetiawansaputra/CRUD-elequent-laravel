@extends('main')
@section('judul', 'CRUD | Beranda')
@section('konten')
<div class="container mt-5">
    <div class="card">
            <div class="card-body bg-info border-dark">

                <div class="myBtn">
                <div class="text right">
    <a href="/tambah" class="btn btn-dark btn-outline-light" style="width:170px;">Tambah Mahasiswa</a>
</div>
</div>
@if($message = Session::get('message'))
    <h1 class="text-center">{{$message}}</h1>
@else
<table class="table table-hover table-bordered table-light table-striped">
            <thead class="thead-dark">
                <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Nim</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">Dosen Wali</th>
                <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
    <?php $i=1;?>
    @foreach($mahasiswa as $mhs)


            <tr >
                <td scope="col" class="cntr"><?php echo $i;?></td>
                <td scope="col">{{$mhs->nama}}</td>
                <td scope="col" class="cntr">{{$mhs->nim}}</td>
                <td scope="col" >{{$mhs->jenis_kelamin}}</td>
                <td scope="col">{{$mhs->dosen->nama}}</td>
                <td scope="col" class="text-center">
                <a href="/edit/id={{$mhs->id}}" class="btn btn-info btn-sm" style="width:80px;">Edit </a>
                <a href="/hapus/id={{$mhs->id}}" class="btn btn-warning btn-sm" style="width:80px;">Hapus </a>
                </td>
            </tr>

        <?php ++$i;?>
        </div>
</div>
</div>
    @endforeach
@endif

@endsection
