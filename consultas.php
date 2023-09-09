<?php include("header.php");
?>
<!--Cuerpo de las consultas-->
<main>
<!--Seccion temporal-->
<section class="jumbotron text-center">
<div class="container">
<p></p><p></p><p></p> <p></p><p></p><p></p>
   <h1 class="jumbotron">Ventas</h1>
   <p></p><p></p><p></p> <p></p><p></p><p></p>
  </div>   


  <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6 text-center">
                <button class="btn btn-secondary" onClick="window.location.href='consultas.php';">Consulta Detallada(actual)</button>
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <button class="btn btn-secondary" onClick="window.location.href='consultaAgrupada.php';">Consulta Agrupada</button>
                </div>


                <body>
    <section class="bg-light p-5">
        <h3 class="pb-2">Consulta Detallada</h3>
        <div class="table-responsive" >
            <table class="table table-primary table-striped">
                <thead class="bg-dark text-white"></div>
                    <tr>
                            <th scope="col">Imagen</th>
                            <th scope="col">ID</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Fecha/Hora</th>
                            <th scope="col">Calificacion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">En Existencia</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>50503696872</td>
                            <td>Papeleria</td>
                            <td>Borrador</td>
                            <td>5:48:00 01/12/23</td>
                            <td>4.5/5</td>
                            <td>$15.99</td>
                            <td>15 unidades</td>
    
                            
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>50503346872</td>
                            <td>Abarrotes</td>
                            <td>Lata de atún</td>
                            <td>7:00:00 08/05/23</td>
                            <td>4.5/5</td>
                            <td>$30.95</td>
                            <td>15 unidades</td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/76cf9b/000000.jpg&text=Prod+50x50" /> </td>
                            <td>50545696872</td>
                            <td>Hogar y Jardin</td>
                            <td>Limpiavidrios</td>
                            <td>9:30:00 10/11/23</td>
                            <td>5/5</td>
                            <td>$80.70</td>
                            <td>15 unidades</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
            </div>
        </div>
</div>
</body>
</main>
</div>
<?php include("footer.php");?>