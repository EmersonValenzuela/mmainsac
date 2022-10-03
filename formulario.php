    <style>
        #contenedor-form{
            display: flex;
    justify-content: flex-end;
    margin-top: -379px;
    transform: translateX(-3%);
        }
        #form-solicitud {
    margin: 5px;
    background: linear-gradient(#0075c2,#0099c9);
    width: 350px;
    height: auto;
    padding: 15px;
    -webkit-box-shadow: -6px 3px 0px 2px rgba(0,0,0,0.53);
    -moz-box-shadow: -6px 3px 0px 2px rgba(0,0,0,0.53);
    box-shadow: -6px 3px 39px 2px rgba(0,0,0,0.53);
}
@media (max-width: 992px){
#form-solicitud {
    margin: 5px;
    border-radius: none!important;
    width: 600px;
    height: auto;
}
#contenedor-form {
    display: flex;
    justify-content: center;
    margin-top: 0px;
    transform: translateX(0%);
}
    </style>

    <div class="container-fluid" id="contenedor-form">
                          <form id="form-solicitud" method="post">
                          <div class="form-row">

                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nombres y apellidos</label>
                              <input class="form-control" placeholder="Nombres y apellidos" name="nombres">
                             </div>

                             <div class="form-group col-md-12">
                                <label for="inputPassword4">Descripción</label>
                              <textarea class="form-control" id="textarea-msm" rows="5" cols="100" name="descripcion"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputEmail4">E-mail</label>
                              <input type="email" class="form-control" placeholder="Email" name="correo" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Teléfono</label>
                              <input type="text" class="form-control" placeholder="Teléfono" name="tel" maxlength='9'>

                            </div>
                            <!--
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Distrito</label>
                              <input class="form-control" placeholder="Distrito" name="distrito">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Dirección</label>
                              <input class="form-control" placeholder="Dirección" name="direccion">
                            </div>
                            -->
                          </div>
                          <input type="submit" class="btn btn-primary" style='width:100%' value="enviar solicitud" name='enviar_solicitud'>
                          
                        </form>
                </div>
<?php
if(isset($_POST['enviar_solicitud'])){
        header("Content-type: text/html;charset=\"utf-8\"");
$header = 'From: '.'MMAINSAC'."\r\n".
'Reply-To:'.'M. MAIN S.A.C'."\r\n".
'X-Mailer: PHP/'.phpversion();

$mensaje = "CLIENTE: " . $_POST['nombres'] . ",\r\n";
$mensaje .= "DESCRIPCIÓN: " . $_POST['descripcion'] . " \r\n";
$mensaje .= "TELÉFONO: " . $_POST['tel'] . " \r\n";
$mensaje .= "CORREO: " . $_POST['correo'] . " \r\n";


$para = 'beto1perk@gmail.com, ingasergio24@gmail.com';

mail($para,"NUEVO CORREO!",$mensaje, $header);

echo "<script>alert('En seguida lo contáctaremos.');
      </script>";
}
?>
