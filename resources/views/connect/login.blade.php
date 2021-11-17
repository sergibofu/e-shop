@extends('connect.master')

@section('title', 'Login')

@section('content')
<div class="box shadow">
    <form action="{{url('/login')}}" method="post">

        <!-- NAME FIELD -->
        <label for="email" class="label-login">Correo electrónico:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="text" name="email" class="form-control">
        </div>


        <!-- PASSWORD FIELD -->
        <label for="password" class="label-login">Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="text" name="password" class="form-control">
        </div>

        <!-- SUBMIT BUTTON -->
        <input type="submit" value="Login" name="submit" class="btn btn-success label-login">

    </form>

    <div class="mt-3 login-footer">
        <a href="{{url('/register')}}">No tienes una cuenta? Registrate</a>
        <a href="{{url('/recover')}}">Recuperar contraseña</a>
    </div>

</div>

@stop