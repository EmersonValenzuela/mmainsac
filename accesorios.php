<!DOCTYPE html>
<html lang="es">
<?php
include('header.html');
?>
    <!-- PAGE NAME START -->
    <section class="page-name parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
        <div class="container">
            <div class="row">
                <h1 class="page-title">
                    Accesorios
                </h1>
                <div class="breadcrumbs">
                    <a href="./">Inicio</a> /
                    <span class="color-1">Acessorios</span>
                </div>
            </div>
        </div>
    </section>
    <style>
                    .img-wrap{
                        border-radius:0px!important;
                        width:100%!important;
                        height:215px!important;
                    }
                </style>
    <!-- PAGE NAME END -->
    <!-- SECTION START -->
    <style>
        .pb85{
            margin-top: 30px
        }
    </style>
    <?php
include('formulario.php');
?>
    <!-- PASAJEROS -->
    <section class="game-section pb85" style="margin-top: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Modelos de pisos y techos
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img1">
                                        <img src="https://ascensoresgots.com/pisos.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Accesorio
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                            for ($i=2; $i<=4; $i++){
                            ?>
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img<?=$i?>">
                                        <img src="https://ascensoresgots.com/pisos<?=$i?>.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Accesorio
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PANORAMICO-->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Modelos de botoneras
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                             <?php
                            for ($i=5; $i<=7; $i++){
                            ?>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap"  data-toggle="modal" data-target="#img<?=$i?>">
                                        <img src="https://ascensoresgots.com/pisos<?=$i?>.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Modelos de botoneras
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<div class="modal" id="img1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='https://ascensoresgots.com/pisos.jpg' width='100%'>
      </div>
    </div>
  </div>
</div>
<?php
for ($i=2; $i<=7; $i++){
?>
<div class="modal" id="img<?=$i?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='https://ascensoresgots.com/pisos<?=$i?>.jpg' width='100%'>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

   <?php
   include('footer.html');
   ?>
</body>
</html>