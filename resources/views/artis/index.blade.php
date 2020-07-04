@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Artis<a id="tbh" href="{{ url('artis/create') }}" class="btn btn-primary float-right btn-sm">Tambah</a></h3>
	<table class="table table-striped">
		<tr>
			
			<th>NAMA ARTIS</th>
			<th>Edit</th>
			<th>Hapus</th>
			
		</tr>
		@foreach($rows as $row)
		<tr>
			
			<td>{{ $row->nama_artis }}</td>
			
			<td><a id=""  href="{{ url('artis/'.$row->artis_id.'/edit') }}" class="btn btn-warning btn-sm" >Edit</a></td>
			<form action="{{ url('/artis/'.$row->artis_id) }}" method="post">
				<td><input  type="hidden" name="_method" value="DELETE" class="btn btn-danger btn-sm" >
				@csrf
				<button>Hapus</button></td>
			</form>
		</tr>
		@endforeach 
	</table>
</div>
@endsection