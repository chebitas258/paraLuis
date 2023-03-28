<?php


session_start();

    include_once('../config/conexiondatos.php');
     if (isset($_POST['usuario_reg']) && isset($_POST['contraseña_reg'])) {
        function Validar($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        $usuario =Validar($_POST ['usuario_reg']);
        $contraseña = Validar($_POST ['contraseña_reg']);

        if(empty($usuario)) {
            header('Location:../index.php?error=El usuario es requerido');
            exit();

        }elseif(empty($contraseña)){
            header('Location:../index.php?error=Usuario o clave incorrectas');
            exit();
        }else{

            $Sql= "SELECT * FROM datos WHERE usuario_reg = '$usuario'";
            $query = mysqli_query($conexiondatos, $Sql);

            if ($query->num_rows==1) {
                $usuarioQ = $query->fetch_assoc();


                $id = $usuarioQ['id_datos'];
                $NombreUsuario = $usuarioQ['usuario_reg'];
                $Contraseña_reg = $usuarioQ['contraseña_reg'];
                $NombreCompleto = $usuarioQ['nombre_completo'];

                if ($usuario === $NombreUsuario){
                    if ($contraseña) {
                        $_SESSION['id_datos'] = $id;
                        $_SESSION['usuario_reg'] = $NombreUsuario;
                        $_SESSION['nombre_completo'] = $NombreCompleto;


                        echo "<script>
                            alert ('Bienvenido $NombreCompleto');
                            location.href = '../Inicio.php'
                        </script>";
                    }else{
                        header('Location:../index.php?error=Usuario o clave incorrectas');

                    }
                }else{
                    header('Location:../index.php?error=Usuario o clave incorrectas');
                }
            }else{
                header('Location:../index.php?error=Usuario o clave incorrectas');
            }
    }
}