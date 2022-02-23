@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://qubisastorage.blob.core.windows.net/files/articles/69/images/img1280/69-20210129105604729.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://id.hrnote.asia/wp/wp-content/uploads/2021/01/pengembangan-organisasi-ilustrasi-2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://www.goersapp.com/blog/wp-content/uploads/2021/09/Cermati-3-Hal-Ini-Sebelum-Kamu-Mendaftar-Magang.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>
@endsection