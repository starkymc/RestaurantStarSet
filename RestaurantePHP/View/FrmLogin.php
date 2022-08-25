<!DOCTYPE html>
    
<html lang="en">

   <head>
        <title>LOGIN ACCESO</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/stylelogin.css">
    </head>
    <body>
	<section class="ftco-section" style=" padding: 2em 0;
    background: url(https://www.slon.pics/wp-content/uploads/2017/03/Flag-of-Peru-in-the-corner-on-white-background.-Isolated-contains-clipping-path-19441.jpg);background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				<h1 class="control-label" for="inputSuccess" style="text-shadow: 1px 1px black, 2px 2px black;text-shadow: gray;font-family: sans-serif;color:whitesmoke;text-align: center;">Restaurante StarSet</h1>


				</div>
			</div>
      <form action="../CONTROLLER/controllerLogin.php" method="post" > 
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last" style="background: url(https://saborlatino503.site/wp-content/uploads/comida-tipica-de-peru.jpg);background-size: cover;">
							<div class="text w-100">
								<h2>Bienvenido</h2>
							</div>
			      </div>
        
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Inicio de sesion</h3>
			      		</div>
								
               
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Usuario</label>
			      			<input type="text" name="txtusuario" class="form-control" placeholder="Usuario" required="">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Contraseña</label>
		              <input type="password"  name="txtcontra" class="form-control" placeholder="Contraseña" required="">
		            </div>
		            <div class="form-group">
		            	<button type="submit"alue="INGRESAR" name="btnIngresar"  class="form-control btn btn-primary submit px-3">Ingresar</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	


</body>
</html>