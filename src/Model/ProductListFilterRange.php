<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProductListFilterRange extends AbstractModel
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
            'rangeId' => [ 'model' => null, 'array' => false ],
            'min' => [ 'model' => null, 'array' => false ],
            'max' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The id of the range filter the products can be found within.
     */
    public $rangeId;

    /**
     * @var float The minimum value for the range that can be used to filter the products.
     */
    public $min;

    /**
     * @var float The maximum value for the range that can be used to filter the products.
     */
    public $max;
}
