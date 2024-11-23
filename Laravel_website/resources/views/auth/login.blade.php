@extends('layout.main')

@section('page-title')
Авторизація
@endsection

@section('content')
<h1>Увійти</h1>
<a href="/" class="back-button">На головну</a>

<form method="POST" action="/login" class="article-form">
    @csrf
    <label for="email">Email</label>
    <input type="email" id="email" value="{{ old('email') }}" name="email">

    <label for="password">Пароль</label>
    <input type="password" id="password" value="{{ old('password') }}" name="password">

    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label for="remember">Запам'ятати мене</label>

    <input type="submit" value="Увійти" class="login-btn">               
</form>      
@endsection
