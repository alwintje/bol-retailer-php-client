<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Offer extends AbstractModel
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
            'offerId' => [ 'model' => null, 'array' => false ],
            'retailerId' => [ 'model' => null, 'array' => false ],
            'countryCode' => [ 'model' => null, 'array' => false ],
            'bestOffer' => [ 'model' => null, 'array' => false ],
            'price' => [ 'model' => null, 'array' => false ],
            'fulfilmentMethod' => [ 'model' => null, 'array' => false ],
            'condition' => [ 'model' => null, 'array' => false ],
            'ultimateOrderTime' => [ 'model' => null, 'array' => false ],
            'minDeliveryDate' => [ 'model' => null, 'array' => false ],
            'maxDeliveryDate' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Unique identifier for an offer.
     */
    public $offerId;

    /**
     * @var string The ID of the retailer which the offer belongs to.
     */
    public $retailerId;

    /**
     * @var string The country code.
     */
    public $countryCode;

    /**
     * @var bool Indicator if the offer is the best offer within the country for the requested EAN.
     */
    public $bestOffer;

    /**
     * @var float The selling price to the customer of a single unit including VAT unless there is a discount. The price
     * should always have two decimals precision.
     */
    public $price;

    /**
     * @var string The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     */
    public $fulfilmentMethod;

    /**
     * @var string The condition of the offered product.
     */
    public $condition;

    /**
     * @var string The time in ISO 8601 format when the ultimate order time on the day in order to comply to the
     * maxDeliveryDate as a promise.
     */
    public $ultimateOrderTime;

    /**
     * @var string The date at which package can be delivered to customer earliest.
     */
    public $minDeliveryDate;

    /**
     * @var string The date at which package can be delivered to customer latest.
     */
    public $maxDeliveryDate;
}
