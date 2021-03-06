@extends('layouts')

@section('content')

<main>
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="col">
        <div class="card">
        <img src="{{$post->image}}" alt="..." class="img-thumbnail">
          <div class="card-body">
            <h5 class="card-title">
              {{$post->title}}
            </h5>
            <p class="card-genre mb-0">
              {{$post->genre}}
            </p>
            <span class="card-price">¥{{$post->price}}</span>
            <div class="border border-white mt-4">
              <a href="{{route('posts.show', ['post' => $post])}}" class="btn btn-primary">詳細へ</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>

@endsection('content')