@extends('./app')

@section('content')

    <h1>記事の編集</h1>

    @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <form method="post" action="/edit">
      {{ csrf_field() }}
      <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">編集完了</button>
    </form>
    
<br>
<div>
<button type="button" class="btn btn-info" onclick="history.back()">戻る</button>
</div>

@endsection