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
 
  <link rel="stylesheet" href="../css/estiloallpagex.css">

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
              <a class="nav-link" href="FrmMenu">Vender</a>
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
      <div class="row">
     
        <h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 4px 4px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">PRODUCTOS DE LA CARTA</h1>
        <form method="POST" action="../Model/modelCliente.php" enctype="multipart/form-data">
<div class="container py-1" style="width: 33rem;">
      <div class="card m-2 cbl">   

      <div class="col-SM-10 ">
              <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">NOMBRE CLIENTE:</label>
              <input type="text" class="form-control" name="nombre" placeholder="ingrese nombre del cliente...">
            
          </div>

          <div class="col-SM-10 ">
              <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">DNI:</label>
              <input type="text" class="form-control" name="dni" placeholder="ingrese dni del cliente...">
            
          </div>
           
          <br>

          <div iv class="col-SM-5">
          <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">CORREO:</label>
              <input type="text" name="correo" class="form-control" placeholder="correo">
          </div>

          <br>

          <div class="col-SM-5">
            <label class="control-label" for="inputSuccess" style="color:whitesmoke;text-align:left;">TELEFONO:</label>
              <input type="text" name="telf" class="form-control" placeholder="telf...">
          </div>
         

          <br>

<center>
          <div class="col-sm-15">
            <input type="submit" name="" class="btn btn-success" value="GUARDAR" style="font-family: sans-serif;font-size: small;text-align: center;width: 17rem;" > 
          </div>
</center>
      </div>
    </div>
   </div>

   <div class="container"">

<div class="col-sm-15">
              
<table class="table table-success  table-hover table-sm">
                          <thead class="table-dark">
                              <tr>
                          <th >ID CLIENTE</th>
                              <th>NOMBRES</th>
                              <th>DNI CLIENTE</th>
                              <th>CORREO</th>
                              <th>CONTACTO</th>
                              <BR>
                              <th>ACCIONES</th>
                              <th>ACCIONES</th>
                            
                            
                              </tr>     
                          </thead> 
                          
                              <?php

                              $mostrar = $con->query("SELECT * FROM CLIENTE");
                              while ($fila = $mostrar->fetch_assoc()) {
                              ?>
                                  <tr style="table-light">
                                      <th><?php echo $fila['id_cliente'] ?></th>
                                      <th><?php echo $fila['nom_cli'] ?></th>
                                      <th><?php echo $fila['dni'] ?></th>
                                      <th><?php echo $fila['correo'] ?></th>
                                      <th><?php echo $fila['telf'] ?></th>
                                
                                      <th><a class="btn btn-success" href="../Model/ActualizarRegistros/actualizarCliente.php?id=<?php echo $fila['id_cliente'] ?>">Editar</a> </th>
                                        <th><a class="btn btn-danger" href="../Model/EliminarRegistros/deleteCliente.php?id=<?php echo $fila['id_cliente'] ?>">Eliminar</a> </th></a> </th>

                                    
                                     
                                  </tr>
                              <?php } ?>




                          </table>
                         
                        
                          </div>
                          </div> 
    

</body>

</html>