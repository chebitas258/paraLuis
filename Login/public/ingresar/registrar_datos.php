<?php
        include ('../config/conexiondatos.php');
        
        if (isset($_POST['usuario_reg'])) {
            $usuario_reg = $_POST['usuario_reg'];
         } else {
            $usuario_reg = "";
         }
        if (isset($_POST['correo_reg'])) {
            $correo_reg = $_POST['correo_reg'];
         } else {
            $correo_reg = "";
         }
         if (isset($_POST['contraseña_reg'])) {
            $contraseña_reg = $_POST['contraseña_reg'];
         } else {
            $contraseña_reg = "";
         }
         if (isset($_POST['confirm_reg'])) {
            $confirm_reg = $_POST['confirm_reg'];
         } else {
            $confirm_reg = "";
         }

         if (isset($_POST['nombre_completo'])) {
            $nombre_completo= $_POST['nombre_completo'];
         } else {
            $nombre_completo = "";
         }
         if (isset($_POST['DNI'])) {
            $DNI = $_POST['DNI'];
         } else {
            $DNI = "";
         }
         if (isset($_POST['n_celular'])) {
            $n_celular = $_POST['n_celular'];
         } else {
            $n_celular = "";
         }
         if (isset($_POST['domicilio'])) {
            $domicilio = $_POST['domicilio'];
         } else {
            $domicilio = "";
         }
         if (isset($_POST['cursos'])) {
            $cursos = $_POST['cursos'];
         } else {
            $cursos = "";
         }
         if (isset($_POST['tipo_usuario'])) {
            $tipo_usuario = $_POST['tipo_usuario'];
         } else {
            $tipo_usuario = "";
         }

         if (isset($_POST['oficina_rrhh'])) {
            $oficina_rrhh = $_POST['oficina_rrhh'];
         } else {
            $oficina_rrhh = "";
         }

         if (isset($_POST['jefe_rrhh'])) {
            $jefe_rrhh = $_POST['jefe_rrhh'];
         } else {
            $jefe_rrhh = "";
         }
         if (isset($_POST['contacto_jefe_rrhh'])) {
            $contacto_jefe_rrhh = $_POST['contacto_jefe_rrhh'];
         } else {
            $contacto_jefe_rrhh = "";
         }
         if (isset($_POST['oficina_capa'])) {
            $oficina_capa = $_POST['oficina_capa'];
         } else {
            $oficina_capa = "";
         }
         if (isset($_POST['jefe_capa'])) {
            $jefe_capa = $_POST['jefe_capa'];
         } else {
            $jefe_capa = "";
         }
         if (isset($_POST['contacto_jefe_capa'])) {
            $contacto_jefe_rrhh = $_POST['contacto_jefe_capa'];
         } else {
            $contacto_jefe_capa = "";
         }
       
        $contraseña_reg = password_hash($contraseña_reg, PASSWORD_DEFAULT);

        $query = "INSERT INTO datos(usuario_reg, correo_reg, contraseña_reg, confirm_reg,nombre_completo, DNI, n_celular, domicilio, cursos, tipo_usuario, oficina_rrhh,	jefe_rrhh, contacto_jefe_rrhh, oficina_capa, jefe_capa, contacto_jefe_capa)
        VALUES('$usuario_reg','$correo_reg','$contraseña_reg','$confirm_reg','$nombre_completo', '$DNI', '$n_celular','$domicilio','$cursos','$tipo_usuario','$oficina_rrhh','$jefe_rrhh','$contacto_jefe_rrhh','$oficina_capa','$jefe_capa','$contacto_jefe_capa') ";

        $ejecutar = mysqli_query($conexiondatos,$query);

        if ($ejecutar) {
            echo ' 
                <script>
                alert ("Sus datos se han almacenado correctamente, nos contactaremos con usted a la brevedad");
                window.location = "../registro.php";
                </script>
            ';

            exit();
        }else {
            echo'
                <script>
                    alert ("Inténtelo nuevamente, ocurrió un problema con el registro de datos");
                    window.location = "../ingresar/registrar_datos.php";
                </script>
            ';
        }
    
/* PDO conection failed al servidor 

<?php
include ('../config/conexiondatos.php');
if(isset($_POST['registrarse']))
{
        $usuario_reg = $_POST ['usuario_reg'];
        $correo_reg = $_POST ['correo_reg'];
        $contraseña_reg = $_POST ['contraseña_reg'];
        $confirm_reg = $_POST ['confirm_reg'];
        $nombre_completo = $_POST ['nombre_completo'];
        $DNI = $_POST ['DNI'];
        $n_celular = $_POST ['n_celular'];
        $domicilio = $_POST ['domicilio'];
        $cursos = $_POST ['cursos'];
        $tipo_usuario = $_POST ['tipo_usuario'];
        $oficina_rrhh = $_POST ['oficina_rrhh'];
        $jefe_rrhh = $_POST ['jefe_rrhh'];
        $contacto_jefe_rrhh = $_POST ['contacto_jefe_rrhh'];
        $oficina_capa = $_POST ['oficina_capa'];
        $jefe_capa = $_POST ['jefe_capa'];
        $contacto_jefe_capa = $_POST ['contacto_jefe_cap'];

    
        $contraseña_reg = password_hash($contraseña_reg, PASSWORD_DEFAULT);

        $query = "INSERT INTO id20317150_igcdatos.datos('usuario_reg', 'correo_reg', 'contraseña_reg', 'confirm_reg','nombre_completo', 'DNI', 'n_celular', 'domicilio', 'cursos', 'tipo_usuario', 'oficina_rrhh','jefe_rrhh', 'contacto_jefe_rrhh', 'oficina_capa', 'jefe_capa', 'contacto_jefe_capa')
        VALUES(:usuario_reg,:correo_reg,:contraseña_reg,:confirm_reg,:nombre_completo, :DNI, :n_celular,:domicilio,:cursos,:tipo_usuario,:oficina_rrhh,:jefe_rrhh,:contacto_jefe_rrhh,:oficina_capa,:jefe_capa,:contacto_jefe_capa) ";

        $pdoQuery_run = $pdodbcon->prepare($query);
        $pdoQuery_exec = $pdoQuery_run -> execute(array(":usuario_reg"=>$usuario_reg,":correo_reg"=>$correo_reg,":contraseña_reg"=>$contraseña_reg,":confirm_reg"=>$confirm_reg,":nombre_completo"=>$nombre_completo,":DNI"=>$DNI, ":n_celular"=>$n_celular,":domicilio"=>$domicilio,":cursos"=>$cursos,":tipo_usuario"=>$tipo_usuario,":oficina_rrhh"=>$oficina_rrhh,":jefe_rrhh"=>$jefe_rrhh,":contacto_jefe_rrhh"=>$contacto_jefe_rhh,":oficina_capa"=>$oficina_capa,":jefe_capa"=>$jefe_capa,":contacto_jefe_capa"=>$$contacto_jefe_capa));
        if($pdoQuery_exec)
        {
            echo 'Datos Insertados';
        }
        else
        {
            echo 'Datos no Insertados';
        }
    
    
}
?>
*/
?>