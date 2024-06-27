<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Book {
        var $title;
        var $author;
        var $pages;
    }

    //object is an instance of a class
    $book1 = new Book; 
    $book1-> title ="Harry Potter";
    $book1-> author ="Cliff John";
    $book1-> pages =400;

    $book2 = new Book; 
    $book2-> title ="Lord of the Rings";
    $book2-> author ="Tolkien";
    $book2-> pages =500;


    echo $book1 -> author;
    echo $book2 -> title;

    ?>
</body>
</html>