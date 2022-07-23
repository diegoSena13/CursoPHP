</head>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title><?php echo SITENAME; ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  <link href="<?php echo URLROOT;  ?>css/bootstrap.min.css" rel="stylesheet">


  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  <link href="dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="background-color:#f5f5f5;">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap" />
      </svg>
    </a>

    <h1>Biblioteca</h1>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">sign out</button>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#f5f5f5;">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="btn btn-dark d-grid gap-2" aria-current="page" href="<?php echo URLROOT; ?>Dashboard/dashboard">
                <span data-feather="home" class="align-text-bottom"><i class="bi bi-infinity"></i></span>
                Inicio
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="btn btn-dark d-grid gap-2" href="<?php echo URLROOT; ?>Estudiante/index">
                <span class="align-text-bottom"><i class="bi bi-person-lines-fill"></i></span>
                Estudiante
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="btn btn-dark d-grid gap-2" href="<?php echo URLROOT; ?>Libro/index">
                <span class="align-text-bottom"><i class="bi bi-book"></i></span>
                Libros
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="btn btn-dark d-grid gap-2" href="<?php echo URLROOT; ?>Editorial/index">
                <span data-feather="users" class="align-text-bottom"><i class="bi bi-building"></i></span>
                Editorial

              </a>
            </li>
            <br>
            <li class="nav-item">
            <a class="btn btn-dark d-grid gap-2" href="<?php echo URLROOT; ?>Prestamo/Control">
              <span data-feather="bar-chart-2" class="align-text-bottom"> <i class="bi bi-clipboard2-check"></i></span>
               Prestamos
            </a>
          </li>
            <!-- 
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
        </div>
      </nav>

<body>