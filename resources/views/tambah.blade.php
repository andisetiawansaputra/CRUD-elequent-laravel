@extends('main')
@section('judul', 'CRUD | Tambahkan')
@section('konten')
<div class="container  mt-5">
    <div class="card bg-info border-dark">
        <div class="card-header text-center bg-light text-dark mt-1">
            <h3>Masukkan Data Mahasiswa</h3>
        </div>
        <form action="/tambah/proses" method="post" class="p-5">
        {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nim" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="form-group row dropdown mb-0">
                <label class="col-sm-2 col-form-label">Dosen</label>
                <div class="col-sm-10">
                    <a role="button" id="namadosen" class="custom-select col-md-6 text-dark" onclick="drop('selectdosen')">--Pilih Dosen--</a>
                </div>
            </div>
            <div class="form-group row">
                <div id="selectdosen" class="dropdown-content col-md-5">
                    <select class="custom-select plaintext col" name="select" size="5">
                        <option class="dosen">--Pilih Dosen--</option>
                        @foreach($dosen as $list)
                            <option class="dosen" value="{{ $list->nama }}">{{ $list->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <input type="submit" name="Submit" class="btn btn-dark btn-outline-light" value="Tambah Data"></input>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
