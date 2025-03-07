<?php
//Question 6 
// Question 7 
$Student = 
[
    "name" => "Chid",
    "age" => 20,
    "Place of Origin" => "Toronto",
    "Major" => "Computer Science"
];
foreach ($Student as $key => $value) 
{
    echo " Student's {$key} is {$value}.<br>";
}
function describePerson(string $name, int $age = 18): string 
{
    return "$name,  is $age years old.";
}
echo describePerson("Chid", 20);
echo "<br>";
echo describePerson("Tom", 21); 
?>