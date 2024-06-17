<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$characterName = "John";
$characterAge = 35;

echo "my name is $characterName <br>";
echo "I love coding and Learing<br>";

$characterName = "Cliff";
echo "Do you know $characterName <br>";

$phrase = "Giraffe Academy<br>";

echo substr($phrase, 8); //get Academy
echo substr($phrase, 8, 3); //get Aca
echo str_replace("Giraffe", "panda", $phrase);
echo strtolower($phrase); // convert to lowercase
echo strtoupper($phrase); //convert to uppercase
echo $phrase[9];
    ?>
</body>
</html>