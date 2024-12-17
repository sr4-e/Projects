<?php
//arrayFunction

//array_change_key_case() Function : changes all keys in an array to lowercase or uppercase.
$Name=array("s"=>"Samr,","e"=>"Ezzi,","a"=>"Al-kuromi");
print_r(array_change_key_case($Name,CASE_UPPER));
echo "<br><br>";


//array_chunk() Function : splits an array into chunks of new arrays.
$Branches=array("IT","IS","CS","CS","GR","AI");
print_r(array_chunk($Branches,2) );
echo "<br><br>";


//array_column() Function : returns the values from a single column in the input array.
$student = array(
    array('id' => 20220101,'name' => 'Ahmed','maijor' => 'IT,',),
    array('id' => 20220102,'name' => 'Mohammed','maijor' => 'MIS,',),
    array('id' => 20220103,'name' => 'Hossam','maijor' => 'IS', )
  );
  $maijor = array_column($student, 'maijor');
  print_r($maijor);
  echo "<br><br>";


//array_combine() Function : creates an array by using the elements from one "keys" array and one "values" array.
$name=array("Ahmed","Mohammed","Hossam");
$maijor=array("IT,","MIS,","IS");
$combine_array=array_combine($name,$maijor);
print_r($combine_array);
echo "<br><br>";


//array_count_values() Function : counts all the values of an array.
$Branches=array("IT","IS","CS","CS","GR","AI");
print_r(array_count_values($Branches) );
echo "<br><br>";


//array_diff() Function : compares the values of two (or more) arrays, and returns the differences.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr=array_diff($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_diff_assoc() Function : compares the keys and values of two (or more) arrays, and returns the differences.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("1"=>"Ali","2"=>"Samr","8"=>"Mohammed");
$arr=array_diff_assoc($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_diff_key() Function : compares the keys of two (or more) arrays, and returns the differences.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr=array_diff_key($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_diff_uassoc() Function : compares the keys and values of two (or more) arrays, and returns the differences.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr3=array("1"=>"Ali","3"=>"Ahmed","6"=>"Mohammed","4"=>"Samer");
$arr=array_diff($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_diff_ukey() Function : compares the keys of two (or more) arrays, and returns the differences.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr3=array("1"=>"Ali","3"=>"Ahmed","6"=>"Mohammed","4"=>"Samer");
$arr=array_diff($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_fill() Function : fills an array with values.
$arr1=array_fill(2,4,"BMW");       //starts with 2 and print 4 arrays
$arr2=array_fill(0,1,"Ford");        //starts with 0 and print only one array
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br><br>";


//array_fill_keys() Function : fills an array with values, specifying keys.
$keys=array("1","2","3","4");
$arr1=array_fill_keys($keys,"IT");
print_r($arr1);
echo "<br><br>";


//array_filter() Function : filters the values of an array using a callback function.
function test_odd($var)
  {return($var & 1);}
$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
echo "<br><br>";


//array_flip() Function : flips/exchanges all keys with their associated values in an array.
$Name=array("S"=>"Samr","E"=>"Ezzi","A"=>"Al-kuromi");
$result=array_flip($Name);
print_r($result);
echo "<br><br>";


//array_intersect() Function : compares the values of two (or more) arrays, and returns the matches.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr=array_intersect($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_intersect_assoc() Function : compares the keys and values of two (or more) arrays, and returns the matches.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr=array_intersect($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_intersect_key() Function : compares the keys of two (or more) arrays, and returns the matches.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","3"=>"Mohammed");
$arr=array_intersect_key($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_intersect_uassoc() Function : compares the keys and values of two (or more) arrays, and returns the matches.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr3=array("1"=>"Ali","3"=>"Ahmed","6"=>"Mohammed","4"=>"Samer");
$arr=array_diff($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_intersect_ukey() Function : compares the keys of two (or more) arrays, and returns the matches.
$arr1=array("1"=>"Ali","2"=>"Ahmed","3"=>"Mohammed","4"=>"Samer");
$arr2=array("5"=>"Ali","6"=>"Samr","7"=>"Mohammed");
$arr3=array("1"=>"Ali","3"=>"Ahmed","6"=>"Mohammed","4"=>"Samer");
$arr=array_diff($arr1,$arr2);
print_r($arr);
echo "<br><br>";


//array_key_exists() Function : checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
$arr=array("Samr"=>"S","Ezzi"=>"E");
if (array_key_exists("Samr",$arr))
  {
    echo "Key exists!";
  }
else
  {
    echo "Key does not exist!";
  }
echo "<br><br>";


//array_keys() Function : returns an array containing the keys.
$Branches=array("IT"=>"Information Technology","IS"=>"Information System","Computer Science"=>"CS");
print_r(array_keys($Branches) );
echo "<br><br>";


//array_map() Function : sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
function myfunction($num)
{
  return($num*$num);
}

$arr=array(1,2,3,4,5);
print_r(array_map("myfunction",$arr));
echo "<br><br>";


//array_merge() Function : merges one or more arrays into one array.
$arr1=array("Porsche","Audi");
$arr2=array("Jaguar","Maserati");
print_r(array_merge($arr1,$arr2));
echo "<br><br>";


//array_merge_recursive() Function : merges one or more arrays into one array.
$arr1=array("Porsche","Audi");
$arr2=array("Jaguar","Maserati");
print_r(array_merge_recursive($arr1,$arr2));
echo "<br><br>";


//array_multisort() Function : returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.
$arr1=array("Porsche","Audi","Jaguar","Maserati");
array_multisort($arr1);
print_r($arr1);
echo "<br><br>";


//array_pad() Function : inserts a specified number of elements, with a specified value, to an array.
$arr=array("First","Second");
print_r(array_pad($arr,4,"Second"));
echo "<br><br>";


//array_pop() Function : deletes the last element of an array.
$arr1=array("Porsche","Audi","Jaguar","Maserati");
array_pop($arr1);
print_r($arr1);
echo "<br><br>";


//array_product() function calculates and returns the product of an array.
$arr=array(8,8);
echo(array_product($arr));
echo "<br><br>";


//array_push() Function : inserts one or more elements to the end of an array.
$arr=array("Jaguar","Maserati");
array_push($arr,"Porsche","Audi");
print_r($arr);
echo "<br><br>";


//array_rand() Function : returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
$arr=array("Jaguar","Maserati","Porsche","Audi");
$random_keys=array_rand($arr,3);
echo $arr[$random_keys[0]]."<br>";
echo $arr[$random_keys[1]]."<br>";
echo $arr[$random_keys[2]];

?>