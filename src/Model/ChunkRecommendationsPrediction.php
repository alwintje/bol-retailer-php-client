<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ChunkRecommendationsPrediction extends AbstractModel
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
            'chunkId' => [ 'model' => null, 'array' => false ],
            'probability' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The identifier of the predicted GPC/Product Classification.
     */
    public $chunkId;

    /**
     * @var float The probability of the predicted chunk as a ratio, with eleven decimals of precision.
     */
    public $probability;
}
