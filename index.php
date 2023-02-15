<?php

$url = 'https://dummyjson.com/user';

$dummyJson = file_get_contents($url);
$data = json_decode($dummyJson, true);

// echo '<pre>';
// echo print_r($data);
// echo '</pre>';

// echo '<div>';
// foreach ($data as $key => $value) {

//     echo '<img src="' . $data['users'][0]['image'] . '"><br>';
//     echo 'prénom: ' . $data['users'][0]['firstName'] . '<br>';
//     echo 'nom: ' . $data['users'][0]['maidenName'] . '<br>';
//     echo 'Email: ' . $data['users'][0]['email'] . '<br>';
// }
// echo '</div>';

for ($i = 0; $i < count($data['users']); $i++) {
    echo '<div style="display:flex;flex-wrap:wrap;">';
    echo '<div style="display:flex;flex-direction:column;text-align:center;">';
    echo '<img src="' . $data['users'][$i]['image'] . '"><br>';
    echo  $data['users'][$i]['firstName'] . '<br>';
    echo  $data['users'][$i]['maidenName'] . '<br>';
    echo  $data['users'][$i]['email'] . '<br>';
    echo '</div>';
    echo '</div';
}
