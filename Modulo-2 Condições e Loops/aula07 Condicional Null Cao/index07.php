<?php
$nome = 'Bruno';




$nomeCompleto = $nome ?? 'visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
