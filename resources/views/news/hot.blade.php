@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Hot News: OctaFX Cs Ilegal, Hingga Putin-Biden akan Bertemu</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Hot News: Rusia Tarik Tentara, Hingga Kemanjuran Vaksin Ke-3</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Hot News: Rekomendasi WHO & Filipina Akan Serang Malaysia?</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

  </div>
@endsection