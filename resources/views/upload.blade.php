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
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
  </div>
<section class="home-section">
    <div class="jumbotron1 p-5 mb-4">
            <img class="icon-data" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAlhJREFUaEPtmP0xRTEQxc+rgA5QASqgA1SAClABKkAFqAAdUAEqQAdUwPxmkplM5t7cTW7ue/NMMpN/3svd3XP2K5uZlnzNltx+NQCL9mDzwH/xwI6kXUnr0Q7xfUoK97Okl7EEjAmhQ0n7bo+x41ES+75ESAmAc0mnklZLFCa++ZZ0LekyR24OgC1JDy5EcnTkniXMDiS9WT60AjiSdJVg/UsSMY1Sto/10AafHxDBJmfWeozEG8cutJI4LABQ/Nph/I+kO7dNbHVYAhDIYa9E/wNi25HRC8ICgATbiyTcSLqQhJIai3xC3kkk7GmoSFgAfERxj2thfoqFJ24DwYTiRkqRBcBvJGCeAFCdtLEEAEJ9uasZQr48x4RPAgAlGE8o0YDGJDENkdDp6yuTAQiZIlbDMkpZ5be4jFI2wzJKhRtacwEwZMSY/6sDOHNXib4mVGosXiO3aJjhqg7ACyRuuczRUeMmZAVBMyT06DW+NMdVbzIAoZGACK/TJORmhOLdJb6/ZmA4O14LAWBl3HKuARhyaevEHXFEzrRO3JdgcVJ1nWudOFGeqveB1okDtlsnLhloLN9YOq61aFTPgaUDQIkMr87z7MRcsZNDj4XNrmeVec3EVZ5VYICZt+vhacqZmArF+BmPpvZpJzjJ4IKxfYNL7U6M8QxMeD+5LCHkBcAGAmuPkrGBxD2EmV46cgB4RTwB8rxeOkb2MQrr5BbyzasEgBfuZ+L43dSs3B0kUcOZOOv7MQBCRTVn4oUAyFJa83AtD9S0KUtWA5BF1wSHmwcmIDVL5B/s56QxRIf42AAAAABJRU5ErkJggg=="/>
            <h1 class="text-label display-6 fw-bold">Unggahan Data</h1>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
      </ol>
    </nav>

    <section class="box-formulir">
    <div class="container">
    <h4 class='judul-formulir'>Upload Data</h4>
    <p class='title-formulir'>Pada bagian ini, Wajib upload data dengan benar.</p>
    <hr class='my-4'>
    <!-- Form -->
    <form class="form-isi" action="" method="post">

      <!-- Form Nama Lengkap -->
      <div class="form-group row">
        <label for="nama lengkap" class="col-sm-3 col-form-label">Profil Umum</label>
        <div class="col-sm-8">
          <input type="text" class="form-control rounded-pill" name="th_ajaran" placeholder="Masukkan Nama Lengkap">
        </div>
      </div>

      <!-- Form Upload Daftar Pendidik & Kependidikan -->
      <div class="form-group row">
        <label for="nik" class="col-sm-3 col-form-label">Daftar Guru</label>
        <div class="col-sm-8">
          <input type="text" class="form-control rounded-pill" name="nik" placeholder="Masukkan NIK">
        </div>
      </div>

      <!-- Form Upload Daftar Pendidik & Kependidikan -->
      <div class="form-group row">
        <label for="nik" class="col-sm-3 col-form-label">Daftar Tenaga Kependidikan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control rounded-pill" name="nik" placeholder="Masukkan NIK">
        </div>
      </div>

      <!-- Form Upload Peserta Didik -->
      <div class="form-group row">
        <label for="jabatan" class="col-sm-3 col-form-label">Peserta Didik</label>
        <div class="col-sm-8">
          <input type="text" class="form-control rounded-pill" name="jabatan" placeholder="Masukkan Jabatan">
        </div>
      </div>
    </form>
    </div>
  </section>
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