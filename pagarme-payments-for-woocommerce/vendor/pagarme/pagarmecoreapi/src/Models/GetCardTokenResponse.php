<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Card token data
 */
class GetCardTokenResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps last_four_digits
     * @var string $lastFourDigits public property
     */
    public $lastFourDigits;

    /**
     * @todo Write general description for this property
     * @required
     * @maps holder_name
     * @var string $holderName public property
     */
    public $holderName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps holder_document
     * @var string $holderDocument public property
     */
    public $holderDocument;

    /**
     * @todo Write general description for this property
     * @required
     * @maps exp_month
     * @var string $expMonth public property
     */
    public $expMonth;

    /**
     * @todo Write general description for this property
     * @required
     * @maps exp_year
     * @var string $expYear public property
     */
    public $expYear;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $brand public property
     */
    public $brand;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $lastFourDigits Initialization value for $this->lastFourDigits
     * @param string $holderName     Initialization value for $this->holderName
     * @param string $holderDocument Initialization value for $this->holderDocument
     * @param string $expMonth       Initialization value for $this->expMonth
     * @param string $expYear        Initialization value for $this->expYear
     * @param string $brand          Initialization value for $this->brand
     * @param string $type           Initialization value for $this->type
     * @param string $label          Initialization value for $this->label
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->lastFourDigits = func_get_arg(0);
            $this->holderName     = func_get_arg(1);
            $this->holderDocument = func_get_arg(2);
            $this->expMonth       = func_get_arg(3);
            $this->expYear        = func_get_arg(4);
            $this->brand          = func_get_arg(5);
            $this->type           = func_get_arg(6);
            $this->label          = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['last_four_digits'] = $this->lastFourDigits;
        $json['holder_name']      = $this->holderName;
        $json['holder_document']  = $this->holderDocument;
        $json['exp_month']        = $this->expMonth;
        $json['exp_year']         = $this->expYear;
        $json['brand']            = $this->brand;
        $json['type']             = $this->type;
        $json['label']            = $this->label;

        return $json;
    }
}