
<div class="barra">
        <a href="#nav" class="mobile-menu">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <nav id="nav" class="navegacion-principal contenedor">
            <a href="inicio">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicio</a>
            <a href="#">Contacto</a>
            <a href="<?php echo $url ?>registro">Registro</a>
            <?php
                 
             if (isset($_SESSION['validarIngreso']) == "ok") {    ?>
                   
            
                   <a href="<?php echo $url ?>administracion/">administracion</a>
                 <a href="<?php echo $url ?>logout/">Cerrar Sessión</a>


             <?php   }?>
                 
        

            <a href="#" class="cerrar">
                    <i class="fas fa-times"></i>
            </a>
        </nav>
    </div>