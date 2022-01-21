@extends('main')
@section('content')
<div class="jumbotron p-4 mb-3">
  <div class="text-dinas container-fluid">
    <img class="Logo img-fluid" src="{{asset('assets/img/Logo.png')}}">
      <h1 class="text-img display-8 fw-bold">Dinas Pendidikan Kabupaten Blitar <br> Selamat Datang</h1>
  </div>
</div>
  <div class = "cardBox">
    <div class="card">
      <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Sekolah</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>
        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Guru</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Tendik</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Siswa</div>
          </div>
          <div class="iconBx">
            <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection