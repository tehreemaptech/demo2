<?php

//Array Initialization

$stdMarks = array(67,89,65,78,71,99,45,59);   //array function initialization
$stdNames[0] = "Ali";                       //array identifier initialization
$stdNames[1] = "Hira";
$stdNames[2] = "Umer";
$stdNames[3] = "Uzma";
$stdNames[4] = "Kamal";
$stdNames[5] = "Kamran";
$stdNames[6] = "Iqra";

//Accessing Array

echo "Student 3 Name: ".$stdNames[2]."<br>";   //accessing with array identifier

for($i=0 ; $i < count($stdMarks); $i++)
{
    echo "<br>Marks ".$stdMarks[$i];
}

$stds = array(163738 => "Ali", 272728 => "Uzma" , 737383 => "Iqra", 
                526272 => "Umer", 748439=> "Hira", 828363 => "Kamran",
                 738393 => "Kiran");  //indexed array



//echo "<br>Name: ".$stds[163738];

foreach($stds as $key => $value)
        {
            echo "<p><b>Enrollment: </b>".$key;
            echo "<b> Name: </b>".$value."</p>";
        }

echo "<br><br>";
$prds = array("Chips" => 50,"Chocolate" => 120, "Biscuits" => 25, "Pepsi" => 110,
                "Ice cream" => 120 , "Juice" => 95);  //associative array



foreach($prds as $key => $value)
        {
            echo "<p><b>Product Name: </b>".$key;
            echo "<b>   Product Price: </b>".$value."</p>";
        }




?>
