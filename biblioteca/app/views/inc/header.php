<?php
error_reporting(0);
session_start();
?>
<html lang="es"></html>
</head>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title><?php echo SITENAME; ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  <link href="<?php echo URLROOT;  ?>css/sweetalert2.min.css" rel="stylesheet">
  <link href="<?php echo URLROOT;  ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URLROOT;  ?>Datatables-1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

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
  <header class="navbar sticky-top flex-md-nowrap p-0 shadow" style="background-color:#cb9ca1;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">BIBLIOTECA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <p class=""><?php echo ($_SESSION['nombre']) ?></p>
        <a class="nav-link px-3" href="<?php echo URLROOT; ?>Dashboard/signOut">Salir</a>
      </div>
    </div>



  </header>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#ffcdd2;">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>Dashboard/dashboard">
                <span data-feather="home" class="align-text-bottom"><i class="bi bi-infinity"></i></span>
                Inicio
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>Estudiante/index">
                <span class="align-text-bottom"><i class="bi bi-person-lines-fill"></i></span>
                Estudiante
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>Libro/index">
                <span class="align-text-bottom"><i class="bi bi-book"></i></span>
                Libros
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>Editorial/index">
                <span data-feather="users" class="align-text-bottom"><i class="bi bi-building"></i></span>
                Editorial
              </a>
            </li>
            <br>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
              </a>
            </h6>
            <br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>Prestamo/index">
                <span data-feather="bar-chart-2" class="align-text-bottom"> <i class="bi bi-clipboard2-check"></i></span>
                Prestamos
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>penalizacion/index">
                <span data-feather="bar-chart-2" class="align-text-bottom"><i class="bi bi-bricks"></i></span>
                Penalizacion
              </a>
            </li>
        </div>
      </nav>

<body style="background-color:#e0e0e0;">