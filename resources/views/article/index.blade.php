@extends('./app')

@section('content')
    

    @foreach ($articles as $article)
    

    <div class="card mb-2">
      <div class="card-body">

        <h4 class="card-title">
        {{ $article->title }}
        </h4>

        <h6 class="card-subtitle mb-2 text-muted">
        {{ $article->updated_at }}
        </h6>

        <p class="card-text">
        {!! nl2br(e($article->body)) !!}        
        </p>

        @if(Auth::check())
        <a href="/edit/{{ $article->id }}" class="card-link">編集</a>
        <a href="/delete/{{ $article->id }}" class="card-link">削除</a>
        @endif

      </div>
    </div>
    @endforeach

    {{ $articles->links() }}
    <p>
    @if(Auth::check())
    <a href="/create" class="btn btn-primary">新規追加</a>
    @endif
    <a href="/login" class="btn btn-info">管理者ログイン</a>
    </p>

    

    
@endsection
