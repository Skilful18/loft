<?php

function task1 ($str, $bool)
{
    if ($bool) {
        foreach ($str as $key => $value) {
            echo $value . ' ';
        }
    } else {
        foreach ($str as $key => $value) {
            echo '<p>' . $value . '</p>';
        }
    }
}

function task2 (... $args): string
{
    $array_shift = array_shift($args);
    $result = 0;
    if ($array_shift) {
        for ($i = 0; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } else {
        echo $args;
    }
    return '<br>' . implode(' + ', $args) . ' = ' .  $result;
}

function task3 (int $one_number, int $two_number)
{
    echo '<table border="4" >';
    for($i = 1; $i <= $one_number; $i++){
        echo '<tr><td>' . $i . '</td>';
        for($x = 2; $x <= $two_number; $x++){
            echo '<td>' . $i * $x . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}


function task4 ()
{

}
function task5 ()
{

}
function task6 ()
{

}
function task7 ()
{

}
function task8 ()
{

}
function task9 ()
{

}
function task10 ()
{

}