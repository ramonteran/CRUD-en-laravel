@extends('master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-5">
            <h2>Enviar Mensaje</h2>
            <form action="{{route('posts.store') }}" method="POST">
                @if (session()->has('status'))
                    <div class="alert alert-sucess">{{session('status')}}</div>    
                @endif
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Escribe tu nombre" value="{{old('name') }}"></input-text>
                    {{$errors->first('name')}}
                </div>

                <div class="form-group">
                    <input type="text" name="author" class="form-control" placeholder="Author" value="{{old('author') }}"></input-text>
                    {{$errors->first('author')}}
                </div>

                <div class="form-group">
                    <textarea name="description"  class="form-control" placeholder="description"> {{old('description') }} </textarea>
                    {{$errors->first('description')}}
                </div>

                <div class="form-group">
                    <input type="submit" value="Enviar formulario" class="btn btn-primary" placeholder="Escribe tu email"></input-text>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
        {{csrf_field()}}
    </form>
    </div>
    </div>
    </div>
    
@endsection