<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Laman Login!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form action="/login/ceklogin" method="POST">
        @csrf
                @if (session()-> has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <b>Berhasil logout</b>
                    <strong>{{session('alert')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
      <div class="card-body">
      <img class="mb-4" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2020/9/24/25a5b825-b00f-4cc8-a7a7-843e60577b9f.jpg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Hai, Silahkan melakukan login! 🦄🌈</h1>
      <label for="inputEmail" class="sr-only">No Hp</label>
      <input type="no_hp" name="no_hp" id="inputEmail" class="form-control" placeholder=" No Hp" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" href="/home">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy;Praktikum PBW 2022</p>
    </form>
  </body>
</html>