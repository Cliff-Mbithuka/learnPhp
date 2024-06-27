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

        function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    //object is an instance of a class
    $book1 = new Book("Harry potter", "Cliff John", 400); 
  
    $book2 = new Book("Lord of the Rings","Tolkien", 500); 
  
    echo $book1 ->title ;
    echo $book2 -> author;

    ?>
</body>
</html>