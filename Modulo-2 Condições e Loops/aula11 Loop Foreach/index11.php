<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

foreach($ingredientes as $chave => $valor){
    echo "Item ".$chave.": ".$valor."<br/>";
}