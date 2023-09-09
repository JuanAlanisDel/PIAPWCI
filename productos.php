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
                    Publicación de Productos
                </div>
                <div class="card-body">
                <form method="post" action="productos.php" enctype="multipart/form-data">
                Nombre del producto:<input type="text" required class="form-control" name="nomprod" id="">
         <br/>
                Descripción:<input type="text" required class="form-control" name="descripcion" id="">
         <br/>
            Categoría (mínimo una):<input type="text" required class="form-control" name="categoria" id="">
        <div class="row">
            <div class="col-md-6">
            <br/>
        Cantidad disponible:<input type="text" required class="form-control" name="cantdis" id="">
        <br/>
         Visibilidad: 
         <select name="vision" id="">
            <option value="Venta"<?php echo ($vision=="Venta")?"selected":"";?>>Venta</option>
            <option value="Cotización"<?php echo ($vision=="Cotización")?"selected":"";?>>Cotización</option>
        </select>
        <br/>
        <br/>
        Imagen 1: <br><input type="file" name="imagen1" id="">
         <br/>
         Imagen 2: <br><input type="file" name="imagen2" id="">
         <br/>
        </div>
        <div class="col-md-6">
        <br/>
         Precio (venta):<input type="text" required class="form-control" name="precio" id="">
        <br/>
        Video: <br><input type="file" name="video" id="">
        <br/>
        Imagen 3: <br><input type="file" name="imagen3" id="">
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