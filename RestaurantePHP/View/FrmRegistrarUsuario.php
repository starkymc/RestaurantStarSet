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
              <a class="nav-link"  href="FrmRegistrarUsuario">Registrar Usuario</a>
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
  <br>
  <div class="form-group has-success">
    <h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 4px 4px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">REGISTRAR USUARIO</h1>
  </div>
  <div class="container py-1" style="width:30rem;">
    <div class="card m-2 cbl">
      <div class="card-header">

        <form method="POST" action="../Model/modelRUsuario.php" enctype="multipart/form-data">
          <fieldset>

            <div class="form-group has-success">
              <label class="control-label" for="inputSuccess" style="font-family: monospace ;color:whitesmoke;">USUARIO</label>

              <input type="text" class="form-control" name="txtusuario" placeholder="Ingresar usuario" style="color:lightslategray;font-family:sans-serif ">
            </div>
            <br>
            <div class="form-group has-success">
              <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">CONTRASEÑA</label>

              <input type="text" class="form-control" name="txtcontra" placeholder="Ingresar contraseña" style="color:lightslategray;font-family:sans-serif ">

            </div>
            <br>

            <div class="form-group has-success">
              <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:whitesmoke;">HABILITADO</label>
              <select class="form-select" name="SHabilitado" style="color:lightslategray;font-family:sans-serif ">
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div>

            <br>
            <center>
              <input type="submit" value="REGISTRAR" name="btnRegistrar" class="btn btn-outline-success" style="font-family: sans-serif;font-size: small;text-align: center;width: 17rem;" />
            </center>
        

          </fieldset>



        </form>
      </div>
    </div>
  </div>
</body>

</html>