<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Login</title>
  </head>
  <body>
    <center>  
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="{{asset('assets/img/data.svg')}}" class="art img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-2">
                    <h1 class="font-weight-bold">Data Warehouse</h1>
                    <h4>Login Terlebih Dahulu</h4>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-row mt-5">
                            <div class="col-lg-7">
                                <input type="username" name="username" class="form-control rounded-pill" placeholder="username" id="username" autofocus required>
                            </div>
                        </div>
                        <div class="form-row mb-3 mt-3">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="*******" id="password" class="form-control rounded-pill" required>
                            </div>
                        </div>
                    </form>
                    <a type="button" class="btn1 text-center mr-5" href="#">Login</a>
                </div>
            </div>
        </div>
    </section>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>