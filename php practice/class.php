<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//    creating class is kind of creating a new data type
//constructor is a function for an object of a class,jokhoni ekta object likha hoy tokhon r ar constructor call kora hoye jay

// class Book{
//     var $title;
//     var $author;
//     var $pages;

//     function __construct(){
//         echo "new Book Created<br>";
//     }

 
// }
// $book1=new Book;
// $book1->title="harray potter";
// $book1->author="JK Rowling";
// $book1->pages=400;

// echo $book1->author;
// echo "<br>";

// $book2=new Book;
// $book2->title="Lord of the rings";
// $book2->author="Tolkien";
// $book2->pages=300;
// echo $book2->title;


//actual constructor:
class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages){
    $this->title=$aTitle;
    $this->author=$aAuthor;
    $this->pages=$aPages;
    }

    function hasAward(){
        if($this->pages >=300){
            return "true";
        }
        return "false";
    }
}
$book1= new Book("Harry Potter", "jk rowling", 400);
$book2= new Book("Adffgfg", "Anne", 200);
echo $book1->author;
echo "<br>";
echo $book1->hasAward();
echo "<br>";
echo $book2->hasAward();
echo "<hr>";



//getter n setter
class Movie{
 public $title;
 private $rating;
 function __construct($title, $rating){
    $this->title=$title;
    // $this->rating=$rating;
    $this->setRating($rating);

 }
 function getRating(){
    return $this->rating;
 }
 //basic setter function
//  function setRating($rating){
//     $this->rating=$rating;
//  }
 function setRating($rating){
    if($rating=="G"|| $rating=="PG" || $rating=="R"){
        $this->rating=$rating;
    }else{
        $this->rating="NR";
    }
 }
}
$avengers=new Movie("Avengers", "PG-13");
//valid ratings are G,PG,R
 //echo $avengers->rating;
 $avengers->setRating("dog");
echo $avengers->getRating();
echo "<hr>";

//inheritence
class Chef{
    function makeChicken(){
        echo "the chef makes chicken <br>";
    }
    function makeSalad(){
        echo "the chef makes Salad <br>";
    }
    function makeSpecialDish(){
        echo "the chef makes SpecialDish <br>";
    }
}
class ItalianChef extends Chef{
    function makePasta(){
        echo "the chef makes Pasta<br>";
    }
    //overwrite this function
    function makeSpecialDish(){
        echo "the chef makes chichken parm <br>";
    }

}
$chef=new chef();
$chef->makeChicken();
echo "<hr>";
$ItalianChef=new ItalianChef();
$ItalianChef->makePasta();

    ?>
</body>
</html>