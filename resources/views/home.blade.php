@extends('master')
@section('content')
<div class="container wow bounceIn" style="padding-top:40px;">
<p></p>
<div class="panel panel-default">
	<div class="panel-heading"><h2>Tambah Data</h2></div>
	<div class="panel-body"><form action="/submitdata" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	<p> Nama </p> <input type="text" name ="nama"> </input>
	<br><p> Alamat </p> <input type="text" name ="alamat"> </input>
	<p> Kelas </p> <input type="text" name ="kelas"> </input> <br> <br>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop
</div>
</div>
</div>
