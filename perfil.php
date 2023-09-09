<?php include("header.php");
?>
        <div class="row">
        <div class="col-md-6">
<img id="imagenperfil" width=400 height=400 class="rounded float-start" src="imagenes/<?php echo $_SESSION["imagen"]; ?>" alt="">
        </div>
        <div class="col-md-3">
        <p class="h6">Usuario</p>
     <p class="h3"><?php print_r($_SESSION["usuario"]); ?></p>
    <br>
    <p class="h6">Correo</p>
     <p class="h3"><?php print_r($_SESSION["correo"]); ?></p>
    <br>
    <p class="h6">Nombre completo</p>
     <p class="h3"><?php print_r($_SESSION["nombre"]); ?></p>
    <br>
    <p class="h6">Tu cuenta es: Pública</p>
    <br>
        </div>
        <div class="col-md-3">
        <p class="h6">Sexo</p>
     <p class="h3"><?php print_r($_SESSION["sexo"]); ?></p>
    <br>
    <p class="h6">Fecha de nacimiento</p>
     <p class="h3"><?php print_r($_SESSION["nacim"]); ?></p>
    <br>
    <p class="h6">Rol: </p>
    <p class="h3"><?php print_r($_SESSION["rol"]); ?></p>
    <br>
        </div>
    </div>
</div>
<?php include("footer.php");?>