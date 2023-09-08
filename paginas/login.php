<?php 
session_start();
$chkrecordar="";
if($_POST){
    $connum = preg_match_all("/[\d]/", $_POST['contra'], $matches);
    $conmayus = preg_match_all("/[^a-z]/", $_POST['contra'], $matches);
    $conminus = preg_match_all("/[^A-Z]/", $_POST['contra'], $matches);
    $conesp = preg_match_all("/[\W]/", $_POST['contra'], $matches);
    $chkrecordar=(isset($_POST['chkrecordar'])=="si")?"checked":"";
    if(strlen($_POST['usuario'])>=3){
        if($connum>=1){
            if($conmayus>=1){
                if($conminus>=1){
                    if($conesp>=1){
                        if(strlen($_POST['contra'])>=8){
                            if ($fecha_actual > $fecha_recibida) {
                                move_uploaded_file($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
                                echo '<script language="javascript">alert("Usuario registrado en la base de datos.");</script>';
                                header("location:login.php");
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
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
                    Iniciar Sesión
                </div>
                <div class="card-body">
                <form action="login.php" method="post">
                Usuario:<input type="text" required class="form-control" name="usuario" id="">
         <br/>
            Contraseña:<input type="text" required class="form-control" name="contra" id="">
            <br/>
            Recordar: <input type="checkbox" <?php echo$chkrecordar;?> name="chkrecordar" value="si" id="">
        <br/>
           <button class="btn btn-success" type="submit">Entrar</button>
           </form>
           <br/>
           <a href="./registro.php"><button type="submit" class="btn btn-outline-primary">No tengo cuenta</button></a>
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