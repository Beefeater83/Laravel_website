@extends('layout/main')

@section('page-title')
{{ $article->title }}
@endsection

@section('content')
<h1>{{ $article->title }}</h1>

<div class="articles one">
   <a href="/" class="back-button">На головну</a>
    <div class="post">
        <img src="/storage/img/articles/{{$article->image}}">
        <h2>{{ $article->title }}</h2>  
        <p>{{ $article->anons }}</p><br>  
        <p>{!! $article->text !!}</p> 
        <br> <hr>
        <p><b>Автор:</b> {{ $article->user->name }}</p> 

        @auth
            @if(Auth::user()->id == $article->user->id)
                
                <a href="/article/{{$article->id}}/edit">Редагувати</a>   
                {!! Form::open(['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
                    {{Form::submit('Видалити', ['class' => 'delete-button'])}}
                {!! Form::close() !!} 
            @endif
        @endauth    
        
    </div>
    <div class="post" id="comment-section">
        @if(count($comments) > 0)
           @foreach($comments as $el)
                <div class="comment-text" id="comment-{{$el->id}}">
                    <div>
                      <p><b>{{ $el->user->name }}: </b>{{ $el->text }}</p>
                    </div>
                    <form method="POST" action="/comment-destroy/{{$el->id}}">
                        @csrf
                        @method('DELETE')
                       <button type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                    </form>
                </div>
           @endforeach
        
        <h1>Додати коментар</h1>  
        
      @endif

        <form method="POST" action="/add-comment/{{$article->id}}" class="article-form">
            @csrf
                                
            <label for="comment-add">Коментар</label>
                   
            <textarea name="comment-add" id="comment-add" placeholder="Введіть коментар"></textarea>                                     
                                                    
            <input type="submit" value="Додати">
        </form>
    </div>
    
</div>
@endsection