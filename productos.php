<?php include("header.php");
    $vision = (isset($_POST['vision']))?$_POST['vision']:"";
if($_POST){
    $precio = $_POST['precio'];
    $cantdis = $_POST['cantdis'];
    $cantletras = preg_match_all("/^\d/", $_POST['cantdis']);
    $precioletras = preg_match_all("/^\d/", $_POST['precio']);
    if($cantletras>0){
        if($precioletras>0){
            if(($_FILES['imagen1']['name']!="")&&($_FILES['imagen2']['name']!="")&&($_FILES['imagen2']['name']!="")&&($_FILES['video']['name']!="")){
                $imagen1= $_FILES['imagen1']['name'];
                move_uploaded_file($_FILES['imagen1']['tmp_name'],"imagenes/".$imagen1);
                $imagen2= $_FILES['imagen2']['name'];
                move_uploaded_file($_FILES['imagen2']['tmp_name'],"imagenes/".$imagen2);
                $imagen3= $_FILES['imagen3']['name'];
                move_uploaded_file($_FILES['imagen3']['tmp_name'],"imagenes/".$imagen3);
                $video= $_FILES['video']['name'];
                move_uploaded_file($_FILES['video']['tmp_name'],"imagenes/".$video);
                echo '<script language="javascript">alert("Producto registrado en la base de datos.");</script>';
                header("location:index.php");
            }
            else{
                echo '<script language="javascript">alert("Hay archivos sin adjuntar. Por favor, ingrese los que faltan.");</script>';
            }
        }
        else{
            echo '<script language="javascript">alert("El precio es inválido. Por favor, ingrese una cifra correcta.");</script>';
        }
    }
    else{
        echo '<script language="javascript">alert("La cantidad disponible es inválida. Por favor, ingrese una cifra correcta.");</script>';
    }
}
?>
        <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
        <br/>
            <div class="card">
                <div class="card-header">
                <b>Publicación de Productos</b>
                </div>
                <div class="card-body">
                <form method="post" action="productos.php" enctype="multipart/form-data"><b>
                Nombre del producto</b><input type="text" required class="form-control" name="nomprod" id="">
         <br/>
                <b>Descripción</b><input type="text" required class="form-control" name="descripcion" id="">
         <br/>
            <b>Categoría (mínimo una)</b><input type="text" required class="form-control" name="categoria" id="">
        <div class="row">
            <div class="col-md-6">
            <br/>
        <b>Cantidad disponible</b><input type="text" required class="form-control" name="cantdis" id="">
        <br/>
         <b>Visibilidad:</b> 
         <select name="vision" id="vision">
            <option value="Venta"<?php echo ($vision=="Venta")?"selected":"";?>>Venta</option>
            <option value="Cotización"<?php echo ($vision=="Cotización")?"selected":"";?>>Cotización</option>
        </select>
        <br/>
        <br/>
        <b>Imagen 1</b> <br><input type="file" name="imagen1" id="imagen">
         <br/>
         <b>Imagen 2</b> <br><input type="file" name="imagen2" id="imagen">
         <br/>
        </div>
        <div class="col-md-6">
        <br/>
         <b>Precio (venta)</b><input type="text" required class="form-control" name="precio" id="">
        <br/>
        <b>Video</b> <br><input type="file" name="video" id="imagen">
        <br/>
        <b>Imagen 3</b> <br><input type="file" name="imagen3" id="imagen">
         <br/>
        </div>
        </div>
         <br/>
           <button class="btn btn-success" type="submit">Publicar</button>
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