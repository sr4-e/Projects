<?php 

//if statement
echo "If statement: <br>";

$val1 = 4;
$val2 = 13;
$val3 = 8;
if($val1 > $val2 || $val2 > $val3)
{
    echo " I will have a bright future! <br> <br>";
}



//if else statement
echo "If else statement: <br>";

if($val1 > $val2)
{
    echo "$val1 is bigger than $val2 <br> <br>";
}
else 
{
    echo "$val1 is not bigger than $val2 <br> <br>";
}



//switch
echo "Switch statement: <br>";

$car = "Lamborghini";
switch ($car) {
  case "Maserati":
    echo "Wow you have a Maserati! <br><br>";
    break;
  case "Lamborghini":
    echo "Wow you have a Lamborghini! <br><br>";
    break;
  case "Porsche":
    echo "Wow you have a Porsche! <br><br>";
    break;
 case "Jaguar":
    echo "Wow you have a Jaguar! <br><br>";
      break;
 case "Audi":
    echo "Wow you have a Audi! <br><br>";
        break;
  default:
    echo "It's ok ,you will have  one soon..! <br><br>";
}



//FOR
echo "For statement: <br>";

for($num=0;$num<=5;$num++)
{
    echo "The number is : $num <br>";
}
echo "<br>";



//Continue in For 
echo "Continue in for statement: <br>";

for($num=0;$num<=5;$num++)
{
  if ($num ==3 ) {
    continue;
  }
    echo "The number is : $num <br>";
}
echo "<br>";


//Break in For 
echo "Break in for statement: <br>";

for($num=0;$num<=5;$num++)
{
  if ($num ==3 ) {
    break;
  }
    echo "The number is : $num <br>";
}
echo "<br>";



//Foeach
echo "Foreach statement: <br>";
$Siblings = array("Samr"=>"Information Technology", "Samer"=>"Business Management", "Sally"=>"Medical college");

foreach ($Siblings as $name => $branch) {
  echo "$name : $branch <br>";
}
echo "<br> <br>";



//Continue in Foreach
echo "Continue in Foreach statement: <br>";
$Siblings = array("Samr"=>"Information Technology", "Samer"=>"Business Management", "Sally"=>"Medical college");

foreach ($Siblings as $name => $branch) {
  if($name =="Sally" && $branch == "Medical college")
  {continue;}
  echo "$name : $branch <br>";
}
echo "<br> <br>";



//Break in Foreach
echo "Break in Foreach statement: <br>";
$Siblings = array("Samr"=>"Information Technology", "Samer"=>"Business Management", "Sally"=>"Medical college");

foreach ($Siblings as $name => $branch) {
  if($name =="Samer" && $branch == "Business Management")
  {break;}
  echo "$name : $branch <br>";
}
echo "<br> <br>";



//While
echo "While statement: <br>";

$val4 = 1;

while ($val4 <= 5) {
  echo "$val4 <br>";
  $val4++;}
  echo "<br> <br>";



//continue in while
echo "Continue in while statement: <br>";

$val4 = 1;

while ($val4 <= 5) {
  if ($val4 ==3 ) {
    continue;
  }
  echo "$val4 <br>";
  $val4++;}
  echo "<br> <br>";



//Break in while
echo "Break in while statement: <br>";

$val4 = 1;

while ($val4 <= 5) {
  if ($val4 ==3 ) 
  {break;}
  echo "$val4 <br>";
  $val4++;
}
  echo "<br> <br>";



//Do While
echo "Do while statement: <br>";
$val5 = 1;
do{
  if ($val5 ==3 )
  {break;}
  echo "<br>";
  $val++;
}while ($val5 <=5);
echo "<br> <br>";



//Continue in Do while
echo "Continue in Do while statement: <br>";
$val5 = 1;
do{
  if ($val5 ==3 ) {
    continue;
  }
  echo "<br>";
  $val++;
}while ($val5 <=5);
echo "<br> <br>";



//Break in Do while
echo "Break in Do while statement: <br>";
$val5 = 1;
do{
  if ($val5 ==3 ) {
    break;
  }
  echo "<br>";
  $val++;
}while ($val5 <=5);
echo "<br> <br>";
?>
