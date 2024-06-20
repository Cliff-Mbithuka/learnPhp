<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="POST">
What's Your Grade?
<input type="text" name="grade">
<input type="submit">
</form>
<?php
$grade = $_POST["grade"];
switch($grade){
    case 'A':
         echo "You did amaizing!";
         break;
         case "B":
            echo 'You did pretty good';
            break; 
         case "C":
            echo 'You did Poorly';
            break; 
         case "D":
            echo 'You did very Bad';
            break; 
         case "E":
            echo 'Fail';
            break; 
         case "F":
            echo 'foooooooo';
            break; 
            default:
            echo "Invalid Grade";
}
?>
</body>
</html>