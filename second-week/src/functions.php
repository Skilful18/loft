<?php



function task1()
{
}
function task2()
{
}

function task3()
{

    $i = 1;
    while ($i <= 50):

        $name = ['Andrey', 'Ivan', 'Masha', 'Kseniya', 'Natasha'];
        $rand = mt_rand(0, count($name) - 1);
        $age = mt_rand(18,45);

        $user = ['id' => $i, 'name' => $name[$rand], 'age' => $age];

        $users = ["user_$i" => $user];
        $i++;

        echo "<pre>";
        echo json_encode($users);

    endwhile;


//    foreach ($users as $user) {
//        $a = array_fill_keys($users, 'id');
//        $b = array_fill_keys($users, 'name');
//        $c = array_fill_keys($users, 'age');
//        $users_full = array_merge_recursive($a, $b, $c);
//    }

//
//    $key = 'key1';
//    $value = 'value1';
//
//    $array[$key] = $value;
//
//    $key = ['mkey1','mkey2','mkey3','mkey4'];
//    $value = ['mvalue1', 'mvalue2', 'mvalue3', 'mvalue4'];
//
//    for ($i = 0; $i<count($key); $i++) {
//        $array[$key[$i]] = $value[$i];
//    }

//    echo "<pre>";
//    print_r($array);

}
