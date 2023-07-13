<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class PickupAppointment extends AbstractModel
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
            'commentToTransporter' => [ 'model' => null, 'array' => false ],
            'address' => [ 'model' => Address::class, 'array' => false ],
            'pickupTimeSlot' => [ 'model' => ReplenishmentPickupTimeSlot::class, 'array' => false ],
            'pickupDateTime' => [ 'model' => null, 'array' => false ],
            'cancellationReason' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string A comment to the transporter regarding the pickup appointment.
     */
    public $commentToTransporter;

    /**
     * @var Address
     */
    public $address;

    /**
     * @var ReplenishmentPickupTimeSlot
     */
    public $pickupTimeSlot;

    /**
     * @var string The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     */
    public $pickupDateTime;

    /**
     * @var string In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     */
    public $cancellationReason;

    public function getPickupDateTime(): ?\DateTime
    {
        if (empty($this->pickupDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->pickupDateTime);
    }
}
