<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];
/*
echo '<h2>Ingredientes</h2>';

foreach($ingredientes as $chave => $valor){
    echo "Item ".($chave + 1).": ".$valor."<br/>";
}
*/

// para fazer uma lista desordenada com os valores

echo '<h2>Ingredientes</h2>';

echo '<ul>';
foreach($ingredientes as $valor){
    echo '<li>'.$valor.'</li>';
}
echo '</ul>';