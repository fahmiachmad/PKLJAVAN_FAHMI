@extends('Kindeuw.App')

@section('kontensatu')
	<div class="container-fluid">
		<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID</th>
				<th>Judul</th>
				<th>Penerbit</th>
				<th>Harga</th>
				<th colspan="3">Aksi</th>
			</tr>
            <?php $i=1; ?>
            @foreach($manekinds as $manekin)
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $manekin->id }}</td>
                        <td>{{ $manekin->Judul }}</td>
                        <td>{{ $manekin->Penerbit }}</td>
                        <td>{{ $manekin->Harga }}</td>
                        <td><a href="{{ url('Kindeuw/ubah',$manekin->id) }}" class="btn btn-warning">UBAH</a></td>
                        <td><a href="{{ url('Kindeuw',$manekin->id) }}" class="btn btn-info">BACA</a></td>
                        <td>{!! Form::open(['url' => ['Kindeuw/hapus',$manekin->id], 'method' => 'delete']) !!}
                            {!! Form::submit('HAPUS', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}</td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
		<div class="form-group">
		<a href="{{ url('/Kindeuw/create') }}" class="btn btn-primary btn-lg btn-block">BUAT DATA BUKU</a>
		</div>
	</div>
@stop
