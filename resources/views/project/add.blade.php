@extends('admin.isi')
@section('konten')
<div class="card" >
    <div class="card-body shadow-lg">
      <h2 style="color: #3399ff" >Tambah Data</h2>
      <div class="dropdown-divider"></div>
      <br>
        <form action="/saveproject" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form row">
              
            <div class="form-group col-sm-6">
              <label for="formGroupExampleInput">Nama</label>
              <input name="nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama">
                @error('nama')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>


              <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="keterangan">
                @error('deskripsi')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <label for="formGroupExampleInput2">Gambar</label>
            <div class="input-group">
              <div class="custom-file col-sm-6">
                <input name="gambar" type="file" class="custom-file-input" placeholder="gambar" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">pilih gambar</label>
                @error('gambar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success " class="text-left" >Tambah</button>
          </form>
    </div>
</div>
<br>
<a href="/project" type="button" class="btn btn-primary " style="float: right;">Kembali</a>
<br>
<br>
<br>
  @endsection