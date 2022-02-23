@extends('main')

@section('content')
  <div class="p-3"></div>
  <h3>{{ $title }}</h3>
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">About Us</h5>
          <h6 class="card-subtitle mb-2 text-muted">Subtitle</h6>
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nama</td>
                <td>Elvira Sania Mufida</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kelas</td>
                <td>TI-2H</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>NIM</td>
                <td>2041720080</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection