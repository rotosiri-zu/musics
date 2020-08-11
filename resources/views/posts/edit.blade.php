@extends('layouts')

@section('content')

  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        投稿の編集
      </h1>

      <form method="POST" action="{{ route('posts.update', ['post' => $post] )}}">
        {{ csrf_field() }}
        {{ method_field('PUT')}}

        <fieldset class="mb4">
          <div class="form-group">
          <label for="basic-url">image URL</label>
          <input id="image" name="image" type="text" value="{{$post->image}}" class="form-control" aria-describedby="basic-addon3">
          </div>
          <div class="form-group">
            <label for="title">タイトル</label>
            <input id="title" name="title" type="text" value="{{$post->title}}">
          </div>
          <div class="form-group">
            <label class="genre">ジャンル</label>
            <input id="genre" name="genre" type="text" value="{{$post->genre}}">
          </div>
          <div class="form-group">
            <span class="form-group-text">¥</span>
            <input id="price" name="price" type="text" value="{{$post->price}}">
          </div>

          <a href="{{ route('posts.show', ['post' => $post])}}">キャンセル</a>

          <button type="submit">
            更新する
          </button>

        </fieldset>
      </form>
    </div>
  </div>

@endsection('content')