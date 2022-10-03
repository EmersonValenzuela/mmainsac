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
                    Elevadores
                </h1>
                <div class="breadcrumbs">
                    <a href="./">Inicio</a> /
                    <span class="color-1">Elevadores</span>
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
                        Ascensor de pasajeros
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                    <h5 style='text-align:center'><a href='assets/pdf/ascensores.pdf' target='_blank'>Descargar catálogo</a></h5>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                             <?php
                            for ($i=1; $i<=4;$i++){
                            ?>
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img<?=$i?>">
                                        <img src="assets/images/ascensores/<?=$i?>.png" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de pasajeros
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
                        Ascensor panoramico
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                    <h5 style='text-align:center'><a href='http://ascensoresgots.com/catalogo-ascensor-panoramico.pdf' target='_blank'>Descargar catálogo</a></h5>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap"  data-toggle="modal" data-target="#img5">
                                        <img src="http://ascensoresgots.com/img/portfolio/img9.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Rampas de pasajeros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap"  data-toggle="modal" data-target="#img6">
                                        <img src="http://ascensoresgots.com/img/portfolio/img10.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Rampas de pasajeros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap"  data-toggle="modal" data-target="#img7">
                                        <img src="http://ascensoresgots.com/img/portfolio/img11.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Rampas de pasajeros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap"  data-toggle="modal" data-target="#img8">
                                        <img src="http://ascensoresgots.com/img/portfolio/img12.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Rampas de pasajeros
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CARGA -->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Ascensor de carga
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                    <h5 style='text-align:center'><a href='http://ascensoresgots.com/catalogo-ascensor-de-carga.pdf' target='_blank'>Descargar catálogo</a></h5>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-4 col-md-4">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img9">
                                        <img src="http://ascensoresgots.com/img/portfolio/img1.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de carga
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-4">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img10">
                                        <img src="http://ascensoresgots.com/img/portfolio/img2.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de carga
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-4">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img11">
                                        <img src="http://ascensoresgots.com/img/portfolio/img3.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de carga
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-4">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img12">
                                        <img src="http://ascensoresgots.com/img/portfolio/img4.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de carga
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HOSPITAL -->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Ascensor de hospital
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                    <h5 style='text-align:center'><a href='http://ascensoresgots.com/catalogo-ascensor-para-hospital.pdf' target='_blank'>Descargar catálogo</a></h5>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img13">
                                        <img src="http://ascensoresgots.com/img/portfolio/img13.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de hospital
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img14">
                                        <img src="http://ascensoresgots.com/img/portfolio/img14.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de hospital
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img15">
                                        <img src="http://ascensoresgots.com/img/portfolio/img15.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de hospital
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CASAS -->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Ascensor para casas
                    </div>
                    <div class="subtitle">
                        Mejor calidad!
                    </div>
                    <h5 style='text-align:center'><a href='http://ascensoresgots.com/catalogo-villa.pdf' target='_blank'>Descargar catálogo</a></h5>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img16">
                                        <img src="http://ascensoresgots.com/img/portfolio/img17.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para casas
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img17">
                                        <img src="http://ascensoresgots.com/img/portfolio/img18.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para casas
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img18">
                                        <img src="http://ascensoresgots.com/img/portfolio/img19.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para casas
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img19">
                                        <img src="http://ascensoresgots.com/img/portfolio/img20.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para casas
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--AUTOS -->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Ascensor para autos
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
                                    <div class="img-wrap" data-toggle="modal" data-target="#img20">
                                        <img src="http://ascensoresgots.com/img/portfolio/img29.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para autos
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img21">
                                        <img src="http://ascensoresgots.com/img/portfolio/img30.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para autos
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img22">
                                        <img src="http://ascensoresgots.com/img/portfolio/img31.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para autos
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img23">
                                        <img src="http://ascensoresgots.com/img/portfolio/img32.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor para autos
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ESCOMBROS -->
    <section class="game-section pb85">
        <div class="container-fluid">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Ascensor de escombros
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
                                    <div class="img-wrap" data-toggle="modal" data-target="#img24">
                                        <img src="http://ascensoresgots.com/img/portfolio/img41.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de escombros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img25">
                                        <img src="http://ascensoresgots.com/img/portfolio/img42.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de escombros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img26">
                                        <img src="http://ascensoresgots.com/img/portfolio/img43.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de escombros
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap" data-toggle="modal" data-target="#img27">
                                        <img src="http://ascensoresgots.com/img/portfolio/img44.jpg" alt="" class='imga'>
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="date">
                                            Ascensor de escombros
                                        </div>
                                    </div>
                                </a>
                            </li>
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
        <img src='assets/images/ascensores/1.png' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Pasajero: Utilice el diseño de la sala de máquinas pequeña, el host compacto y el gabinete de control de tipo delgado; el más alto 
            puede reducir el 56% del área de la sala, mejorar la tasa de utilización de los edificios y minimizar el impacto en la apariencia arquitectónica. 
            El diseño conveniente de la construcción hace que la estructura sea más razonable y brinda a los clientes un mayor uso del espacio libre.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='assets/images/ascensores/2.png' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Pasajero: Diseño innovador, excelente rendimiento no depende de si hay una habitación, sino de tecnología avanzada, para cumplir 
            con el aumento de los requisitos de eficiencia, flexibilidad y seguridad. Más independiente y gratuito, para ahorrar espacio y costo: Eje de 
            ascensor sin sala de máquinas de área más pequeña, ahorro de energía, con un mayor potencial de apreciación de la propiedad.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='assets/images/ascensores/3.png' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Pasajero
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='assets/images/ascensores/4.png' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Pasajero
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img5">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img9.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor panorámico GG002 - Descripción: La serie de ascensores turísticos GOTS es un nuevo tipo de elevador de pasajeros, es una producción para satisfacer la búsqueda humana de una vida más hermosa y delicada. Las personas pueden disfrutar de la hermosa vista cuando están arriba o abajo en el proceso de construcción.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img6">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img10.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor panorámico GG005 - Descripción: La serie de ascensores turísticos GOTS es un nuevo tipo de elevador de pasajeros, es una producción para satisfacer la búsqueda humana de una vida más hermosa y delicada. Las personas pueden disfrutar de la hermosa vista cuando están arriba o abajo en el proceso de construcción.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img7">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img11.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor panorámico GG003 - Descripción: La serie de ascensores turísticos GOTS es un nuevo tipo de elevador de pasajeros, es una producción para satisfacer la búsqueda humana de una vida más hermosa y delicada. Las personas pueden disfrutar de la hermosa vista cuando están arriba o abajo en el proceso de construcción.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img8">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img12.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor Panorámico: YMD-GG007 - Descripción: La serie de ascensores turísticos GOTS es un nuevo tipo de elevador de pasajeros, es una producción para satisfacer la búsqueda humana de una vida más hermosa y delicada. Las personas pueden disfrutar de la hermosa vista cuando están arriba o abajo en el proceso de construcción.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img9">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img1.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Carga: La serie GOTS de carga / elevador de manifiesto utiliza la innovación tecnológica para garantizar que la máquina funcione sin problemas. Bajo la abrazadera de seguridad y la válvula de bloqueo, doble garantizar el uso seguro de la discreción. El elevador se puede fabricar de acuerdo con las demandas del cliente, es particularmente adecuado para las necesidades de la empresa.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img10">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img2.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Carga: A101 - Descripción: La serie GOTS de carga / elevador de manifiesto utiliza la innovación tecnológica para garantizar que la máquina funcione sin problemas. Bajo la abrazadera de seguridad y la válvula de bloqueo, doble garantizar el uso seguro de la discreción. El elevador se puede fabricar de acuerdo con las demandas del cliente, es particularmente adecuado para las necesidades de la empresa.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img11">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img3.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Carga: A102 - Descripción: La serie GOTS de carga / elevador de manifiesto utiliza la innovación tecnológica para garantizar que la máquina funcione sin problemas. Bajo la abrazadera de seguridad y la válvula de bloqueo, doble garantizar el uso seguro de la discreción. El elevador se puede fabricar de acuerdo con las demandas del cliente, es particularmente adecuado para las necesidades de la empresa.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img12">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img4.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Caja de Operaciones


        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img13">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img13.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Hospital: La serie GOTS de elevadores hospitalarios está especialmente diseñada para centros médicos hospitalarios, hogares de ancianos y centros de salud, etc. No solo se utiliza para el transporte de pasajeros, sino también para camas y equipo médico de camilla de ambulancia aleatoria, o para otros fines después de una pequeña modificación. El elevador médico es un tipo especial de elevador, debido a su uso especial del medio ambiente y tiene unos requisitos estrictos en cuanto al rendimiento de su función. La fabricación de elevadores médicos de Xizixiao es para construir un espacio cómodo y cuidado para los pasajeros. Cada detalle es más humano, atento y considerado.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img14">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img14.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Configuración de la cabina: Descripción: La serie GOTS de elevadores hospitalarios está especialmente diseñada para centros médicos hospitalarios, hogares de ancianos y centros de salud, etc. No solo se utiliza para el transporte de pasajeros, sino también para camas y equipo médico de camilla de ambulancia aleatoria, o para otros fines después de una pequeña modificación. El elevador médico es un tipo especial de elevador, debido a su uso especial del medio ambiente y tiene unos requisitos estrictos en cuanto al rendimiento de su función. La fabricación de elevadores médicos de Xizixiao es para construir un espacio cómodo y cuidado para los pasajeros. Cada detalle es más humano, atento y considerado.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img15">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img15.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Panel de control del sistema de salida Descripción: La serie GOTS de elevadores hospitalarios está especialmente diseñada para centros médicos hospitalarios, hogares de ancianos y centros de salud, etc. No solo se utiliza para el transporte de pasajeros, sino también para camas y equipo médico de camilla de ambulancia aleatoria, o para otros fines después de una pequeña modificación. El elevador médico es un tipo especial de elevador, debido a su uso especial del medio ambiente y tiene unos requisitos estrictos en cuanto al rendimiento de su función. La fabricación de elevadores médicos de Xizixiao es para construir un espacio cómodo y cuidado para los pasajeros. Cada detalle es más humano, atento y considerado.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img16">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img17.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Casa EEC-01 - Descripción: La serie GOTS de sistema de conversión de frecuencia dedicado para elevadores domésticos controla con precisión el estado de funcionamiento del elevador, mejorando la experiencia cómoda para el usuario. El ruido es más pequeño, se instala más fácilmente y logra un ambiente maravilloso.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img17">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img18.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
           Ascensor de Casa: EEC-02 Descripción: La serie GOTS de sistema de conversión de frecuencia dedicado para elevadores domésticos controla con precisión el estado de funcionamiento del elevador, mejorando la experiencia cómoda para el usuario. El ruido es más pequeño, se instala más fácilmente y logra un ambiente maravilloso ... 
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img18">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img19.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
           Ascensor de Casa: EEC-03 - Descripción: La serie GOTS de sistema de conversión de frecuencia dedicado para elevadores domésticos controla con precisión el estado de funcionamiento del elevador, mejorando la experiencia cómoda para el usuario. El ruido es más pequeño, se instala más fácilmente y logra un ambiente maravilloso. 
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img19">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img20.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Casa: EEC-04 - Descripción: La serie GOTS de sistema de conversión de frecuencia dedicado para elevadores domésticos controla con precisión el estado de funcionamiento del elevador, mejorando la experiencia cómoda para el usuario. El ruido es más pequeño, se instala más fácilmente y logra un ambiente maravilloso ...
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img20">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img29.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Auto: QC-01 - Descripción: Con el desarrollo de la economía, las condiciones de vida de las personas continúan mejorando, los automóviles 
            se están convirtiendo gradualmente en una necesidad para las personas. Combinada con la investigación y el desarrollo del mercado nacional, 
            esta serie de elevadores de automóviles está aprovechando al máximo la tecnología de fabricación durante muchos años. Adoptados avanzados y 
            maduros de control preciso de la tecnología de control de velocidad del motor, alta resistencia y diseño sólido, los autos pueden evitar la 
            tracción desigual, aumentar la carga del sistema y producir ruido y fluctuaciones de las cápsulas, optimizando las características de esta serie 
            de productos en la mayor medida. Hacer la discrepancia del coche más segura y más confiable. Puede ser ampliamente utilizado en estacionamientos, 
            garajes, garajes subterráneos y otros lugares ...
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img21">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img30.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Auto: QC-02 - Descripción: Con el desarrollo de la economía, las condiciones de vida de las personas continúan mejorando, 
            los automóviles se están convirtiendo gradualmente en una necesidad para las personas. Combinada con la investigación y el desarrollo 
            del mercado nacional, esta serie de elevadores de automóviles está aprovechando al máximo la tecnología de fabricación durante muchos años. 
            Adoptados avanzados y maduros de control preciso de la tecnología de control de velocidad del motor, alta resistencia y diseño sólido, los autos 
            pueden evitar la tracción desigual, aumentar la carga del sistema y producir ruido y fluctuaciones de las cápsulas, optimizando las características 
            de esta serie de productos en la mayor medida. Hacer la discrepancia del coche más segura y más confiable. 
            Puede ser ampliamente utilizado en estacionamientos, garajes, garajes subterráneos y otros lugares.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img22">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img31.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Auto: QC-03 - Descripción: Esta serie de elevadores hidráulicos para automóviles funcionan de manera suave, cómoda y con poco ruido. 
            En comparación con el elevador de automóviles tradicional, puede ahorrar un 35% de energía con un sistema de patente y sistema de tracción de bombeo. 
            Dispositivo único de posicionamiento por infrarrojos para garantizar un transporte seguro. El elevador ha sido ampliamente utilizado en el estacionamiento, 
            tiendas de automóviles, reparaciones de automóviles, estaciones y otros lugares. 
            Podemos fabricar e instalar todo tipo de elevadores de automóviles para satisfacer sus necesidades.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img23">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img32.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Auto: QC-04 - Descripción: Esta serie de elevadores hidráulicos para automóviles funcionan de manera suave, cómoda y con poco ruido. 
            En comparación con el elevador de automóviles tradicional, puede ahorrar un 35% de energía con un sistema de patente y sistema de tracción de bombeo. 
            Dispositivo único de posicionamiento por infrarrojos para garantizar un transporte seguro. El elevador ha sido ampliamente utilizado en el estacionamiento, 
            tiendas de automóviles, reparaciones de automóviles, estaciones y otros lugares. 
            Podemos fabricar e instalar todo tipo de elevadores de automóviles para satisfacer sus necesidades.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="img24">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img41.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Escombros: ZW-01 Descripción: La durabilidad del producto y el servicio para la infraestructura es particularmente importante para 
            los clientes industriales. Podemos ayudarlo a diseñar la mejor solución y mejorar la eficiencia de su operación con nuestra amplia experiencia 
            y un alto grado de profesionalismo. 
            Estamos haciendo todo lo posible para ser impecable.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img25">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img42.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Escombros: ZW-02 Descripción: La durabilidad del producto y el servicio para la infraestructura es particularmente importante 
            para los clientes industriales. Podemos ayudarlo a diseñar la mejor solución y mejorar la eficiencia de su operación con nuestra amplia 
            experiencia y un alto grado de profesionalismo. 
            Estamos haciendo todo lo posible para ser impecable.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img26">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img43.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Escombros: ZW-03 - Descripción: La durabilidad del producto y el servicio para la infraestructura es particularmente 
            importante para los clientes industriales. Podemos ayudarlo a diseñar la mejor solución y mejorar la eficiencia de su operación con nuestra amplia experiencia y 
            un alto grado de profesionalismo. Estamos haciendo todo lo posible para ser impecable.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="img27">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src='http://ascensoresgots.com/img/portfolio/img44.jpg' width='100%'>
      </div>
      <div class="modal-header">
        <p class='pblack'>
            Ascensor de Escombros: ZW-04 - Descripción: La durabilidad del producto y el servicio para la infraestructura es particularmente importante para los 
            clientes industriales. Podemos ayudarlo a diseñar la mejor solución y mejorar la eficiencia de su operación con nuestra amplia experiencia y un alto 
            grado de profesionalismo. 
            Estamos haciendo todo lo posible para ser impecable.
        </p>
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.servitecperu.com%2Felevador%2Fescaleras.php%3Fe%3D4&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" 
width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
</div>
   <?php
   include('footer.html');
   ?>
</body>
</html>