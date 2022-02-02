<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/tests.css')}}">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="sidebar close">
    <div class="logo-details">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKpJREFUSEvtldENwjAMRHP/cRgB2KSjwGQwCqOUDap4gENBalVo+xPXlSrIZxS/y9lKDsF5wZkfthNQ1QbAjeTJ4gpAS/IqIo/CGRzknFsARwu8ry0iMcbzh4CqsmyIyGLbas4MsJriObffHJNADxs735eAe4vcBf4zmLS45q2Y3oH7kH9PoAshHNb4rkk+U0rvXBkPuSF5t2ZCgQO4TAJnjZvPMbbLZC8HLxZK3RnN0G+OAAAAAElFTkSuQmCC"/>
      <span class="logo_name">Data WareHouse</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
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
          <li><a href="#">Data Guru</a></li>
          <li><a href="#">Data Tendik</a></li>
          <li><a href="#">Data Peserta</a></li>
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
  <section class="home-section">
    <div class="home-content">
      <i class='menu bx bx-menu' style="color: white; margin-left: 30px;"></i>
      <span class="text">Dashboard</span>
    </div>
    <div class="jumbotron1 p-4 mb-3">
  <div class="text-dinas container-fluid">
    <img class="Logo1 img-fluid" src="{{asset('assets/img/Logo.png')}}">
      <h1 class="text-admin display-8 fw-bold">Dinas Pendidikan Kabupaten Blitar</h1>
  </div>
</div>

<!-- Card1 -->
<div class = "cardBox1">
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
  </section>

    
        
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Sidebar -->
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
