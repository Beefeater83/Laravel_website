@extends('layout.main')

@section('page-title')
Реєстрація
@endsection

@section('content')
<h1>Реєстрація</h1>
<a href="/" class="back-button">На головну</a>

<form method="POST" action="/register" class="article-form">
    @csrf
                        
    <label for="name">Ім'я</label>
    <input type="text" id="name" value="{{ old('name') }}" name="name">

    <label for="email">Email</label>
    <input type="email" id="email" value="{{ old('email') }}" name="email">

    <label for="password">Пароль</label>
    <input type="password" id="password" value="{{ old('password') }}" name="password">

    <label for="password-confirm">Підтвердження пароля</label>
    <input type="password" id="password-confirm" value="{{ old('password_confirmation') }}" name="password_confirmation"/>                                            
                                            
    <input type="submit" value="Зареєструватися" style="width: 170px;">
</form>
       
@endsection
