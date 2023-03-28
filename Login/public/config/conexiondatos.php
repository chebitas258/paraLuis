<?php

$host = "localhost";
$User = "root";
$pass = "";

$db = "login_registro_igc";


$conexiondatos = mysqli_connect($host, $User, $pass, $db);

    /*
        if($conexion) {
            echo 'Te has conectado de manera exitosa a la Base de Datos';
        }else{
            echo 'No te has podido conectar a la Base de Datos';
        }

*/

/* -- PDO conection FALLIDO EN CONEXION AL SERVIDOR

        
$host = "localhost";
$User = "id20317150_igc";
$pass = "S3n8SBamRTXBsn([";

$db = "id20317150_igcdatos";


try{
 $dsn = 'mysql:host='.$host.';db='.$db;
 $pdodbcon = new PDO($dsn, $user, $password);
 echo 'db conected';
    
    
}
catch(PDOException $error)
{
    $error->getMessage();
    echo 'failed conection';
}


    /*
        if($conexion) {
            echo 'Te has conectado de manera exitosa a la Base de Datos';
        }else{
            echo 'No te has podido conectar a la Base de Datos';
        }

*/



?>


*/


?>