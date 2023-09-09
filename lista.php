<?php include("header.php");
$rol="";
$sexo="";
if($_POST){
    if(($_FILES['imagenopc']['name']=="")){
        $imagen1="";
    }
    else{
        move_uploaded_file($_FILES['imagenopc']['tmp_name'],"imagenes/".$imagen);
    }
    echo '<script language="javascript">alert("Lista creada exitosamente.");</script>';
    header("location:index.php");
}
?>
<div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
        <br/>
            <div class="card">
                <div class="card-header">
                    Creación de Listas
                </div>
                <div class="card-body">
                <form method="post" action="lista.php" enctype="multipart/form-data">
                Nombre de la lista:<input type="text" required class="form-control" name="nomlista" id="">
         <br/>
                Descripción:<input type="text" required class="form-control" name="descripcion" id="">
        <div class="row">
            <div class="col-md-6">
        <br/>
        <br/>
         Visibilidad: 
         <select name="vision" id="">
            <option value="Pública">Pública</option>
            <option value="Privada">Privada</option>
        </select>
        <br/>
         <br/>
        </div>
        <div class="col-md-6">
        <br/>
        Imagen (opcional): <br><input type="file" name="imagenopc" id="">
        </div>
        </div>
         <br/>
           <button class="btn btn-success" type="submit">Crear</button>
           </form>
           <br/>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
           
        </div>
        <div class="col-md-4">
        </div>
        </div>
</div>
<?php include("footer.php");?>