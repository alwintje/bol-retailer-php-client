<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShipmentOrder extends AbstractModel
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
            'orderId' => [ 'model' => null, 'array' => false ],
            'orderPlacedDateTime' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string A unique identifier for the order this shipment is related to.
     */
    public $orderId;

    /**
     * @var string The date and time in ISO 8601 format when the order was placed.
     */
    public $orderPlacedDateTime;

    public function getOrderPlacedDateTime(): ?\DateTime
    {
        if (empty($this->orderPlacedDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->orderPlacedDateTime);
    }
}
