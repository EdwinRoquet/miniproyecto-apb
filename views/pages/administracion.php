<?php

if (!isset($_SESSION['validarIngreso'])) {
    echo "<script> window.location = 'registro';</script>";
    return;
}
?>

<h3 class="text-center">Panel de Administración</h3>
<div class="row">
  <div class="column column-md  side" >
   <div class="btnGrupo">
       <a href="<?php echo $url ?>reporte/" class="boton mt">Reporte</a>
       <?php 

   if ($_SESSION['rol'] == "administrador"){
   
       ?>
       <a href="<?php echo $url ?>atencion/"  class="boton mt">Atenciones</a>
       <a href="<?php echo $url ?>servicio/"  class="boton mt">Servicios</a>
       <a href="<?php echo $url ?>usuario/"  class="boton mt">Usuarios</a>
       <?php }?>
   </div>
 
  </div>
  <div class="column middle" style="background-color:#bbb;">
  Column
</div>
</div>

