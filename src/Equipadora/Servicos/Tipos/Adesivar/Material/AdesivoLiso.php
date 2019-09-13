<?php


namespace Equipadora\Servicos\Tipos\Adesivar\Material;


class AdesivoLiso implements IMaterial
{

    public function getValor(): float
    {
        return 40;
    }
}