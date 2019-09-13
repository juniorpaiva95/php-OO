<?php

namespace Equipadora\Orcamento;

use Equipadora\Servicos\Tipos\ITipo;

class Orcamento
{
    /**
     * @var \ArrayObject
     */
    private $servicos;

    /**
     * Orcamento constructor.
     * @param \ArrayObject $servicos
     */
    public function __construct()
    {
        $this->servicos = new \ArrayObject();
    }


    public function addServico(ITipo $servico): void
    {
        $this->servicos->append($servico);
    }
    /**
     * @return \ArrayObject
     */
    public function getServicos(): \ArrayObject
    {
        return $this->servicos;
    }

    /**
     * @param \ArrayObject $servicos
     */
    public function setServicos(\ArrayObject $servicos)
    {
        $this->servicos = $servicos;
    }

    public  function calculaValorTotal(){
        /**
         * @var $servico ITipo
         */
        $valor = 0;
        foreach ($this->servicos as $servico){
            $valor += $servico->getMaterial()->getValor();
        }
        return $valor;
    }
}