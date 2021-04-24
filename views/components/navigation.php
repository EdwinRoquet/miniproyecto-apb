<div class="barra">
        <a href="#nav" class="mobile-menu">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <nav id="nav" class="navegacion-principal contenedor">
            <a href="inicio">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicio</a>
            <a href="#">Contacto</a>
            <a href="registro">Registro</a>
            <?php
                 
                    if (isset($_SESSION['validarIngreso']) == "ok") {    
                        echo '<a href="reporte">Reporte</a>';
                        echo '<a href="logout">Cerrar Sessión</a>';
                     }
                 
                
                 if (isset($_SESSION['rol'])) {
                    if ($_SESSION['rol'] == "administrador" ) {
                        echo '<a href="administracion">administracion</a>';
                        echo '<a href="logout">Cerrar Sessión</a>';
                      }
                  
                 }
                 
            
            ?>

            <a href="#" class="cerrar">
                    <i class="fas fa-times"></i>
            </a>
        </nav>
    </div>