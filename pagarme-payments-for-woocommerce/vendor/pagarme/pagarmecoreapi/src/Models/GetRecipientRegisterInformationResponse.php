<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

/**
 *Recipient response
 */
class GetRecipientRegisterInformationResponse implements JsonSerializable
{

    /**
     * Company Name
     * @required
     * @maps company_name
     * @var string $companyName public property
     */
    public $companyName;

    /**
     * Trading Name
     * @required
     * @maps trading_name
     * @var string $tradingName public property
     */
    public $tradingName;

    /**
     * Annual Revenue
     * @required
     * @maps annual_revenue
     * @var string $annualRevenue public property
     */
    public $annualRevenue;

    /**
     * Corporation Type
     * @maps corporation_type
     * @var string $corporationType public property
     */
    public $corporationType;

    /**
     * Founding Date
     * @maps founding_date
     * @var string $foundingDate public property
     */
    public $foundingDate;

    /**
     * Main Address
     * @required
     * @maps main_address
     * @var \PagarmeCoreApiLib\Models\GetRecipientAddressResponse $mainAddress public property
     */
    public $mainAddress;

    /**
     * Managing Partners
     * @required
     * @maps managing_partners
     * @var mixed $managingPartners public property
     */
    public $managingPartners;

    /**
     * Address
     * @required
     * @maps address
     * @var \PagarmeCoreApiLib\Models\GetRecipientAddressResponse $address public property
     */
    public $address;

    /**
     * Professional Occupation
     * @required
     * @maps professional_occupation
     * @var string $professionalOccupation public property
     */
    public $professionalOccupation;

    /**
     * Monthly Income
     * @required
     * @maps monthly_income
     * @var string $monthlyIncome public property
     */
    public $monthlyIncome;

    /**
     * Birthdate
     * @required
     * @maps birthdate
     * @var string $birthdate public property
     */
    public $birthdate;

    /**
     * Mother Name
     * @maps mother_name
     * @var string $motherName public property
     */
    public $motherName;

    /**
     * Name
     * @required
     * @maps name
     * @var string $name public property
     */
    public $name;

    /**
     * E-mail
     * @required
     * @maps email
     * @var string $email public property
     */
    public $email;

    /**
     * Document
     * @required
     * @maps document
     * @var string $document public property
     */
    public $document;

    /**
     * Type
     * @required
     * @maps type
     * @var string $type public property
     */
    public $type;

    /**
     * Site Url
     * @maps site_url
     * @var string $siteUrl public property
     */
    public $siteUrl;

    /**
     * Phone Numbers
     * @required
     * @maps phone_numbers
     * @var \PagarmeCoreApiLib\Models\GetRecipientPhonesResponse[] $phoneNumbers public property
     */
    public $phoneNumbers;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                            $email              Initialization value for $this->email
     * @param string                            $document           Initialization value for $this->document
     * @param string                            $type               Initialization value for $this->type
     * @param string                            $siteUrl            Initialization value for $this->siteUrl
     * @param string                            $phoneNumbers       Initialization value for $this->phoneNumbers
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 11:
                $this->email                    = func_get_arg(0);
                $this->document                 = func_get_arg(1);
                $this->type                     = func_get_arg(2);
                $this->siteUrl                  = func_get_arg(3);
                $this->phoneNumbers             = func_get_arg(4);
                $this->name                     = func_get_arg(5);
                $this->motherName               = func_get_arg(6);
                $this->birthdate                = func_get_arg(7);
                $this->monthlyIncome            = func_get_arg(8);
                $this->professionalOccupation   = func_get_arg(9);
                $this->address                  = func_get_arg(10);
                break;

            case 12:
                $this->email                    = func_get_arg(0);
                $this->document                 = func_get_arg(1);
                $this->type                     = func_get_arg(2);
                $this->siteUrl                  = func_get_arg(3);
                $this->phoneNumbers             = func_get_arg(4);
                $this->companyName              = func_get_arg(5);
                $this->tradingName              = func_get_arg(6);
                $this->annualRevenue            = func_get_arg(7);
                $this->corporationType          = func_get_arg(8);
                $this->foundingDate             = func_get_arg(9);
                $this->mainAddress              = func_get_arg(10);
                $this->managingPartners         = func_get_arg(11);
                break;

            default:
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['email']                      = $this->email;
        $json['document']                   = $this->document;
        $json['type']                       = $this->type;
        $json['site_url']                   = $this->siteUrl;
        $json['phone_numbers']              = $this->phoneNumbers;
        $json['company_name']               = $this->companyName;
        $json['trading_name']               = $this->tradingName;
        $json['annual_revenue']             = $this->annualRevenue;
        $json['corporation_type']           = $this->corporationType;
        $json['founding_date']              = $this->foundingDate;
        $json['main_address']               = $this->mainAddress;
        $json['managing_partners']          = $this->managingPartners;
        $json['name']                       = $this->name;
        $json['mother_name']                 = $this->motherName;
        $json['birthdate']                  = $this->birthdate;
        $json['monthly_income']              = $this->monthlyIncome;
        $json['professional_occupation']     = $this->professionalOccupation;
        $json['address']                    = $this->address;

        return $json;
    }
}