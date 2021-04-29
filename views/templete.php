
<?php 

  include 'views/components/header.php';
  include 'views/components/navigation.php';

?>
<div class=" contenido">

<?php

      
      if(isset($_GET["page"])){
        $rutas = explode("/", $_GET["page"]);

          $ruta =  $rutas[0];



         if($ruta == "registro" || 
            $ruta == "crear-reporte" || 
            $ruta == "editar-reporte" || 
            $ruta == "reporte" || 
            $ruta == "atencion" || 
            $ruta == "administracion" || 
            $ruta == "usuario" || 
            $ruta == "inicio" ||  
            $ruta == "logout"){

             include "pages/". $ruta.".php";
            }else{
                include "pages/404.php";
            }

      }else{
          include "pages/inicio.php";
      }
    ?>


</div>
   
<?php 

include 'views/components/footer.php';

?>


   
