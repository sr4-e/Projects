<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

//string
$name = "Samr";
echo "$name <br> <br>";

//Integer
$id = 202456;
echo "$id <br> <br>";

//Float or Double
$salary = 300.500;
echo "$salary <br> <br>";

//Boolean
$atendance = true;
echo "$atendance <br> <br>";

//Array
$languages = array("Arabic","English","C++","C#","Java","Frontend");
var_dump($languages);
echo "<br> <br>";

//Object
class card {
    public $name;
    public $id;
    public function __construct($name, $id) {
      $this->name = $name;
      $this->id = $id;
    }
    public function message() {
      return "I am " . $this->name . " with " . $this->id . " id";
    }
  }
  
  $myCard = new card("Samr", "202456");
 var_dump($myCard);
  echo "<br> <br>";
  

//NULL
$age = null;
echo "$age <br>";


?>
</body>
</html>