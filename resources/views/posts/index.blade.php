@extends('layouts')

@section('content')

<main>
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="col">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
          <div class="card-body">
            <h5 class="card-title">
              {{$post->title}}
            </h5>
            <p class="card-genre mb-0">
              {{$post->genre}}
            </p>
            <span class="card-price">¥4600</span>
            <div class="border border-white mt-4">
              <a href="#" class="btn btn-primary">詳細へ</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>

@endsection('content')