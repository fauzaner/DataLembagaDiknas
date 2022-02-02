<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/tests.css')}}">

    <title>Hello, world!</title>
  </head>
  <body>
  @include('sweetalert::alert')
  <div class="sidebar close">
    <div class="logo-details">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKpJREFUSEvtldENwjAMRHP/cRgB2KSjwGQwCqOUDap4gENBalVo+xPXlSrIZxS/y9lKDsF5wZkfthNQ1QbAjeTJ4gpAS/IqIo/CGRzknFsARwu8ry0iMcbzh4CqsmyIyGLbas4MsJriObffHJNADxs735eAe4vcBf4zmLS45q2Y3oH7kH9PoAshHNb4rkk+U0rvXBkPuSF5t2ZCgQO4TAJnjZvPMbbLZC8HLxZK3RnN0G+OAAAAAElFTkSuQmCC"/>
      <span class="logo_name">Data WareHouse</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/admins">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/admins">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-data'></i>
            <span class="link_name">Data Master</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Data Master</a></li>
          <li><a href="/gr">Data Guru</a></li>
          <li><a href="/td">Data Tendik</a></li>
          <li><a href="/td">Data Peserta</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="bottom-content">
        <div class="profile_name">Log Out</div>
      </div>
      <i class='bx bx-log-out' style="color:black;"></i>
    </div>
  </li>
</ul>
  </div>
<!-- Akhir Navbar  -->

<!-- Content -->
<section class="home-section">
    <div class="home-content">
      <i class='menu bx bx-menu' style="color: white; margin-left: 30px;"></i>
      @yield('content')
      </div>
    </div>
</section>
@yield('modal')

<!-- Script -->
<script>
      let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>