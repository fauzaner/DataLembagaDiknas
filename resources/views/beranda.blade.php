<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<title> Responsive Sidebar Menu</title>-->
    <link rel="stylesheet" href="{{asset('assets/css/admins.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Data Lembaga</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="admin-dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
       <a href="logout.php">
         <i class='bx bx-log-out' ></i>
         <span class="links_name">LogOut</span>
       </a>
       <span class="tooltip">LogOut</span>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>

      
      <div class="jumbotron p-5 mb-4">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
        <div class="text-dinas container-fluid py-5">
          <h1 class="display-5 fw-bold"><img class="Logo" src="{{asset('assets/img/Logo.png')}}">&nbsp; Dinas Pendidikan Kabupaten Blitar</h1>
        </div>
          </div>
        </div>
      </div>
</div>
<div class="jumbotron1 p-5 mb-5">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
        <div class="text container-fluid py-5">
          <h1 class="display-5 fw-bold">Selamat Datang</h1>
        </div>
          </div>
        </div>
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
    </section>


  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>