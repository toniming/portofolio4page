<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use DB;
use Redirect;
use View;
class Crudcontroller extends Controller
{
	public function tampil(){
		return View::make('home');
	}

	public function tambahdata(){

    $data= array(
    	'nama' => Input::get('nama'),
    	'alamat' => Input::get('alamat'),
    	'kelas' => Input::get('kelas'),
    );

    DB::table('siswa')->insert($data);
    return Redirect::to('/read');
   	}

	public function lihatdata(){
		$data = DB::table('siswa')->get();

		return View::make('/read')->with('siswa',$data);
	}

	public function erase($id){
		DB::table('siswa')->where('id','=', $id)->delete();

		return Redirect::to('/read');
	}

	public function edit($id){
		$data = DB::table('siswa')->where('id','=',$id)->first();

		return View::make('/edit')->with('siswa',$data);
	}

	public function editprocess(){
 	   $data= array(
    	'nama' => Input::get('nama'),
    	'alamat' => Input::get('alamat'),
    	'kelas' => Input::get('kelas'),
    );

    DB::table('siswa')->where('id','=',Input::get('id'))->update($data);
    return Redirect::to('/read');
   	}

}
