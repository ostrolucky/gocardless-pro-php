<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * Refund objects represent (partial) refunds of a
  * [payment](https://developer.gocardless.com/pro/#api-endpoints-payment) back
  * to the
  * [customer](https://developer.gocardless.com/pro/#api-endpoints-customers).
 
  * * 
  * The API allows you to create, show, list and update your refunds.
  *
  * 
  * GoCardless will notify you via a
  * [webhook](https://developer.gocardless.com/pro/#webhooks) whenever a refund
  * is created.
  * 
  * _Note:_ A payment that has been (partially) refunded
  * can still receive a late failure or chargeback from the banks.
  */
class Refund
{

    private $data;
    private $response;

  /**
    * Creates a new Resource from a http response passing in the data.
    * @param stdClass $data Data coming into the resource.
    * @param Response $response \<no value>\Core\Response object.
    */
    public function __construct($data, $response = null)
    {
        // Don't blow up with blank data anymore for raw responses.
        if ($data === null) {
            $data = new \stdClass();
        }
        $this->response = $response;
        $this->data = $data;
    }


  /**
    * Amount in pence or cents.
    *
    * @return int
    */
    public function amount()
    {
        $field = 'amount';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed
    * [timestamp](https://developer.gocardless.com/pro/#overview-time-zones-dates),
    * recording when this resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
    * code. This is set to the currency of the refund's
    * [payment](https://developer.gocardless.com/pro/#api-endpoints-payments).
    *
    * @return string
    */
    public function currency()
    {
        $field = 'currency';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "RF"
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return 
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Key-value store of custom data. Up to 3 keys are permitted, with key names
    * up to 50 characters and values up to 200 characters.
    *
    * @return 
    */
    public function metadata()
    {
        $field = 'metadata';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }



  /**
    * Get the response object.
    * @return \GoCardless\Core\Response
    */
    public function response()
    {
        return $this->response;
    }

  /**
    * Returns a string representation of the project.
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Refund Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
