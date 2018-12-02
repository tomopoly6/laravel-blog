@extends('./app')

@section('content')

    <h1>記事の追加</h1>

    @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif


    <form method="post" action="/create">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">新規追加</button>
    </form>

<br>
<div>
<button type="button" class="btn btn-info" onclick="history.back()">戻る</button>
</div>

@endsection