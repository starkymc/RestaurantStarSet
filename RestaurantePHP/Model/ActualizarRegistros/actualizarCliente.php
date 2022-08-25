
<?php
include '../CadenaConexion.php';
$id = $_REQUEST['id'];
$mostrar = $con -> query("SELECT * FROM cliente WHERE  id_cliente='$id'");

if ($fila = $mostrar->fetch_assoc()) {
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
 
  <link rel="stylesheet" href="../../css/estiloallpage.css">

</head>

<body background="https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-food-food-snack-eating-goods-image_14522.jpg" "background-repeat:="" no-repeat;="" background-position:="" center="" center;""="" style="
    background-size: cover;">

  <div class="bs-component">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img src="../../img/icono.png" width="50" height="50" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="FrmLogin" style="color:lightblue;">STARSET
        </a>



        <div class="collapse navbar-collapse" id="navbarColor01">

          <ul class="navbar-nav me-auto">
            <li class="nav-item">



              <a class="nav-link active" href="../../View/FrmIndex.php">Inicio
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../View/ListaProductos.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../View/FrmRegistrarUsuario.php">Registrar Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../View/FrmMenu.php">Vender</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../View/FrmCliente">Cliente</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <br><br>

    <div class="container mt-3">
      <div class="row">
     
      <h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 4px 4px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">Actualizar Cliente</h1>
        <form method="POST" action="./updateCliente.php" enctype="multipart/form-data">
<div class="container py-1" style="width: 33rem;">
      <div class="card m-2 cbl">   

      <div class="col-SM-10 ">
              <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">NOMBRE CLIENTE:</label>
              <input type="hidden" name="id" value="<?php echo $fila['id_cliente'] ?>" placeholder="id">
              <input type="text" class="form-control" value="<?php echo $fila['nom_cli'] ?>" class="form-control" name="nombre" placeholder="ingrese nombre del cliente...">
            
          </div>

          <div class="col-SM-10 ">
              <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">DNI:</label>
              <input type="text" value="<?php echo $fila['dni'] ?>" class="form-control" name="dni" placeholder="ingrese dni del cliente...">
            
          </div>
           
          <br>

          <div iv class="col-SM-5">
          <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">CORREO:</label>
              <input type="text" name="correo" value="<?php echo $fila['correo'] ?>" class="form-control" placeholder="correo">
          </div>

          <br>

          <div class="col-SM-5">
            <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">TELEFONO:</label>
              <input type="text" name="telf" value="<?php echo $fila['telf'] ?>" class="form-control" placeholder="telf...">
          </div>
         

          <br>

<center>
          <div class="col-sm-15">
            <input type="submit" name="" class="btn btn-outline-success" value="ACTUALIZAR REGISTROS" style="font-family: sans-serif;font-size: small;text-align: center;width: 17rem;" > 
          </div>
</center>
      </div>
    </div>
   </div>

    

</body>

</html>