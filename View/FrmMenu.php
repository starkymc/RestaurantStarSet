<?php
include '../Model/CadenaConexion.php';

?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="../css/estiloallpagex.css" rel="stylesheet">
</head>

<body background="https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-food-food-snack-eating-goods-image_14522.jpg" "background-repeat:="" no-repeat;="" background-position:="" center="" center;""="" style="
    background-size: cover;">

  <div class="bs-component">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img src="../img/icono.png" width="50" height="50" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="FrmLogin" style="color:lightblue;">STARSET
        </a>



        <div class="collapse navbar-collapse" id="navbarColor01">

          <ul class="navbar-nav me-auto">
            <li class="nav-item">



              <a class="nav-link active" href="FrmIndex">Inicio
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ListaProductos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FrmRegistrarUsuario">Registrar Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FrmMenu.php">Vender</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FrmCliente">Cliente</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <br><br>

    <div class="container mt-3">
   

    <div class="container" style="padding-top: 0px;">
      
    <div class="form-group has-success">
    <h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 4px 4px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">Menu del dia</h1>
  </div><center>
<th><a class="btn btn-success" href="FrmVerVenta.php">VER TODAS LAS VENTAS</a> </th></center>
<br>
</br>


        <?php

        $mostrar=$con->query("SELECT*FROM productos");
        while ($fila = $mostrar->fetch_assoc()) {
        ?>
  <div class="row mb-4"  style="float: left;">
        <div class="col md-4 sm-6">
        <div class="card m-2 cbl" style="width: 17rem;">

   
          
         <center> <?php echo '<img src="' . $fila["imagen"] . '" width="100" height="120"' ?></center>
          <div class="card-body">
            <h5 class="card-title" style="color:whitesmoke"><?php echo $fila['nom_pro'] ?></h5>
            <p class="card-text" style="color:whitesmoke">Stock: <?php echo $fila['stock'] ?></p>
            <p class="card-text" style="color:whitesmoke">Precio: S/.<?php echo $fila['precio'] ?></p>
             <th><a class="btn btn-success" href="../View/FrmRegistrarVenta.php?id=<?php echo $fila['id_producto'] ?>">Ordenar</a> </th>
            <br><br>
        
            </div>
        </div>
      </div>
           </div>
          <br>
        <?php } ?>
     
    </div>

    
    </form>
    </div>
    </div>
    <br>
    

</body>

</html>