<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>ラブライブ！</title>
  <style>
    a.navbar-brand {
      font-size: 40px;
    }
    a.nav-item {
      font-size: 20px;
    }
    .card {
      margin-top: 100px;
      margin-left: 100px;
      width: 300px;
    }
    span.card-price {
      font-size: 20px;
    }
    ul {
      list-style: none;
    }
    h1 {
      font-size: 20px;
    }
  </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand bg-info navbar-dark">
    <a class="navbar-brand text-white" href="{{url('')}}">ラブライブ!</a>
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white" href="{{ route('posts.create') }}">投稿画面メニューへ</a>
    </div>
  </nav>
</header>

@yield('content')

<footer>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-md-push-3">
        <ul>
          <li><a href="{{url('')}}">トップページ</a></li>
        </ul>
      </div>
    </div>
    <p class="text-muted mt-5">Place sticky footer content here.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>