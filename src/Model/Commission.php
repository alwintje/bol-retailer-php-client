<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Commission extends AbstractModel
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
            'ean' => [ 'model' => null, 'array' => false ],
            'condition' => [ 'model' => null, 'array' => false ],
            'unitPrice' => [ 'model' => null, 'array' => false ],
            'fixedAmount' => [ 'model' => null, 'array' => false ],
            'percentage' => [ 'model' => null, 'array' => false ],
            'totalCost' => [ 'model' => null, 'array' => false ],
            'totalCostWithoutReduction' => [ 'model' => null, 'array' => false ],
            'reductions' => [ 'model' => Reduction::class, 'array' => true ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var string The condition of the offer.
     */
    public $condition;

    /**
     * @var float The intended selling price per single unit up to 2 decimals precision, including VAT.
     */
    public $unitPrice;

    /**
     * @var float A fixed commission fee, including VAT.
     */
    public $fixedAmount;

    /**
     * @var float A percentage of commission, based on the intended selling price per unit, including VAT.
     */
    public $percentage;

    /**
     * @var float The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers,
     * and excludes VAT for Belgium sellers.
     */
    public $totalCost;

    /**
     * @var float The total commission for selling this product at bol.com without reductions including VAT.
     */
    public $totalCostWithoutReduction;

    /**
     * @var Reduction[]
     */
    public $reductions = [];
}
