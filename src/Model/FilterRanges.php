<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class FilterRanges extends AbstractModel
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
            'rangeName' => [ 'model' => null, 'array' => false ],
            'min' => [ 'model' => null, 'array' => false ],
            'max' => [ 'model' => null, 'array' => false ],
            'unit' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The id of the range filter product can be found under.
     */
    public $rangeId;

    /**
     * @var string The name of the range filter product can be found under.
     */
    public $rangeName;

    /**
     * @var float The minimum value for the range that can be used to filter results.
     */
    public $min;

    /**
     * @var float The maximum value for the range that can be used to filter results.
     */
    public $max;

    /**
     * @var string The unit that applies to the min and max range values.
     */
    public $unit;
}
