@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://s.kaskus.id/images/fjb/2019/02/14/ssd_samsung_860_pro_512gb___500gb_bnib_603697_1550116233.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">SSD Samsung 512 GB</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://mmc.tirto.id/image/otf/500x0/2021/01/15/samsung-galaxy-s21_ratio-16x9.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Samsung S21 Ultra</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="https://asset.kompas.com/crops/q7pp0oMX5_lkwwPbp47TjMr-VOE=/427x91:3374x2056/750x500/data/photo/2021/10/19/616e631b2dd83.png">
        <div class="card-body">
          <h5 class="card-title">Samsung S22 Pro 2022</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>
@endsection