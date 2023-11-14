@extends('admin.isi')
@section('konten')
<div class="card" >
    <div class="card-body" >
      <h2 style="color: #3399ff" >Edit Data</h2>
      <div class="dropdown-divider"></div>
      <br>
     
        <form action="/update/{{$main->id}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="formGroupExampleInput">Judul</label>
              <input name="nama" type="text" class="form-control" id="formGroupExampleInput" value="{{$main->nama}}" >
                @error('nama')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

              <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="formGroupExampleInput2" value="{{$main->deskripsi}}" placeholder="keterangan">
                @error('deskripsi')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
              </div>
            </div>
            <label for="formGroupExampleInput2">Ganti Gambar</label>
            
            <div class="input-group">
              <div class="custom-file col-sm-6">
                <input name="gambar" type="file" class="custom-file-input" placeholder="gambar" value="{{$main->image}}" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">pilih gambar</label>
                @error('gambar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
              </div>
              <img src="{{asset('gambarproject')}}/{{$main->image}}" width="150px" style="float: right;" class="col-sm-2 rounded " >
            </div>
            <br>
            <button type="submit" class="btn btn-success col-md-1" class="text-left" >Update</button>
          </form>
    </div>
</div>
<br>
<a href="/project" type="button" class="btn btn-primary " style="float: right;">Kembali</a>
<br>
<br>
<br>
  @endsection