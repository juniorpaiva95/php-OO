<?php


namespace Equipadora\Acessorios;


abstract class AbstractAcessorio implements IAcessorio
{
    private $quantidade;

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade($quantidade): void
    {
        $this->quantidade = $quantidade;
    }


}