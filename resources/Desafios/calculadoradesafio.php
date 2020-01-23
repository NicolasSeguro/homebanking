<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <title>Calculadora</title>
</head>

<body>
  <div class="container" style="margin-top: 50px">

    <?php
			
      // Si se da click al boton submit
      if(isset($_POST['submit']))
      {
        // Verifica si es un valor numerico
        if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
        {
          // Si se ingresò valores numericos entonces calcula el total 
          if($_POST['operation'] == 'sumar')
          {
            $total = $_POST['number1'] + $_POST['number2'];	
          }
          if($_POST['operation'] == 'restar')
          {
            $total = $_POST['number1'] - $_POST['number2'];	
          }
          if($_POST['operation'] == 'multiplicar')
          {
            $total = $_POST['number1'] * $_POST['number2'];	
          }
          if($_POST['operation'] == 'dividir')
          {
            $total = $_POST['number1'] / $_POST['number2'];	
          }
          
          // Print total en el navegador
          echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";
        
        } else {
          
          // sino se ingresaron valores numericos imprime mensaje de error
          echo 'Se requieren valores numericos';
        
        }
      }
    
    ?>

    <!-- Calculator form -->
    <form method="post" action="calculadoradesafio.php">
      <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
      <select name="operation">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
      </select>
      <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
      <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
    </form>

  </div>

</body>

</html>