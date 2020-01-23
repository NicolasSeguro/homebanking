<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <?php
    
    $list = ["Nicolas", "Seguro", 29];

    for($i = 0; $i < count($list); $i++){
      echo "Bucle For con Array: " . $list[$i] . "<br/>";
      }
  
      print_r($list);
    ?>
</body>
</html>