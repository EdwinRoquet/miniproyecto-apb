
<?php 

  include 'views/components/header.php';
  include 'views/components/navigation.php';

?>
<div class=" contenido">

<?php
      
      if(isset($_GET["page"])){
         if($_GET["page"] == "registro" || 
            $_GET["page"] == "reporte-crear" || 
            $_GET["page"] == "reporte-editar" || 
            $_GET["page"] == "reporte" || 
            $_GET["page"] == "administracion" || 
            $_GET["page"] == "usuario" || 
            $_GET["page"] == "inicio" ||  
            $_GET["page"] == "logout"){

             include "pages/". $_GET["page"].".php";
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


   
