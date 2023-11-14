@extends('admin.isi')
@section('konten')
<a href="/addpesan" type="button" class="btn btn-primary">Tambah data</a>
<br>
<br>
<div class="card" >
    <div class="card-body" >
        <table class="table " style="color: #F50B94">
          <h1 style="color: #3399ff" >Pesan</h1>
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">status</th>
                <th scope="col">pesan</th>
                <th scope="col">tgl</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($san as $i)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>{{$i->status}}</td>
                <td>{{$i->pesan}}</td>
                <td>{{$i->tgl}}</td>
                <td>  
            
                <a href="/editpesan/{{$i->id}}"><button type="button" class="btn btn-success">edit</button></a>
                <br>
                <br>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$i->id}}">
                  Delete</button>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
  </div>
    

@foreach ($san as $b)
      <!-- Modal -->
<div class="modal fade" id="hapus{{$b->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       apakah kamu ingin menghapus> {{$b->nama}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/hapus/{{$b->id}}" class="btn btn-primary">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection