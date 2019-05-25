<!DOCTYPE html>
<html> 
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  <title>Array</title>
</head>
<body> 
<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
  "Pink lady",
  "Chicken noodle soup",
  "Mongolian beef",
  "Strawberry cake"
];

/*
Print every array element in a new line.
*/
echo "<pre>";
print_r($food);
echo "</pre>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
  $food[0] => "Cocktail",
  $food[1] => "Soup",
  $food[2] => "Main Course",
  $food[3] => "Dessert",
];



/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo $food[0]. " | ".$food_assoc[$food[0]]."<br>";
echo $food[1]. " | ".$food_assoc[$food[1]]."<br>";
echo $food[2]. " | ".$food_assoc[$food[2]]."<br>";
echo $food[3]. " | ".$food_assoc[$food[3]];
// 

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$type = [
  $food[0] => "Cocktail",
  $food[1] => "Soup",
  $food[2] => "Main Course",
  $food[3] => "Dessert"
];

$origin = [
  $food[0] => "Italy",
  $food[1] => "Canada",
  $food[2] => "China",
  $food[3] => "England"
];



/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0]." | ".$type[$food[0]]." | ".$origin[$food[0]]."<br>";
echo $food[1]." | ".$type[$food[1]]." | ".$origin[$food[1]]."<br>";
echo $food[2]." | ".$type[$food[2]]." | ".$origin[$food[2]]."<br>";
echo $food[3]." | ".$type[$food[3]]." | ".$origin[$food[3]];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table class='table table-bordered w-50'>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>  
  <tr>
    <td>{$food[0]}</td>
    <td>{$type[$food[0]]}</td>
    <td>{$origin[$food[0]]}</td>
  </tr>
  <tr>
    <td>{$food[1]}</td>
    <td>{$type[$food[1]]}</td>
    <td>{$origin[$food[1]]}</td>
  </tr>
  <tr>
    <td>{$food[2]}</td>
    <td>{$type[$food[2]]}</td>
    <td>{$origin[$food[2]]}</td>
  </tr>
  <tr>
    <td>{$food[3]}</td>
    <td>{$type[$food[3]]}</td>
    <td>{$origin[$food[3]]}</td>
  </tr>
  </table>";
?>
</body>
</html>
