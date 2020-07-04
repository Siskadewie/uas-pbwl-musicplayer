@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Album<a id="tbh" href="{{ url('album/create') }}" class="btn btn-primary float-right btn-sm">Tambah</a></h3>
	<table class="table table-striped">
		<tr>
			
			<th>NAMA ALBUM</th>
			<th>NAMA ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			
			<td>{{ $row->nama_album }}</td>
			<td>{{ $row->artis->nama_artis }}</td>
			<td><a id="#" href="{{ url('album/'.$row->album_id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
			<td><form action="{{ url('/album/'.$row->album_id) }}" method="post" >
				<input type="hidden" name="_method" value="DELETE" class="btn btn-danger btn-sm" >
				@csrf
				<button id="#">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection