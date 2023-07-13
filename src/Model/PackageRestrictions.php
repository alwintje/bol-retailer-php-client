<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class PackageRestrictions extends AbstractModel
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
            'maxWeight' => [ 'model' => null, 'array' => false ],
            'maxDimensions' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The weight of a package.
     */
    public $maxWeight;

    /**
     * @var string The dimensions of a package.
     */
    public $maxDimensions;
}
