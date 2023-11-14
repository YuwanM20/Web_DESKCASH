<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesan;


class pesanController extends Controller
{
    public function __construct(){
        $this ->pesan = new pesan;
        $this->middleware('auth');

    }
    public function index(){ 
        $data = [
            'san' => $this->pesan->tampil(),
        ];
        return view ('frontend.pesan', $data);
    }

    public function hapuspesan($id){
        $this->pesan->hapuspesan($id);
        return redirect()->route('pesan');
    }
    
   
}