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
  <link href="../css/estilo.css" rel="stylesheet">
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
              <a class="nav-link" href="FrmRegistrarUsuario">Regitrar Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FrmMenu">Vender</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </div>
  <br><br>
  <div class="container" style="padding-top: 0px;">
      
    <div class="form-group has-success">
    <h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 4px 4px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">Ventas</h1>
  </div><center>
  <a class="btn btn-success" style="background-color: orange;" href="FrmMenu.php">Ver menu del dia</a> 
<br>
<br>

  
  </div>

  <div class="container" style="padding-top: 25px;">
                            <table class="table table-dark table-borderless table-hover" style="padding-top: 15px;">
                           
                            <th>IDVENTA</th>
                                <th>NOMBRE CLIENTE</th>
                                <th>DNIE</th>
                                <th>VENDEDOR</th>
                                <th>PLATO</th>
                                <th>PRECIO</th>
                                <th>PAGO TOTAL</th>
                                <th>FECHA VENTA</th>
                                
                            
                                <?php

                                $mostrar = $con->query("SELECT * FROM detalleventa ORDER BY id");
                                while ($fila = $mostrar->fetch_assoc()) {
                                ?>
                                    <tr class="table-light">
                                        <th><?php echo $fila['id'] ?></th>
                                        <th><?php echo $fila['nombrecliente'] ?></th>
                                        <th><?php echo $fila['dniclinete'] ?></th>
                                        <th><?php echo $fila['vendedor'] ?></th>
                                        <th><?php echo $fila['nombreproducto'] ?></th>
                                        <th><?php echo $fila['precio'] ?></th>
                                        <th><?php echo $fila['totalpago'] ?></th>
                                        <th><?php echo $fila['fecha'] ?></th>

                                       

                                      
                                   

                                    </tr>
                                <?php } ?>




                            </table>
                            </div> 
    <br>
    

</body>

</html>