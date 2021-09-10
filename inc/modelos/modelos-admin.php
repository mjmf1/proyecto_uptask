<?php
die(json_encode($_POST));
/*
 $accion = $_POST['accion'];
 $password = $_POST['password'];
 $usuario = $_POST['usuario'];

 if($accion === 'crear'){
     // codigo para crear los administardores 

    //hashear password
     $opciones = array(
         'cost' => 12
     );
     $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

     //importar conexion 
     include '../funciones/conexion.php';

     try {
         //realizar la consulta  a la base de datos 
         $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?) ");
         $stmt -> bind_param('ss', $nombre, $hash_password);
         $stmt ->  execute();
         if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                 'tipo' => $accion
                // mostrar errores 
               /* $stmt->error_list,
                'error' => $stmt->error*/ /*
            );
         } else{
           $respuesta = array(
             'respuesta' => 'error'
           );
         }
        
         $stmt ->  close();
         $conn -> close();

     } catch (exception $e) {
         //en caso de error .. tomar la exepcion
         $respuesta = array(
            'pass' => $e->getMessage()
         );
     }

    echo json_encode($respuesta);
 }

 if($accion === 'login'){
//     //escribir codigo que logee a los admin
    include '../funciones/conexion.php';
    try {
        //seleccionar el admin de la base de datos 
        $stmt = $conn->prepare("SELECT,usuario, id, password, FROM usuarios WHERE usuario =?");
        $stmt -> bind_param('s', $usuario);
        $stmt ->execute();
        //loguear el usuario
        $stmt->bind_result($nombre_usuario,$id_usuario,$pass_usuario);
        $stmt->fetch();
       if($nombre_usuario){
        $respuesta = array(
            'respuesta' => 'correcto',
            'nombre' => $nombre_usuario,
            'id' => $id_usuario,
            'pass' => $pass_usuario//,
           // 'columnas' => $stmt->affected_rows
        );
       }else{
           $respuesta = array (
               'error' = 'Usuario no existe'
           )
       }
        $stmt ->close();
        $conn->close();
    }catch (exception $e) {
            //en caso de error .. tomar la exepcion
            $respuesta = array(
               'pass' => $e->getMessage()
            );
        }
   
       echo json_encode($respuesta);
        
    } */


   /* $accion = $_POST['accion'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];

if($accion === 'crear') {
    // Código para crear los administradores
    
    // hashear passwords
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    // importar la conexion
    include '../funciones/conexion.php';
    
    try {
        // Realizar la consulta a la base de datos
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?) ");
        $stmt->bind_param('ss', $usuario  , $hash_password);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        // En caso de un error, tomar la exepcion
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);
}

 
?>