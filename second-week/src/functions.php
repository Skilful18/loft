<?php



function task1(): array
{
    $name = ['Andrey', 'Ivan', 'Masha', 'Kseniya', 'Natasha'];

    return [
        'name' => $name[array_rand($name)],
        'age' => mt_rand(18,45)
    ];

}
function task2()
{
//    $i = 1;
//    $users[] = '';
//
//    while ($i <= 50){
//
//        $age = mt_rand(18,45);
//
//        $name = ['Andrey', 'Ivan', 'Masha', 'Kseniya', 'Natasha'];
//        $rand = mt_rand(0, count($name) - 1);
//        $user = ['id' => $i, 'name' => $name[$rand], 'age' => $age];
//        $users = ["user_$i" => $user];
//        $i++;
//
//        $json = json_encode($users);
//
//        file_put_contents('users.json', $json);
//        echo "<pre>";
//        print_r($json);
//
//    }
}

function task3()
{



}
