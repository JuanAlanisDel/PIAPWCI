<?php 
session_start();
$rol="";
$sexo="";
if($_POST){
    $fecha_recibida = $_POST['fecha'];
    $fecha_actual = date('Y-m-d');
    $connum = preg_match_all("/[\d]/", $_POST['contra'], $matches);
    $conmayus = preg_match_all("/[^a-z]/", $_POST['contra'], $matches);
    $conminus = preg_match_all("/[^A-Z]/", $_POST['contra'], $matches);
    $conesp = preg_match_all("/[\W]/", $_POST['contra'], $matches);
    $emailesp = preg_match_all("/[\W]/", $_POST['correo'], $matches);
    $nombre = preg_match_all("/\s/", $_POST['nombre']);
    $rol = (isset($_POST['rol']))?$_POST['rol']:"";
    $sexo = (isset($_POST['sexo']))?$_POST['sexo']:"";
    if($emailesp>=1){
        if($nombre>=2){
            if(strlen($_POST['usuario'])>=3){
                if($connum>=1){
                    if($conmayus>=1){
                        if($conminus>=1){
                            if($conesp>=1){
                                if(strlen($_POST['contra'])>=8){
                                    if ($fecha_actual > $fecha_recibida) {
                                        if(($_FILES['foto']['name']!="")){
                                            $imagen= $_FILES['foto']['name'];
                                        move_uploaded_file($_FILES['foto']['tmp_name'],"imagenes/".$imagen);
                                        $_SESSION['usuario']=$_POST['usuario'];
                                        $_SESSION['imagen']=$imagen;
                                        $_SESSION['rol']=$rol;
                                        $_SESSION['correo']=$_POST['correo'];
                                        $_SESSION['nombre']=$_POST['nombre'];
                                        $_SESSION['sexo']=$sexo;
                                        $_SESSION['nacim']=$_POST['fecha'];
                                        echo '<script language="javascript">alert("Usuario registrado en la base de datos.");</script>';
                                        header("location:index.php");
                                        }
                                        else{
                                            echo '<script language="javascript">alert("La foto de perfil está sin adjuntar. Por favor, añada una.");</script>';
                                        }
                                    }
                                    else{
                                        echo '<script language="javascript">alert("La fecha de nacimiento necesita ser antes de la actual. Por favor, ingrese una correcta.");</script>';
                                    }
                               }
                              else{
                                     echo '<script language="javascript">alert("La contraseña necesita ser mayor o igual a ocho caracteres. Por favor, ingrese una correcta.");</script>';
                              }
                            }
                            else{
                        echo '<script language="javascript">alert("La contraseña debe tener mínimo un carácter especial. Por favor, ingrese una correcta");</script>';
                            }
                        }
                        else{
                    echo '<script language="javascript">alert("La contraseña debe tener mínimo una minúscula. Por favor, ingrese una correcta");</script>';
                        }
                    }
                    else{
                echo '<script language="javascript">alert("La contraseña debe tener mínimo una mayúscula. Por favor, ingrese una correcta");</script>';
                    }
                }
                else{
            echo '<script language="javascript">alert("La contraseña debe tener mínimo un número. Por favor, ingrese una correcta");</script>';
                } 
            }
            else{
                echo '<script language="javascript">alert("El correo o usuario necesita ser mayor o igual a tres caracteres. Por favor, ingrese uno correcto.");</script>';
            }
        }
        else{
            echo '<script language="javascript">alert("El nombre completo no es válido. Por favor, ingrese uno correcto.");</script>';
        }
    }
    else{
        echo '<script language="javascript">alert("El correo necesita un arroba y/o un host válido. Por favor, ingrese uno correcto.");</script>';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Registro de usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/general.css" rel="stylesheet">
    <script href="js/registro.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <br/>
            <div class="card">
                <div class="card-header">
                    Registro
                </div>
                <div class="card-body">
                <form method="post" action="registro.php" id="registro" enctype="multipart/form-data">
                Correo electrónico:<input type="text" required class="form-control" name="correo" id="">
         <br/>
                Nombre de usuario:<input type="text" required class="form-control" name="usuario" id="">
         <br/>
            Contraseña:<input type="password" required class="form-control" name="contra" id="">
        <br/>
        Nombre completo:<input type="text" required class="form-control" name="nombre" id="">
         <br/>
         Fecha de nacimiento:
         <input type="date" name="fecha" id="fecha">
         <br/>
         <br/>
         Rol:
         <select name="rol" id="">
            <option value="Administrador"<?php echo ($rol=="Administrador")?"selected":"";?>>Admin.</option>
            <option value="Vendedor"<?php echo ($rol=="Vendedor")?"selected":"";?>>Vendedor</option>
            <option value="Cliente"<?php echo ($rol=="Cliente")?"selected":"";?>>Cliente</option>
         </select>
         Sexo:
         <select name="sexo" id="">
            <option value="Masculino"<?php echo ($sexo=="Masculino")?"selected":"";?>>Masculino</option>
            <option value="Femenino"<?php echo ($sexo=="Femenino")?"selected":"";?>>Femenino</option>
            <option value="No Binario"<?php echo ($sexo=="No Binario")?"selected":"";?>>No Binario</option>
         </select>
         <br/>
         <br/>
         Foto de perfil:<input type="file" name="foto" id="">
         <br/>
         <br/>
           <button class="btn btn-success" type="submit">Registrarme</button>
           </form>
           <br/>
           <a href="./login.php"><button type="submit" class="btn btn-outline-primary">Ya tengo cuenta</button></a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
           
        </div>
        <div class="col-md-4">
        </div>
        </div>
    </div>
  
</body>

</html>