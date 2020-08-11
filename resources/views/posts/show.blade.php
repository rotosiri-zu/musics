@extends('layouts')

@section('content')

  <div class="container">
    <div class="row">
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
            <div class="mt-4 text-right">          
              <a type="submit" class="btn btn-primary" href="{{route('posts.edit', ['post' => $post])}}">
                編集
              </a>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>


@endsection('content')