@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Album</h3>
<form method="post" action="{{ url('/album/'.$row->artis_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table class="table table-striped">
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album" value="{{ $row->nama_album }}"></td>
		</tr>
		<tr>
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artis_id }}" >{{ $rows->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="#" type="submit" value="UPDATE" class="btn btn-warning btn-sm"></td>
		</tr> 
	</table>
</form>
</div>
@endsection