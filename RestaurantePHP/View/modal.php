<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<script>
function myFunction() {
var option_value = document.getElementById("numbers").value;
if (option_value == "3") {
  //  alert("Hai !");
   $("#myModal").modal();
 }
}
   

</script>
<select id = "numbers" onchange = "myFunction()">
 <option value = "1">1</option>
 <option value = "2">2</option>
 <option value = "3">Click me !</option>
</select>
<div class="container">
  <h2>Basic Modal Example</h2>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DETALLES DEL PEDIDO</h4>
        </div>
        <div class="modal-body">
          <p>INFORMACION DE EL CLIENTE.</p>
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:BLACK;">TELEFONO:</label>

            <input type="text" class="form-control" name="telefono" placeholder="0" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:BLACK;">CLIENTE:</label>

            <input type="text" class="form-control" name="cliente" placeholder="----" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:BLACK;">DIRECCION:</label>

            <input type="text" class="form-control" name="direccion" placeholder="----" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess" style="font-family:monospace ;color:BLACK;">COMENTARIOS:</label>

            <input type="text" class="form-control" name="comentarios" placeholder="----" style="color:lightslategray;font-family:sans-serif ">

          </div>
          <div class="col-sm-15">
          <button type="button" class="btn btn-SUCCESS" style="font-family: sans-serif;font-size: small;text-align: center;width: 14rem;background-color: #2E86C1;" data-dismiss="modal">GUARDAR DATOS</button>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>