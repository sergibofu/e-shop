@extends('connect.master')

@section('title', 'Register')

@section('content')
<div class="box shadow">
    <form action="{{url('/register')}}" method="post">

        @csrf
        
        <!-- NAME FIELD -->
        <label for="name" class="label-login">Nombre:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" name="name" class="form-control">
        </div>

        <!-- EMAIL FIELD -->
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
            <input type="password" name="password" class="form-control">
        </div>

        <!-- CONFIRM PASSWORD FIELD -->
        <label for="cpassword" class="label-login">Confirmar password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" name="cpassword" class="form-control">
        </div>

        <!-- SUBMIT BUTTON -->
        <input type="submit" value="Login" name="submit" class="btn btn-success label-login">

    </form>

    <div class="mt-3 login-footer">
        <a href="{{url('/login')}}">Ya estas registrado? Inicia sesion</a>
        <a href="{{url('/recover')}}">Recuperar contraseña</a>
    </div>
</div>


@stop