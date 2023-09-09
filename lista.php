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
                <b>Creación de Listas</b>
                </div>
                <div class="card-body">
                <form method="post" action="lista.php" enctype="multipart/form-data"><b>
                Nombre de la lista</b><input type="text" required class="form-control" name="nomlista" id="">
         <br/>
                <b>Descripción</b><input type="text" required class="form-control" name="descripcion" id="">
        <div class="row">
            <div class="col-md-6">
        <br/>
        <br/><b>
         Visibilidad: </b>
         <select name="vision" id="">
            <option value="Pública">Pública</option>
            <option value="Privada">Privada</option>
        </select>
        <br/>
         <br/>
        </div>
        <div class="col-md-6">
        <br/><b>
        Imagen (opcional)</b><br><input type="file" name="imagenopc" id="imagen">
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