<?php
	// Se genera un NumeroEntero a partir del numero proporcionado en un cuadro de edición
	// http://localhost/poo9cma2021/1_NumeroEntero/index.php
	if( isset($_POST['btnenviar']) && $_POST['btnenviar']){
		include_once("NumeroEntero.php");
		$n1 = new NumeroEntero($_POST['txtn']);
		echo $n1->obtNumeroEntero();
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>N&uacute;mero entero</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
      <form action="index.php" method="post">
         <div class="form-group">
            <label for="txtn">N&uacute;mero:</label>
            <input 
               type="text"
               class="form-control" 
               id="txtn"
               name="txtn"
               value="<?php if(isset($_POST['txtn'])) echo $_POST['txtn']; ?>"
            >
         </div>
         <input name="btnenviar" type="submit" title="Enviar" class="btn btn-primary">
      </form>
   </body>
</html>