@extends('Kindeuw.App')
@section('kontensatu')

		<table class="table">
			<tr><th>ID</th>
				<th><h1>{{ $show['id'] }}</h1></th>
			</tr>
			<tr><th>Judul</th>
				<th><h1>{{ $show['Judul'] }}</h1></th>
			</tr>
			<tr><th>Penerbit</th>
				<th><h1>{{ $show['Penerbit'] }}</h1></th>
			</tr>
			<tr><th>Harga</th>
				<th><h1>{{ $show['Harga'] }}</h1></th>
			</tr>
		</table>
    <div class="form-group">
        <a href="{{ url('Kindeuw')  }}" class="btn btn-primary">Kembali</a>
    </div>

@stop