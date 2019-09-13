<?php


namespace Equipadora\Servicos\Tipos\Adesivar;


use Equipadora\Servicos\Tipos\AbstractTipo;
use Equipadora\Servicos\Tipos\Adesivar\Material\IMaterial;

class Adesivar extends AbstractTipo
{
    /**
     * @var int;
     */
    private $tamanhoMetros;

    public function __construct(IMaterial $material, int $tamanhoMetros)
    {
        $this->tamanhoMetros = $tamanhoMetros;
        parent::__construct($material);
    }


    /**
     * @return int
     */
    public function getTamanhoMetros(): int
    {
        return $this->tamanhoMetros;
    }

    /**
     * @param int $tamanhoMetros
     */
    public function setTamanhoMetros(int $tamanhoMetros)
    {
        $this->tamanhoMetros = $tamanhoMetros;
    }

}