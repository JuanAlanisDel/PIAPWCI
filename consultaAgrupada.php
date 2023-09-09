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
        <h3 class="pb-2">Consulta Agrupada</h3>
        <div class="table-responsive" >
            <table class="table table-primary table-striped">
                <thead class="bg-dark text-white"></div>
                    <tr>
                            
                            <th scope="col">Categoria</th>
                            <th scope="col">Mes de Venta</th>
                            <th scope="col">Año de Venta</th>
                            <th scope="col">Cantidad Vendida</th>
                        
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Papeleria</td>
                            <td>Enero</td>
                            <td>2023</td>
                            <td>5 unidades</td>
    
                            
                        </tr>
                        <tr>
                        <td>Cocina</td>
                            <td>Septiembre</td>
                            <td>2023</td>
                            <td>8 unidades</td>
                        </tr>
                        <tr>
                            <td>Hogar</td>
                            <td>Marzo</td>
                            <td>2023</td>
                            <td>10 unidades</td>
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