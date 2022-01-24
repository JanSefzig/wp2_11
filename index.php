<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
      $fighter[0]['name']= 'Pavel';
      $fighter[0]['HP']= 110;
      $fighter[0]['attack']= rand(1,100);

      $fighter[1]['name']= 'Ondrej';
      $fighter[1]['HP']= 120;
      $fighter[1]['attack']= rand(1000);

      $fighter[2]['name']= 'Ondrej';
      $fighter[2]['HP']= 110;
      $fighter[2]['attack']= rand(1,100);
        
      ?>
    

<?php


    function fight($fighterA, $fighterB)
    {
        while ($fighterA['HP'] >=0 OR $fighterB['HP'] >= 0 ) {
            
echo "Boj započal";

echo "zautočil prvni";

$fighterA['HP'] == $fighterA['HP'] - $fighterB['attack'].   "<br>";

echo $fighterB['name']."ubral". $fighterB['attack']."<br>";

echo $fighterA['name']. "má". $fighterA['HP']."<br>";

if ($fighterA<= 0) {
    return $fighterB['name'];

}
echo "zautočil druhý";

$fighterB['HP'] == $fighterB['HP'] - $fighterA['attack'] .   "<br>";

echo $fighterA['name']."ubral". $fighterA['attack']."<br>";

echo $fighterB['name']. "má". $fighterB['HP']."<br>";

if ($fighterB<= 0) {
    return $fighterA['name'];

}
}
}



?>
</body>
</html>