<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProductAssets extends AbstractModel
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
            'usage' => [ 'model' => null, 'array' => false ],
            'order' => [ 'model' => null, 'array' => false ],
            'variants' => [ 'model' => ProductAssetsVariants::class, 'array' => true ],
        ];
    }

    /**
     * @var string Type of the asset being used for.
     */
    public $usage;

    /**
     * @var int The intended order of the product images.
     */
    public $order;

    /**
     * @var ProductAssetsVariants[]
     */
    public $variants = [];
}
