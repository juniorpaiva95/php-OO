<?php


namespace Equipadora\Servicos\Tipos;

use Equipadora\Servicos\Tipos\Adesivar\Material\IMaterial;

interface ITipo
{
    public function getMaterial(): IMaterial;
}