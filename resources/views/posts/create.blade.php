@extends('layouts')

@section('content')

  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        投稿の新規作成
      </h1>

      <form method="POST" action="{{ route('posts.store') }}">
        {{ csrf_field() }}

        <fieldset class="mb4">
          <div class="form-group">
            <label for="title">タイトル</label>
            <input id="title" name="title" type="title">
          </div>
          <div class="form-group">
            <label class="genre">ジャンル</label>
            <input id="genre" name="genre" type="genre">
          </div>
          <div class="form-group">
            <span class="form-group-text">¥</span>
            <input id="price" name="price" type="price">
          </div>

          <a href="{{route('top')}}">キャンセル</a>

          <button type="submit">
            投稿する
          </button>

        </fieldset>
      </form>
    </div>
  </div>

@endsection('content')