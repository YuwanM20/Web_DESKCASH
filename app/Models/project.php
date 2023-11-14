<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class project extends Model
{
 public function tampil(){
     return DB::table('project')->get();
 }  
 
 public function editdata($id){
    return DB::table('project')->where('id', $id)->first();
 }

 public function addData($data){
    DB::table('project')->insert($data);
 }

  public function hapusData($id){
  $namagambar= DB::table('project')->where('id', '=', $id)->pluck('image')->first();
  $namafile = public_path('gambarproject/').$namagambar;

  if($namagambar=null){
   DB::table('project')->where('id', '=', $id)->delete();
  }else{
     @unlink($namafile);
     DB::table('project')->where('id', '=', $id)->delete();
  }

   }

   public function ubahdata($id, $data){
      DB::table('project')->where('id', $id)->update($data);
   }
}
