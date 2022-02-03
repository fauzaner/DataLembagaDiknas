<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <title>Login</title>
  </head>
  <body>
  <div class="cardBox">
              <div class="row justify-content-center">
                  <div class="col-md-4 mt-4">
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button class="button" class="btn-close" data-bs-dismiss="alert">
                  </button>
              </div>
              @endif

              <main class="form-signin">
              <img class="logo-data mb-4" src="https://img.icons8.com/cotton/50/000000/doughnut-chart.png" width="50"/>
    <h1 class="h3 mb-4 fw-bold text-center">Data Warehouse</h1>
  <form action="{{ route('login') }}" method="post">
      @csrf
    <div class="form-floating">
      <input type="username" name="username" class="form-control" id="username" placeholder="Masukkan Username" autofocus required>
      <label for="username">Username</label>
      @error('username')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary rounded-pill" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2022 Dinas Pendidikan</p>
  </form>
</main>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>