@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Artis</h3>
<form method="post" action="{{ url('/artis/'.$row->artis_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table class="table table-striped">
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="nama_artis" value="{{ $row->nama_artis }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="#" type="submit" value="UPDATE" class="btn btn-warning btn-sm" class="btn btn-warning btn-sm"></td>
		</tr> 
	</table>
</form>
</div>
@endsection