@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1568969672/ftsocgjnwj7jbituzrdv.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Iphone 11 Pro Max</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Apple_MacBook_Pro_14_unboxing_video_and_comparison_drdNBC.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Macbook Pro M1 Max</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://asset.kompas.com/crops/2gtu8CPVMjK7aEvASpAK3kZDlhU=/101x0:1181x720/750x500/data/photo/2021/10/19/616e42936b0b0.jpg">
        <div class="card-body">
          <h5 class="card-title">MacOS Monterey 2 Version</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>
@endsection