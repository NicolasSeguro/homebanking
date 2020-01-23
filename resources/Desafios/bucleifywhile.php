<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php 
    $sumapar=0;
    $sumaimpar=0;
    $num = 0 ;

    for($i = 0; $i <= 10; $i++){

    if ($num%2==0){

    $sumapar+=$num;

    echo $sumapar. 'par';
    echo "<br>";
    }
    
    else{$sumaimpar+=$num;
        echo $sumaimpar. 'impar';
        echo "<br>";
    }
    $num++;
    }
    echo "<br>";
  ?>
</body>

</html>