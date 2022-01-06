<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/admins.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    bscss
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
  <div class="text">Dashboard</div>
    <div class="jumbotron p-5 mb-4">
        <div class="row">
          <div class="col-md-6">
            <div class="text-data container-fluid py-5">
            <img class="icon-data" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAlhJREFUaEPtmP0xRTEQxc+rgA5QASqgA1SAClABKkAFqAAdUAEqQAdUwPxmkplM5t7cTW7ue/NMMpN/3svd3XP2K5uZlnzNltx+NQCL9mDzwH/xwI6kXUnr0Q7xfUoK97Okl7EEjAmhQ0n7bo+x41ES+75ESAmAc0mnklZLFCa++ZZ0LekyR24OgC1JDy5EcnTkniXMDiS9WT60AjiSdJVg/UsSMY1Sto/10AafHxDBJmfWeozEG8cutJI4LABQ/Nph/I+kO7dNbHVYAhDIYa9E/wNi25HRC8ICgATbiyTcSLqQhJIai3xC3kkk7GmoSFgAfERxj2thfoqFJ24DwYTiRkqRBcBvJGCeAFCdtLEEAEJ9uasZQr48x4RPAgAlGE8o0YDGJDENkdDp6yuTAQiZIlbDMkpZ5be4jFI2wzJKhRtacwEwZMSY/6sDOHNXib4mVGosXiO3aJjhqg7ACyRuuczRUeMmZAVBMyT06DW+NMdVbzIAoZGACK/TJORmhOLdJb6/ZmA4O14LAWBl3HKuARhyaevEHXFEzrRO3JdgcVJ1nWudOFGeqveB1okDtlsnLhloLN9YOq61aFTPgaUDQIkMr87z7MRcsZNDj4XNrmeVec3EVZ5VYICZt+vhacqZmArF+BmPpvZpJzjJ4IKxfYNL7U6M8QxMeD+5LCHkBcAGAmuPkrGBxD2EmV46cgB4RTwB8rxeOkb2MQrr5BbyzasEgBfuZ+L43dSs3B0kUcOZOOv7MQBCRTVn4oUAyFJa83AtD9S0KUtWA5BF1wSHmwcmIDVL5B/s56QxRIf42AAAAABJRU5ErkJggg=="/>
            <h1 class="text-label display-5 fw-bold">Unggahan Data</h1>
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
    
    <h4 class='judul-formulir'>Isi Data</h4>
    <p class='title-formulir'>Pada bagian ini, Wajib cantumkan data dengan benar.</p>
    <hr class='my-4'>
    <!-- Form -->
    <form action="" method="post">

      <!-- Form Nama Lengkap -->
      <div class="form-group row">
        <label for="nama lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="th_ajaran" placeholder="Masukkan Nama Lengkap">
        </div>
      </div>

      <!-- Form NIK -->
      <div class="form-group row">
        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK">
        </div>
      </div>

      <!-- Form Jabatan -->
      <div class="form-group row">
        <label for="jabatan" class="col-sm-3 col-form-label">Masukkan Jabatan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
        </div>
      </div>

      <!-- Form No Hp -->
      <div class="form-group row">
        <label for="noHp" class="col-sm-3 col-form-label">No HP</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nohp" placeholder="Masukkan NoHp">
        </div>
      </div>

      <!-- Form Lembaga Sekolah -->
      <div class="form-group row">
        <label for="lembagasekolah" class="col-sm-3 col-form-label">Lembaga Sekolah</label>
        <div class="col-sm-8">
          <select class="form-control" name="lembagasekolah">
            <option value="">Pilih Lembaga</option>
            <option value="IPA">Dinas Pendidikan Kabupaten Blitar</option>
            <option value="IPS">Kantor Kementrian Agama Kabupaten Blitar</option>
          </select>
        </div>
      </div>

      <!-- Form Jenjang Sekolah -->
      <div class="form-group row">
        <label for="jenjang" class="col-sm-3 col-form-label">Jenjang Sekolah</label>
        <div class="col-sm-8">
          <select class="form-control" name="jenjang">
            <option value="">Pilih Jenjang Sekolah</option>
            <option value="TK">TK</option>
            <option value="RA">RA</option>
            <option value="SD">SD</option>
            <option value="MI">MI</option>
            <option value="SMP">SMP</option>
            <option value="MTS">MTS</option>
            <option value="MA">MA</option>

          </select>
        </div>
      </div>

      <!-- Form Pilih NPSN -->
      <div class="form-group row">
        <label for="agama" class="col-sm-3 col-form-label">Pilih Agama</label>
        <div class="col-sm-8">
          <select class="form-control" name="agama">
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
          </select>
        </div>
      </div>

      <!-- Form Luas Lahan Sekolah -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Form Luas Bangunan Sekolah -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Form Sudah Terakreditasi -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Form Tahun Akreditasi -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Form Predikat Akreditasi -->
      <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="almt_peserta" rows="3" placeholder="Masukkan Alamat"></textarea>
        </div>
      </div>

      <!-- Tombol Daftar Sekarang -->
      <div class="form-group row">
        <label for="submit" class="col-sm-3 col-form-label"></label>
        <div class="col-sm-5">
          <input class="btn btn-primary rounded-pill" type="submit" name="submit" value="Daftar Sekarang">
        </div>
      </div>

    </form>
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