<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProductIdsResponse extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'bolProductId' => [ 'model' => null, 'array' => false ],
            'eans' => [ 'model' => ProductIdsEan::class, 'array' => true ],
        ];
    }

    /**
     * @var string Identifier of the product. This id is specific to bol.com webshop.
     */
    public $bolProductId;

    /**
     * @var ProductIdsEan[]
     */
    public $eans = [];

    /**
     * Returns an array with the eans from eans.
     * @return string[] Eans from eans.
     */
    public function getEans(): array
    {
        return array_map(function ($model) {
            return $model->ean;
        }, $this->eans);
    }

    /**
     * Sets eans by an array of eans.
     * @param string[] $eans Eans for eans.
     */
    public function setEans(array $eans): void
    {
        $this->eans = array_map(function ($ean) {
            return ProductIdsEan::constructFromArray(['ean' => $ean]);
        }, $eans);
    }

    /**
     * Adds a new ProductIdsEan to eans by ean.
     * @param string $ean Ean for the ProductIdsEan to add.
     */
    public function addEan(string $ean): void
    {
        $this->eans[] = ProductIdsEan::constructFromArray(['ean' => $ean]);
    }
}
