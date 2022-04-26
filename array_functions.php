<?php


$array1 = array(101=>"PHP",267=>"C#",983=>"HTML",633=>"Java",737=>"SQL",832=>"Python",823=>"Android",102=>"PHP");
$prds = array("Chips" => 50,"Chocolate" => 120, "Biscuits" => 25, "Pepsi" => 110,
                "Ice cream" => 120 , "Juice" => 95);

$array2=array(733=>"R Programming",393=>"MySql",838=>"C Language",904=>"Wordpress",123=>"HTML",777=>"C#");

$merged_array = array_merge($array1,$array2,$prds);

echo "<h2>Merged Array</h2>";
foreach($merged_array as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


echo "<h2>Array Size</h2>";
echo "<b>Array1 Size: </b>".sizeof($array1)."<br>";
echo "<b>Array1 Size: </b>".count($array1)."<br>";


$flipped = array_flip($array1);

echo "<h2>Flipped Array</h2>";
foreach($flipped as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


$count_values = array_count_values($array1);

echo "<h2>Array Count Values</h2>";
foreach($count_values as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


$keys = array_keys($prds);

echo "<h2>Array Keys</h2>";
foreach($keys as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


echo "<h2>Before Array Reverse</h2>";
foreach($prds as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

$reverse = array_reverse($prds);

echo "<h2>After Array Reverse</h2>";
foreach($reverse as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

$intersect = array_intersect($array1,$array2);

echo "<h2>Array Intersect</h2>";
foreach($intersect as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


echo "<h2>Array Key Exists</h2>";
echo (array_key_exists("Kitkat",$prds))?"Key Found":"Key Not Found";





echo "<h2>Before Array Shift</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

$shift = array_shift($array1);
array_shift($array1);

echo "<h2>After Array Shift</h2>";
echo $shift."<br><br>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


echo "<h2>Before Array Pop</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

$pop = array_pop($array1);
array_pop($array1);

echo "<h2>After Array Pop</h2>";
echo $pop."<br><br>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}


array_push($array1,"C#","PHP","Git","Laravel");

echo "<h2>After Array Push</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}



echo "<h2>Before Array Sort (Indexed Array)</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

sort($array1);

echo "<h2>After Array Ascending Sort (Indexed Array)</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}



echo "<h2>Before Array Sort (Indexed Array)</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

rsort($array1);

echo "<h2>After Array Descending Sort (Indexed Array)</h2>";
foreach($array1 as $k=>$v)
{
    echo $k."--->".$v."<br>";
}




//Associative Array Sort


echo "<h2>Before Array Sort (Associative Array)</h2>";
foreach($prds as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

asort($prds);

echo "<h2>After Array Ascending Sort (Associative Array)</h2>";
foreach($prds as $k=>$v)
{
    echo $k."--->".$v."<br>";
}



echo "<h2>Before Array Sort (Associative Array)</h2>";
foreach($prds as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

arsort($prds);

echo "<h2>After Array Descending Sort (Associative Array)</h2>";
foreach($prds as $k=>$v)
{
    echo $k."--->".$v."<br>";
}

?>