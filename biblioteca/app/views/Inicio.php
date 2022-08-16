<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title><?php echo SITENAME; ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">


  <link href="<?php echo URLROOT; ?>css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?php echo URLROOT; ?>css/signin.css" rel="stylesheet">
</head>

<body class="text-center" style="background-image:url(<?php echo URLROOT; ?>media/13663.jpg);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
      </div>
      <div class="col-4">
        <main class="form-signin w-100 m-auto">
          <form action="<?php echo URLROOT ?>Inicio/openMenu" method="post">
            <img class="mb-4" src="<?php echo URLROOT; ?>media/education_books_library_icon_149685.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-bold">Please sign in</h1>

            <div class="form-floating">
              <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" name="telefono" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
              <label class="text-white">
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <input type="submit" class="btn btn-danger" value="Ingresar">
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
          </form>
        </main>
      </div>
      <div class="col-4">

      </div>
    </div>
  </div>


</body>

</html>