<?php
$lista1 = ['bruno', 'pedro', 'joão'];
$lista2 = ['patrícia', 'marcela', 'melissa'];
$lista3 = [...$lista1, ...$lista2, 'paulo', 'joana'];

print_r($lista3);