<?php


function travelExp($sal)
{
    $t = 0.15 * $sal;
    return $t;
}

function healthExp($sal)
{
    $t = 0.10 * $sal;
    return $t;
}

function fuelExp($sal)
{
    $t = 0.08 * $sal;
    return $t;
}

function rentExp($sal)
{
    $t = 0.06 * $sal;
    return $t;
}
function foodExp($sal)
{
    $t = 0.04 * $sal;
    return $t;
}

function tax($sal)
{
    $t = 0.05 * $sal;
    return $t;
}



?>