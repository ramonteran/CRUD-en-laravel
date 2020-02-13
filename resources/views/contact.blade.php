<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contacto</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
    
    <div class="col-md-5">
    <h2>Enviar Mensaje</h2>
    <form action="{{route('contact.store') }}" method="POST">
    <div class="form-group">
    <input type="text" name="Nombre" class="form-control" placeholder="Escribe tu nombre" value="{{old('Nombre') }}"></input-text>
    {{$errors->first('Nombre')}}
    </div>

    <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Escribe tu email" value="{{old('email') }}"></input-text>
    {{$errors->first('email')}}
    </div>

    <div class="form-group">
    <textarea name="mensaje"  class="form-control" placeholder="Escribe tu mensaje aqui"> {{old('mensaje') }} </textarea>
    {{$errors->first('mensaje')}}
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
</body>
</html>