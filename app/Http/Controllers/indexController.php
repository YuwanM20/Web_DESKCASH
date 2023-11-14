<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesan;
use App\Models\project;
use App\Mail\lihatContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class indexController extends Controller
{
    public function __construct(){
        $this ->pesan = new pesan;
        $this ->project = new project;

    }
    public function index()
    {
        $data = [
            't_pesan' => $this->pesan->tampil(),
            't_project' => $this->project->tampil(),

        ];
        return view('frontend.frontendd',$data);
    }

    public function add(){
        return view('frontend.addpesan');
    }
     // BUAT SAVE ADD pesan
     public function save(){
        Request()->validate([
            'nama' => 'required|max:250',
            'status' => 'required|max:255',
            'pesan' => 'required|max:250',
            'tgl' => 'required|',

        ],[
            
            'nama.required' => 'nama wajib diisi yah',
            'status.required' => 'status wajib diisi yah',
            'pesan.required' => 'pesan wajib diisi yah',
        ]);

        $data = [
            'nama'=> request()->nama,
            'status'=> request()->status,
            'pesan'=>request()->pesan,
            'tgl'=> request()->tgl,
        ];

        $this->pesan->addpesan($data);
        return redirect()->route('pesan');
}

public function edit($id){
    $data = [
        'main' => $this->pesan->editdata($id),
    ];
    return view('frontend.editpesan',$data);
}


public function update($id){
    request()->validate([
        'nama' => 'required|max:155',
        'status' => 'required|max:255',
        'pesan' => 'required|max:250',
    ],[
        'nama.required' => 'judul wajib diisi yah',
        'status.required' => 'status wajib diisi yah',
        'pesan.required' => 'pesan wajib diisi yah',
    ]);

    $data = [
        'nama' => Request()->nama,
        'status' => Request()->status,
        'pesan' => Request()->pesan,
    ];

    $this->pesan->ubahdata($id, $data);

    return redirect()->route('pesan');
}


public function submitcontact(Request $request)
{
  $data = [
    'name' => $request->name,
    'email' =>$request->email,
    'subject' =>$request->subject,
    'message' =>$request->message,
  ];

  Mail::to('teamdarkmode7@gmail.com')->send (new lihatContact($data));

  Session::flash('message', 'Terima kasih telah memberi saran');
  return redirect()->route('frontend');
}

}