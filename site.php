<! DOCTYPE html>
<html>
<head>
<meta charset= "utf-8">
<title>
PHP
 </title>

</head>
<body>

Hello World

<?php
Class Movie{
    public $title;
    private $rating;

    function __construct($title, $rating){
        $this->title = $title;
        $this->setrating($rating);
    }
    function setrating($rating){
        $this->rating = $rating;
    }
    function getrating(){
        return $this->rating;
    }
}

$joker = new Movie("Joker","Very Good");

$joker->setrating("Expceptional");
echo $joker->getrating();

echo $joker->title;
?>
</body>
</html>