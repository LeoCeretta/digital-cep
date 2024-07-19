<?php

require_once "vendor/autoload.php";

use Leoce\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipCode('22220070');

print_r($resultado);