<<<<<<< HEAD
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/admins.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Data Warehouse</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{url('/')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bxs-download'></i>
         <span class="links_name">Download</span>
       </a>
       <span class="tooltip">Download</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
=======
@extends('main')
@section('content')
<div class="jumbotron p-4 mb-3">
  <div class="text-dinas container-fluid">
    <img class="Logo" src="{{asset('assets/img/Logo.png')}}">
      <h1 class="text-img display-8 fw-bold">Dinas Pendidikan Kabupaten Blitar <br> Selamat Datang</h1>
>>>>>>> a616e00486be40bce8cc3ee2e5a1fb0df3f2b16e
  </div>
</div>
  <div class = "cardBox">
    <div class="card">
      <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>
        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
          <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
            <img src="images/eye.svg" width="50px" height="50px" alt="eye">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection