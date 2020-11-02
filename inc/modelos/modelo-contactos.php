<?php 


if ($_POST['action']=='crear') {
    //creara un nuevo registro
    require_once( '../funciones/bd.php');//importar base de datos con bd
    //validar las entradas
    
    $nombre=filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);//validar limpiar entradas
    $empresa=filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $telefono=filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    
    try {//programano deje de funcionar
        $state=$conn->prepare("insert into contactos(nombre,empresa,telefono ) VALUES(?,?,?)");
        $state->bind_param("sss","$nombre","$empresa","$telefono");//inserta en bd//utilisara prepare statement ,la inyeccion de sql queda descartada
        $state->execute();
        
        $state->close();
        $conn->close();//ayudamos asql a cerra
        
        $respuesta=array(
            'respuesta'=>'correcto',// me la manda por json y como ya la estoy  leyendo con xhrresponce text
             'info'=>$state->affected_rows//afecter rose  es una forma de saber si hubo cambios  en la base de datos es una forma de saber
             
            
          
        );
        
       
    } catch (Exception $e) {//erreglo lo vamoms a converir json
        $respuesta=array('error'=>$e->getMessage()//e va trae el mensaje 
            
        );
        
        
        
    }
   // echo json_encode($_POST)
}

?>