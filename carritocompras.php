<?php include("header.php");
?>
<!--Cuerpo del carrito-->
<main>

<!--Seccion temporal-->
<section class="jumbotron text-center">
<div class="container">
<p></p><p></p><p></p> <p></p><p></p><p></p>
   <h1 class="jumbotron">Carrito de Compras </h1>
   <p></p><p></p><p></p> <p></p><p></p><p></p>
  </div>   


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped" id="tabla">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Producto</th>
                            <th scope="col">Disponible</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-right">Precio</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>Nombre Producto 1</td>
                            <td>En Stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$10.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> </button> </td>
                            
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>Nombre Producto 2</td>
                            <td>En Stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$20.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>Nombre Producto 3</td>
                            <td>En Stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">$30.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>SubTotal</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Envío</td>
                            <td class="text-right">$5.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>$65.00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6 text-center">
                    <button class="btn btn-secondary">Continuar comprando</button>
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <button class="btn btn-success">Proceder con el pago</button>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
<?php include("footer.php");?>