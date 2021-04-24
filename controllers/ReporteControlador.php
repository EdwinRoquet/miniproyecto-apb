<?php

class ReporteControlador {

  
  //Metedo para registrar usuarios
 static public function ctrRegistroInfo(){

    

    if(isset($_POST["asunto"])){
     

        $table = "reportes";
        
        $data = array(
            "asunto" => $_POST["asunto"],
            "descripcion" => $_POST["descripcion"],
            "tipo_servicio" => $_POST["tipo_servicio"],
            "fecha" => $_POST["fecha"],
            "usuario_id" => $_POST["usuario_id"],
            "codigo" => $_POST["usuario_id"],
        );

        $resultado = Reporte::mdlRegistro($table, $data);

        return $resultado;

    }

}

// mostrar

static public function ctrMostarRegistroInfo( $item, $value){

    $table = "reportes";
    $result = Reporte::mdlMostrarRegistroInfo($table, $item, $value);
    return $result;
    
}


static public function ctrActualizarRegistro(){

    if (isset($_POST["asunto"])) {
       
      $table = "reportes";

   $data = array(
    "asunto" => $_POST["asunto"],
    "descripcion" => $_POST["descripcion"],
    "tipo_servicio" => $_POST["tipo_servicio"],
    "fecha" => $_POST["fecha"],
    "usuario_id" => $_POST["usuario_id"],
    "codigo" => $_POST["usuario_id"],
   );
   
   $resultado = Reporte::mdlEditarRegistro($table, $data);
   
   return $resultado;
   

    }
    
}


// Eliminar

public function ctrEliminarRegistro(){
  
  if(isset($_POST["id_reportes"])){

    $table = "reportes";

    $value =  $_POST["id_reportes"];

    $resultado = Reporte::mdlEliminarRegistro($table, $value);

    if ($resultado == "ok") {

      echo "<script> 
              aler('Se elimino correctamente');
            </script>";

    }

  }


}


}


