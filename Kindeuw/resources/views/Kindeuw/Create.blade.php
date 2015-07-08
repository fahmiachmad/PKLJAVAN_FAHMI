@extends('Kindeuw.App')
@section('kontensatu')
    <div class="container">
		{!! Form::open(['url' => 'Kindeuw']) !!}
		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::text('id', null, ['class' => 'form-control'], 'readonly') !!}
		</div>
			<div class="form-group">
			{!! Form::label('Judul', 'Judul:') !!}
			{!! Form::text('Judul', null, ['class' => 'form-control']) !!}
			</div>
				<div class="form-group">
				{!! Form::label('Penerbit', 'Penerbit:') !!}
				{!! Form::text('Penerbit', null, ['class' => 'form-control']) !!}
				</div>
					<div class="form-group">
					{!! Form::label('Harga', 'Harga:') !!}
					{!! Form::text('Harga', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
					{!! Form::submit('Simpan', ['class' => 'btn btn-primary btn-block']) !!}
					</div>
		
		{!! Form::close() !!}
		<div class="form-group">
			<a href="{{ url('/Kindeuw')}}" class="btn btn-danger">Kembali</a>
		</div>
    </div>
@stop