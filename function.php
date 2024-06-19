<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   function sayHi($name, $age){
    echo "Hello $name, you are $age <br>";
   }
   sayHi("Cliff", 40);
   sayHi("Cliff", 50);
   sayHi("Cliff", 45);

   // return statements
function cube($num){
    echo "Hello <br>";
    return $num * $num * $num; 
}
$cubeResult = cube(4);
echo $cubeResult;
   ?>
</body>
</html>