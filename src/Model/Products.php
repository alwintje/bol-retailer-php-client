<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Products extends AbstractModel
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
            'description' => [ 'model' => null, 'array' => false ],
            'quantity' => [ 'model' => null, 'array' => false ],
            'unitPrice' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The description of the ordered product.
     */
    public $description;

    /**
     * @var int Amount of the product being ordered.
     */
    public $quantity;

    /**
     * @var float The selling price to the customer of a single unit including VAT.
     */
    public $unitPrice;
}
