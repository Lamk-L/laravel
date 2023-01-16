@extends('layout.diseño1')

@section('content')
    <form action="{{route('login2')}}" method="POST">
        @csrf
        <div align="center">
            <img src="img/restaurant.png" width="220cm" alt="#">
        </div>
        <h2 align="center" style="margin: 20px">RESTAURANT "U.N.T."</h2>
        @include('layout.mensaje')
        <div class="mb-3" align="center">
            <label for="exampleInputEmail1" class="form-label">Username/Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3" align="center">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3" align="center">
            <a href="{{route('register')}}">Crear cuenta</a>
        </div>
        <div  align="center">
            <button type="submit" class="btn btn-dark">Iniciar Sesión</button>  
            <a class="btn btn-warning" href="{{route('landing')}}">Retornar</a>
        </div>
        
    </form>
@endsection
   
