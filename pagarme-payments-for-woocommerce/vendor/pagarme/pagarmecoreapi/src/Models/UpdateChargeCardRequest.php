<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for updating card data
 */
class UpdateChargeCardRequest implements JsonSerializable
{
    /**
     * Indicates if the subscriptions using this card must also be updated
     * @required
     * @maps update_subscription
     * @var bool $updateSubscription public property
     */
    public $updateSubscription;

    /**
     * Card id
     * @required
     * @maps card_id
     * @var string $cardId public property
     */
    public $cardId;

    /**
     * Card data
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateCardRequest $card public property
     */
    public $card;

    /**
     * Indicates a recurrence
     * @required
     * @var bool $recurrence public property
     */
    public $recurrence;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool              $updateSubscription Initialization value for $this->updateSubscription
     * @param string            $cardId             Initialization value for $this->cardId
     * @param CreateCardRequest $card               Initialization value for $this->card
     * @param bool              $recurrence         Initialization value for $this->recurrence
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->updateSubscription = func_get_arg(0);
            $this->cardId             = func_get_arg(1);
            $this->card               = func_get_arg(2);
            $this->recurrence         = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['update_subscription'] = $this->updateSubscription;
        $json['card_id']             = $this->cardId;
        $json['card']                = $this->card;
        $json['recurrence']          = $this->recurrence;

        return $json;
    }
}