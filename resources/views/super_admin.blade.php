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
<div class = "cardBox">
    <div class="card">
      <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Sekolah</div>
          </div>
          <div class="iconBx">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAWNJREFUaEPtmdERgjAQRJeOtANbsCK1AkvTEuxEJzN8MIHAnl7IIcsnrsntvsuJ2mFnV7czv5DhfycuwjOE38HpU/AoUW9UhoMRp+BRIhEOhrYvh4JHiTJ/VwCX7N4NQLpf83LZV4YJRC5JE/vkEpd9RZhI3iVpYp/NEWaD8dbNZlmzpb2NsOvJ8DABESaGCdtarXTNWprIziRhA5Thtc6wCR8hFmEA5i8tNac0Ac0kqUr4BOAO4ECWNJU0W+AvulJ5LwBnAM9cUCL8MJhNa0YznGpKZo+sYesPdhENJ68joCXCMrxwlkWYHHYW2dRwW3r/qi29VIz1dRkmEhPhmlOaAGCSbKql2Y+5uUddGSb6o9kZFuECHbX0IBidYZ3hcQIaWms9eGhKb31KE/OjiaTaGW7ihthUhr2GFhF2E4kIf/PPQxNUXpvKsFeSUdcR4ahkvOoSYa8ko64jwlHJeNW1O8IfNcq3PbIQexoAAAAASUVORK5CYII="/>
          </div>
        </div>
        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Guru</div>
          </div>
          <div class="iconBx">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA7xJREFUaEPtmu2xDUEQht8bASJABIgAESACRIAIEAEiQASIABEgAkSADNRTtXNqjZ6dntmeU+fcs111/5ydj377e7rvmU6Mzk4MrzbA513jm4YHafi6pJuS7kq6Mv1x1Y/p772kz5K+Drp/d+xoDQPutaRbTiCfJD2chODc0rZsJOBHkl62sbNb/VjSq869i9tGAUarD1Yy/GbS9spj/t0+AjBaRbsRhJbRdhhFAyYovStw92cycfw0BSeCGf4NqAuFffckEdRCKBLwRUlfZhF4zuCHycR/F7hmLyZ8x/hOJL8hqbS3SRCRgJ9Jemrc/lwS3zwUccbeghbaxUTn9M34rQYcc7+WLeI3tLyaojRMvv1ucAOTrcUEQkN4OV2NyM9RgAk8HzMOfxb82aMl/PZytvC2JALeKooCbPkegYqo3UNE5TyAPVlRyOx4GAm4JVjlQrEEuOa8vQA+1xq2fBg/JND0EAGQQDing/Lhk4vSaCIqf0blc9OyooIWh0dUSRFnLLpQJGDqYbSc508YIM3wsF+qpXlSWmmMfE4xcnC1NMCWXkswzNOR4oGSE6KETK8lBGbRwb6WErMn9R5OoHnq3e/JR7M9bwO6Jv+xEOnD+eE86l90gg4pI627RwLmPvIz2qZF6yFatfTCKFqG0GjAienUyiGoEZzSe5fgRTAjis9bP0PAcui+AA8D0HrwBrhVYoX1+C4FCOabt31qV1C8YOYUHOG+HKlhgJGK0vyoBszzHcD4NymqtVVknh8BmEqJbqV3fuQBaq0hqNEEWNXmWQMYcy3Vv72gPPtIc+Tprtq6FzDmC9hW//QA8qzBvHmMNJt5D2BMl3FKqdhPDFNEpPmvB0Rak+bHtWIFDdMFaQLdChiN0o4tgQVkehF1mdxMMtyRXlIl8M2gWwDDAGAtM2ZQRu2Mf40gyk0EaQ3c0DCadgm4BTBmbD3QKQ/5PTxnZpLD1ElR+RiGZe6XlRew1ZXkIsDyzSXdANVjZaQlC7Srq+kFjCnneRYzxrxHazaXE5rGjHPzRhCAXiQP4NJwi7QwymdrfOPTpMWcqsM7D2CrZUM0Hl1Z1UCj0Tx6V/9FwgPYmgKENtZqyArfrYZhdY5cA1yaKFzaY6AqyYMA9sv4uDhHrgG2ovMhmHPCaZn1YrSuAbbMxp3zOk21ZZs1R150txrgYXPaFlQLa5v52wBn0myWYJDmvMc081fTMEErz7cEilVdBy8ax7pm/mqAHXce15IN8HHpq53bTcPtMjuuHZuGj0tf7dz+BaTNuz1qZ+fFAAAAAElFTkSuQmCC"/>
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Tendik</div>
          </div>
          <div class="iconBx">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA7xJREFUaEPtmu2xDUEQht8bASJABIgAESACRIAIEAEiQASIABEgAkSADNRTtXNqjZ6dntmeU+fcs111/5ydj377e7rvmU6Mzk4MrzbA513jm4YHafi6pJuS7kq6Mv1x1Y/p772kz5K+Drp/d+xoDQPutaRbTiCfJD2chODc0rZsJOBHkl62sbNb/VjSq869i9tGAUarD1Yy/GbS9spj/t0+AjBaRbsRhJbRdhhFAyYovStw92cycfw0BSeCGf4NqAuFffckEdRCKBLwRUlfZhF4zuCHycR/F7hmLyZ8x/hOJL8hqbS3SRCRgJ9Jemrc/lwS3zwUccbeghbaxUTn9M34rQYcc7+WLeI3tLyaojRMvv1ucAOTrcUEQkN4OV2NyM9RgAk8HzMOfxb82aMl/PZytvC2JALeKooCbPkegYqo3UNE5TyAPVlRyOx4GAm4JVjlQrEEuOa8vQA+1xq2fBg/JND0EAGQQDing/Lhk4vSaCIqf0blc9OyooIWh0dUSRFnLLpQJGDqYbSc508YIM3wsF+qpXlSWmmMfE4xcnC1NMCWXkswzNOR4oGSE6KETK8lBGbRwb6WErMn9R5OoHnq3e/JR7M9bwO6Jv+xEOnD+eE86l90gg4pI627RwLmPvIz2qZF6yFatfTCKFqG0GjAienUyiGoEZzSe5fgRTAjis9bP0PAcui+AA8D0HrwBrhVYoX1+C4FCOabt31qV1C8YOYUHOG+HKlhgJGK0vyoBszzHcD4NymqtVVknh8BmEqJbqV3fuQBaq0hqNEEWNXmWQMYcy3Vv72gPPtIc+Tprtq6FzDmC9hW//QA8qzBvHmMNJt5D2BMl3FKqdhPDFNEpPmvB0Rak+bHtWIFDdMFaQLdChiN0o4tgQVkehF1mdxMMtyRXlIl8M2gWwDDAGAtM2ZQRu2Mf40gyk0EaQ3c0DCadgm4BTBmbD3QKQ/5PTxnZpLD1ElR+RiGZe6XlRew1ZXkIsDyzSXdANVjZaQlC7Srq+kFjCnneRYzxrxHazaXE5rGjHPzRhCAXiQP4NJwi7QwymdrfOPTpMWcqsM7D2CrZUM0Hl1Z1UCj0Tx6V/9FwgPYmgKENtZqyArfrYZhdY5cA1yaKFzaY6AqyYMA9sv4uDhHrgG2ovMhmHPCaZn1YrSuAbbMxp3zOk21ZZs1R150txrgYXPaFlQLa5v52wBn0myWYJDmvMc081fTMEErz7cEilVdBy8ax7pm/mqAHXce15IN8HHpq53bTcPtMjuuHZuGj0tf7dz+BaTNuz1qZ+fFAAAAAElFTkSuQmCC"/>
          </div>
        </div>

        <div class="card">
          <div>
            <div class = "numbers">1,504</div>
            <div class="cardName">Jumlah Siswa</div>
          </div>
          <div class="iconBx">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAABJtJREFUaEPtmsuOT0EQxr/hAVgIK8ETYCkk2LtuRYIHcNvZuG/s3B4Aidi67pEQSzwBYkUkeACX/DidtDNdp6vP6XP+M2YqOcn8J32pr77q6urqntMSk7klhlfLgP93xpcZrszwRkk7JW1pPn7zxfJeEt+b5nve/K6syt/hxmAYQPslnUqA84LAANckPawNviZggJ6XdNSLytnutqSLtYDXALxa0tURgLbtAfDTkr45DZVsNhTwAUm3JAF6CgHsMUkP+k42BDCssk5nIaxv2C6WPoBh876kXcWz1e0Ay7Bd5OKlgAH7tNli6qrfbzS2st0loEsBwyzrdiEJTB/0KlQCmHVz0jvwxO2ue+OJFzCswu5CFljORm8PYNbtuwm3nr5GJXhtyq1nD2A2/CN9tZi4351cApQDTLoIu4tJYJlcPCk5wIuJ3QCwk+UuwFOw+70JNASbcEQMioejJAkOB5INBW5mstwFmLSR9DEWFFxVMLHVlHHY5vi8mRKg0WmzY37STsaeJ12AWbvtwzrHtGeScPUSi8cT43Io7gXaVvpC07/L8HgLLLsBW+4cuwoTl7galQz6YLChgn6M1bV7JN3aYhggHPtieWvk0LRlnYVyTuiD24ayDR7B37WFOUmK8Ji2x3GwYN5/xAKcSiPd6VttVI7x3PpagHE7im+xuFI3h3JjNEl5JEto3hHWApwKWFsdbrm+cTHS0deSnvREt0cS8xHY2LI+ZsYBGMfWWJKBywL8KzFBLkk5LIkIvCLq+1jSvkLQjyTtjfr8bILT3Y5xMPBXj861AMMsFo3BhvlLyjFW2QjQBKgupl0k1QJ8XNINg4HPktY5Wf4kaa3R9oSkmx3jTAr4rKRLhjKws9IJ+IfhJXQ/J+nyWIBxz/a+1hW0CDKs15S8lLTDCfiFpO1GW9a1FQS5yiFIxvIhdfNRc1tqB5sweZeibWyW4XLBL1WRKdqWUhs5eTTpXJcQdA5JWiPplaQrPbYmQJ+RtE3SF0n3HDXowYlHaiMnNcStF6Lgzrh1LEWppefwsFCAF+nalUykApd5zpwhepYZt5bZgEWD0gKAec6cIeBUGtyrAGC5SnJtzAhwqiqDKr1KPHRMFfFc9d8JDGDVy3sX8dDZYrnoPmck8NY916AyrcUy/59lALNceXAhHmC4DsEqVTSbxXpO5QjoSUkJj+wsDubOuMEbrcs0BofpebWjkdwYsGRzqScWroqMFzD6d12X4mLUvMYUrmqTteZmbtfzixLAgCFY8QYrJb2eIDgsBJtUUK2LeN5yuS/pSwEzOQU+q/qPi5P51GIbVhnPeiVE6Zh6lruoXwo4BDHWrMU0bYa8pCPwUGBnvbZvPmKHgFnauMHmUsuct3mfQHDKwiv4OJS3C/Kccig2wBRf+9ST0qN3jbwPw7ECrB3YrnHBljNw2HpgNfu0wRpsKODg4rA99iuBoZdwf2xQA3AwpueCy8Niuw1ACVzmrX7JoDUBx8CtCy6vbqx1vCZclHv7ZduNATieFNZDICIY8btdDQVc/ECc4FaFzRT6sQFnLT51g2XAU1t86vmWGZ7a4lPP9xv9CO89rOs8ugAAAABJRU5ErkJggg=="/>
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
