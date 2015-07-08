@extends('Kindeuw.App')
@section('kontensatu')
       {!! Form::open(['url' => ['Kindeuw/ubah/lagi',$edit], 'method' => 'PUT']) !!}
       <div class="form-group">
           <label for="id">ID</label>
           <input type="text" class="form-control" id="id" value="{{$edit->id}}" readonly>
       </div>
       <div class="form-group">
           {!! Form::label('Judul', 'Judul:') !!}
           {!! Form::text('Judul', $edit->Judul , ['class' => 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::label('Penerbit', 'Penerbit:') !!}
           {!! Form::text('Penerbit', $edit->Penerbit , ['class' => 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::label('Harga', 'Harga:') !!}
           {!! Form::text('Harga', $edit->Harga , ['class' => 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
       </div>
       <div class="form-group">
           <a href="{{ url('Kindeuw')  }}" class="btn btn-danger">Kembali</a>
       </div>

       {!! Form::close() !!}