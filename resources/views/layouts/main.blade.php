<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Data Warehouse Dinas Pendidikan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/admins.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="shortcut-icon" href="{{asset('img/Logo.png')}}">
   </head>
<body>
  @include('sweetalert::alert')
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Data Warehouse</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{route('dashboard_admin')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-data'></i>
         <span class="links_name">Data Master</span>
        </a>
       <span class="tooltip">Data Master
       <i class='bx bxs-chevron-down arrow'></i>
       </span>
       
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
  </div>
  <!--akhir sidebar-->
<section class="home-section">
  <div class="container">
    @yield('content')
  </div>
</section>


  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>