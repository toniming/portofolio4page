@extends('master')
@section('content')

<div class="container wow bounceIn" style="padding-top:40px;">

<div class="panel panel-default">
	<div class="panel-heading"><h2>Data Yang Telah Di Inputkan</h2></div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Alamat</th>
        <th class="text-center">Kelas</th>
        <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1;?>
	@foreach ($siswa as $data)
	<tr>
		<td>{{ $no++ }}</td>
		<td>{{ $data->nama}}</td>
		<td>{{ $data->alamat }} </td>
		<td>{{ $data->kelas }} </td>
		<td><a href="erase/{{ $data->id}}">Hapus</a></td>
		<td><a href="edit/{{ $data->id}}">Edit</a></td>
	</tr>
	@endforeach
    </tbody>
  </table>
</div>
</div>
<center style="padding-top:30px">
<a href="{{ url('/crud') }}"><button type="button" class="btn btn-primary">Input Data</button></a>
</center>

@stop
