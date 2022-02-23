@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">BREAKING NEWS Update Corona 20 Februari 2022: Kasus Baru Tambah 48.484 Pasien, 163 Jiwa Meninggal</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">BREAKING NEWS: Diduga di Keroyok, Guru Pesantren di Mugirejo Meninggal</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">BREAKING NEWS: Mantan Wagub Bali Sudikerta Telah Bebas Asimilasi dari Lapas Kerobokan</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $title }}</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta similique, nemo iusto cupiditate debitis at doloribus corporis. Eaque atque quidem cumque fuga repellendus facere nobis provident fugit, itaque expedita rerum?.</p>
        </div>
      </div>
    </div>

  </div>
@endsection