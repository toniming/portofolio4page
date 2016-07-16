@extends('master')
@section('content')
<div class="container wow bounceIn" style="padding-top:40px;">
<p></p>
<div class="panel panel-default">
	<div class="panel-heading"><h2>Ubah Data</h2></div>
<div class="panel-body"><form action="/dataprocess" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	<input type="hidden" name="id" value="{{$siswa->id}}">
	<p> Nama </p> <input type="text" name ="nama" value="{{$siswa->nama}}"> </input> <br>
	<p> Alamat </p> <input type="text" name ="alamat" value="{{$siswa->alamat}}"> </input> <br>
	<p> Kelas </p> <input type="text" name ="kelas" value="{{$siswa->kelas}}"> </input> <br> <br>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
