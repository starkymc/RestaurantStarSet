<?php
include '../Model/CadenaConexion.php';
$id = $_REQUEST['id'];
$mostrar = $con->query("SELECT * FROM productos WHERE  id_producto='$id'");

if ($fila = $mostrar->fetch_assoc()) {
}



?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="../css/estiloallpagex.css" rel="stylesheet">

</head>

<body background="https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-food-food-snack-eating-goods-image_14522.jpg" "background-repeat:="" no-repeat;="" background-position:="" center="" center;""="" style="
    background-size: cover;">
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">INF. DEL ENVIO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" class="modal-content" action="../Model/modelEnvio.php">
          <div class="mb-3">
              <label for="recipient-name" class="col-form-label">id:</label>
              <input type="text" class="form-control" id="idcliente" name="idcliente" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">CLIENTE:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">TELEFONO:</label>
              <input type="text" class="form-control"id="telefono" name="telefono" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">DIRECCION:</label>
              <input type="text" class="form-control"id="direccion" name="direccion" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">REFERNCIA:</label>
              <input type="text" class="form-control"id="ref" name="ref" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
          <center>
            <input type="submit" value="REALIZAR VENTA" name="btnRegistrar" class="btn btn-outline-success" style="font-family: sans-serif;font-size: small;text-align: center;width: 17rem;" />
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- modal-->

  <script>
    function myFunction() {
      var option_value = document.getElementById("numbers").value;
      if (option_value == "2") {
        //  alert("Hai !");
        $("#myModal").modal("show");
      }
    }
  </script>


  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <!-- Modal -->

  <!-- modal -->

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
            <li class="nav-item">
              <a class="nav-link" href="FrmCliente">CLIENTE</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>


  <br><br>
  <div class="form-group has-success">
    <h1 class="control-label" for="inputSuccess" style="font-family: sans-serif ;color:whitesmoke;text-align: center;">ATENDER PEDIDO </h1>
  </div>
  <div class="container py-1" style="width:30rem;">
    <div class="card m-2 cbl">


      <form action="../Model/modelVenta.php" method="post">
        <fieldset>


          <div>
            <input type="hidden" name="id" value="<?php echo $fila['id_producto'] ?>" placeholder="id">
            <input type="hidden" name="id" value="<?php echo $id ?>" placeholder="id">

          </div>

          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;"> NOMBRE DEL CLIENTE:</label>

            <input type="text" class="form-control" name="nombrecliente" placeholder="Ingrese el nombre" style="color:lightslategray;font-family:sans-serif ">
          </div>
          <br>

          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">DOCUMENTO:</label>

            <input type="number" class="form-control" name="dnicliente" placeholder="Ingrese documento" style="color:lightslategray;font-family:sans-serif ">
          </div>
          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">VENDEDOR:</label>

            <input type="text" class="form-control" name="vendedor" placeholder="Vendedor" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">FECHA:</label>

            <input type="DATE" class="form-control" name="fecha" style="color:lightslategray;font-family:sans-serif ">
          </div>
          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;"> PRODUCTO:</label>


            <input type="text" class="form-control" value="<?php echo $fila['nom_pro'] ?> " name="nombreplato" placeholder="" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">TIPO DE CONSUMO:</label>
            <select id="numbers" onchange="myFunction()">
              <option  disabled value='' selected></option>
              <option value="1">LOCAL</option>
              <option value="2">DELIVERY ..</option>


            </select>
          </div>
          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;"> PRECIO</label>

            <input type="text" value="<?php echo $fila['precio'] ?> " class="form-control" name="precio" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <br>
          <div>
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;"> IMAGEN:</label>
            <center> <?php echo '<img src="' . $fila["imagen"] . '" width="100" height="120"' ?></center>
          </div>

          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">CANTIDAD:</label>

            <input type="number" class="form-control" name="txtcant" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

          </div>


          <br>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">TOTAL A PAGAR:</label>

            <input type="number" class="form-control" name="txttotal" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

          </div>

          <br><br>

          <center>
            <input type="submit" value="REALIZAR VENTA" name="btnRegistrar" class="btn btn-success" style="font-family: sans-serif;font-size: small;text-align: center;width: 17rem;" />
          </center>
          <br>

        </fieldset>



      </form>

    </div>
  </div>


</body>

</html>