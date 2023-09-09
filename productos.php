<?php include("header.php");
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
            Categoría:<input type="text" required class="form-control" name="categoria" id="">
        <div class="row">
            <div class="col-md-6">
            <br/>
        Cantidad disponible:<input type="text" required class="form-control" name="precio" id="">
        <br/>
         Visibilidad: 
         <select name="vision" id="">
            <option value="Venta">Venta</option>
            <option value="Cotización">Cotización</option>
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
         Precio (venta):<input type="text" required class="form-control" name="cantdis" id="">
        <br/>
        Video: <br><input type="file" name="video" id="">
        <br/>
        Imagen 3: <br><input type="file" name="imagen3" id="">
         <br/>
         Imagen 4: <br><input type="file" name="imagen4" id="">
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