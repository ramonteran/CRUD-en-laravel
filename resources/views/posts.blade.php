@extends('master')
    @section('content')
        <h2>Todos los Posts</h2>
        @if (session()->has('status'))
            <div class="alert alert-sucess">{{session('status')}}</div>    
        @endif
        <p>
         <a href="{{route('posts.create')}}" class="btn btn-primary">Crear Nuevo Post </a>
        </p>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id }}</td>
                <td>{{$post->name }}</td>
                <td>{{$post->author }}</td>
                <td>{{$post->description }}</td>
                <td>{{$post->created_at }}</td>
                <td>{{$post->updated_at }}</td>
                <td>
                    <a href="{{route('posts.edit',$post->id)}}">Editar</a>
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    <input type="submit" value="Eliminar" class="btn btn-primary">
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endsection