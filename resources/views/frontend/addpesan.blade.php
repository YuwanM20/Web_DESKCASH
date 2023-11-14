@extends('admin.isi')
@section('konten')

<form action="/savepesan" method="POST" enctype="multipart/form-data">
    @csrf

<div class="card shadow mb-4">
    <div class="card-header py-3" style="background: #18d26e">
        <h4 class="m-0  text-white">Tambah Pesan Kamu</h4>
    </div>
    <div class="card-body" id="card-body">

        <div class="form row">

           {{-- NAMA --}}
           <div class="form-group col-sm-6">
               <label for="formGroupExampleInput2">Nama</label>
               <input name="nama" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama">
               @error('nama')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div>

             <div class="form-group col-sm-6">
               <label for="exampleFormControlSelect1">Pilih type Kamu</label>
               <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="CEO">CEO</option>
                <option value="KETUA" >KETUA</option>
                <option value="GANTENG">GANTENG</option>
                <option value="IMUT">IMUT</option>
                <option value="ANONIM">ANONIM</option>
                <option value="WIBU">WIBU</option>
                <option value="MEMBER">MEMBER</option>
               </select>
             </div>
             

             <div class="form-group col-sm-6">
                   <label for="formGroupExampleInput2">Pesan</label>
                   <input name="pesan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Pesan">
                   @error('pesan')
                   <small class="form-text text-danger">{{$message}}</small>
               @enderror
                 </div>

                
             
             <input type="hidden" name="tgl" value="<?php echo date("Y-m-d"); ?>">



           </div>
           <br>
           <button type="submit" class="btn " style="background: #18d26e" class="text-left" >Tambah</button>
         </form>
         
    </div>
</div>
<a href="/pesan" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
    <br>

    @endsection
