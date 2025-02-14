@extends('layout.main')

@section('page-title')
Кабінет користувача
@endsection

@section('content')
    <div class="block">
        <h1>Кабінет користувача</h1>
        @if (session('status'))
            <div class="success-mess">
                {{ session('status') }}
            </div>
        @endif
        <p>Привіт, {{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->email }}</p>
    </div>  
    
    @if(count($articles) > 0)
        <div class="articles">
         @foreach ($articles as $el)
            <div class="post">
             <img src="/storage/img/articles/{{$el->image}}">
               <h2>{{ $el->title }}</h2>
               <p>{{ $el->anons }}</p>
               <br><hr>
               <p><b>Автор:</b> {{ $el->user->name }}</p>
               <a href="/article/{{ $el->id }}">Читати</a>
            </div>
          @endforeach
        </div>
    @endif
@endsection
