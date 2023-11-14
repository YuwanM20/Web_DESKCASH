<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;

class projectController extends Controller
{
    public function __construct(){
        $this ->project = new project;
        $this->middleware('auth');
    }
    public function index(){ 
        $lari = [
            'lari' => $this->project->tampil(),
        ];
        return view ('frontend.project', $lari);
    }
    
    public function add(){
        return view ('project.add');
    }

    public function save(){
        request()->validate([
            'nama' => 'required|max:255|unique:project,nama',

            'deskripsi' => 'required|max:255',
            'gambar' => 'required|mimes:jpg,png,JPEG,gif| max:2040',
        ],[
            'nama.required' => 'Nama Wajib Diisi',

            'deskripsi.required' => 'deskripsi wajib Diisi',
            'gambar.required' => 'gambar wajib Diisi',
        ]);

        $gambar = request()->gambar;
        $namagambar = request()->nama.'.'.$gambar->extension();
        $gambar->move(public_path('gambarproject/'),$namagambar);

        $data = [
            'nama'=> request()->nama, 
            'image'=>$namagambar,
            'deskripsi'=> request()->deskripsi,
        ];

        $this->project->addData($data);
        return redirect()->route('project');
    }

    public function hapus($id){
        $this->project->hapusData($id);
        return redirect()->route('project');
    }


    
    public function edit($id){
        $data = [
            'main' => $this->project->editdata($id),
        ];
        return view ('project.edit',$data);
    }

    public function update($id){
        request()->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'gambar' => 'mimes:jpg,png,JPEG| max:2040',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'deskripsi.required' => 'deskripsi wajib Diisi',
        ]);

        if /*jika ingin ganti foto */(Request()->gambar <> ""){
            $gambar = request()->gambar;
        $namagambar = request()->nama.'.'.$gambar->extension();
        $gambar->move(public_path('gambarproject/'),$namagambar);

        $data = [
            'nama'=> request()->nama, 
            'image'=>$namagambar,
            'deskripsi'=> request()->deskripsi,
        ];

        $this->project->ubahdata($id, $data);

        } else /*jika tidak ingin ganti foto*/ {
            $data = [
                'nama'=> request()->nama, 
                'deskripsi'=> request()->deskripsi,
                
            ];
    
            $this->project->ubahdata($id, $data);
        }

        
        return redirect()->route('project');
    }

}