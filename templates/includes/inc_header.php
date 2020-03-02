<!DOCTYPE html>
<html lang="es">
<head>
  <base href="">
  <meta charset="UTF-8">

  <title><?php echo isset($d->title) ? $d->title .' - '.get_sitename() : 'Bienvenido - '.get_sitename()  ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="<?php echo CSS.'styles.css' ?>">
  <style>
    .btn {
      border-radius: 2px;
    }

    .bg-gradient {
      background: rgba(38, 38, 38, 1);
      background: -moz-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -webkit-gradient(left top, right top, color-stop(0%, rgba(38, 38, 38, 1)), color-stop(100%, rgba(28, 33, 28, 1)));
      background: -webkit-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -o-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -ms-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: linear-gradient(to right, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#262626', endColorstr='#1c211c', GradientType=1);
    }
  </style>
</head>

<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-gradient' : 'bg-light' ?>" style="padding: 0px 0px;">

<nav id="main-nav" style="scroll-behavior: smooth;font-size:16px;">
    <a href="<?= URL ?>" id="logo">
      <img src="<?PHP echo FONTS.'logo_ciis.svg' ?>" alt="ciistacna">
    </a>
    <input type="checkbox" id="responsive-status-menu" name="resposive-status-menu"> 
    <label for="responsive-status-menu" class="responsive-toggle-menu"> <span class="icon-toggle"></span> </label>

    <div class="responsive-menu">
        <ul class="menu">
            <li class="item with-submenu"> <a href="javascript:void(0);">Actividades</a>
                <ul class="submenu" style="width: 180px;">
                    <li class="subitem"><a href="#">TALLERES DE VERANO</a></li>
                </ul>
            </li>            
            <li class="item with-submenu"> <a href="javascript:void(0);">Eventos Anteriores</a>
                <ul class="submenu">
                    <li class="subitem"><a href="http://ciistacna.com/2019/" style="width: 190px;">XX CIIS</a></li>
                    <li class="subitem"><a href="http://ciistacna.com/2018/" style="width: 190px;">XIX CIIS</a></li>
                </ul>
            </li>
        </ul>
        <a href="https://www.facebook.com/ciistacna/" id="call-to-action" target="_blank">
        <i class="fab fa-facebook" style="font-size: 28px;"></i> &nbsp; Síguenos en facebook</a>
    </div>
</nav>
<!-- ends inc_header.php -->

