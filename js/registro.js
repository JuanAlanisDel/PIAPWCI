var formularioRegistro=document.getElementById('registro');
formularioRegistro.addEventListener("submit",function(e){
    e.preventDefault();
    var chkrecordar="";
    var connum = preg_match_all("/[\d]/", $_POST['contra'], $matches);
    var conmayus = preg_match_all("/[^a-z]/", $_POST['contra'], $matches);
    var conminus = preg_match_all("/[^A-Z]/", $_POST['contra'], $matches);
    var conesp = preg_match_all("/[\W]/", $_POST['contra'], $matches);
    var chkrecordar=(isset($_POST['chkrecordar'])=="si")?"checked":"";
    if(strlen($_POST['usuario'])>=3){
        if(connum>=1){
            if(conmayus>=1){
                if(conminus>=1){
                    if(conesp>=1){
                        if(strlen($_POST['contra'])>=8){
                                move_uploaded_file($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
                                alert("Usuario registrado en la base de datos.");
                                header("location:login.php");
                       }
                      else{
                             alert("La contraseña necesita ser mayor o igual a ocho caracteres. Por favor, ingrese una correcta.");
                      }
                    }
                    else{
                alert("La contraseña debe tener mínimo un carácter especial. Por favor, ingrese una correcta");
                    }
                }
                else{
            alert("La contraseña debe tener mínimo una minúscula. Por favor, ingrese una correcta");
                }
            }
            else{
        alert("La contraseña debe tener mínimo una mayúscula. Por favor, ingrese una correcta");
            }
        }
        else{
    alert("La contraseña debe tener mínimo un número. Por favor, ingrese una correcta");
        } 
    }
    else{
        alert("El correo o usuario necesita ser mayor o igual a tres caracteres. Por favor, ingrese uno correcto.");
    }
})
/*
<?php 
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
        if($nombre>=3){
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
        else{
            echo '<script language="javascript">alert("El nombre completo no tiene espacios. Por favor, ingrese uno correcto.");</script>';
        }
    }
    else{
        echo '<script language="javascript">alert("El correo necesita un arroba y/o un host válido. Por favor, ingrese uno correcto.");</script>';
    }
}
?>
formularioRegistro.addEventListener("submit",function(){
    //e.preventDefault();
    var sexo=valorSelect('Sexo');
    var rol=valorSelect('Rol');
    var FNac=valorCalendar('FNac');
    console.log(FNac);
    console.log(sexo);
    console.log(rol);

    var datos=new FormData(formularioRegistro);
    //console.log(valorCalendar('FNac'));
    //Enviamos al php la info
    fetch('../DAO/Registro.php',{
        method:'POST',
        body:datos
    })
    .then(res=>res.json())
    .then(data=>{

        if(data=="1"){
            console.log(data);
            alert('registrado');
            window.location.assign("../View/Login.html");
        }
        else if(data=="0"){
            console.log(data);
        }

    })
});



function valorSelect(_id){
    var select=document.getElementById(_id);
    var selectedOption = select.options[select.selectedIndex];
    return selectedOption.value;
}
//regresa el valor de un Select(comboBox) por medio de su id
//regresa el valor de un input date (una fecha del calendario)
function valorCalendar(_id){
    var x = document.getElementById(_id);
    //var defaultVal = x.defaultValue;
    var currentVal = x.value;
    return currentVal
}
*/
