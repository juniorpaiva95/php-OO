<?php

require __DIR__."/vendor/autoload.php";

use Equipadora\Orcamento\Orcamento;
use Equipadora\Servicos\Tipos\Adesivar\Adesivar;
use Equipadora\Servicos\Tipos\Adesivar\Material\AdesivoFosco;
$orcamento = new Orcamento();

$orcamento->addServico(new Adesivar(new AdesivoFosco(), 5));

print_r($orcamento->calculaValorTotal());