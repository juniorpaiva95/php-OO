<?php


namespace Equipadora\Servicos\Tipos;


use Equipadora\Servicos\Tipos\Adesivar\Material\IMaterial;

abstract class AbstractTipo implements ITipo
{

    /**
     * @var IMaterial
     */
    private $material;


    /**
     * AbstractTipo constructor.
     * @param IMaterial $material
     */
    public function __construct(IMaterial $material)
    {
        $this->material = $material;
    }

    /**
     * @return IMaterial
     */
    public function getMaterial(): IMaterial
    {
        return $this->material;
    }

    /**
     * @param IMaterial $material
     */
    public function setMaterial(IMaterial $material): void
    {
        $this->material = $material;
    }



}