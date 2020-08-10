@extends('layouts')

@section('content')

<main>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection('content')