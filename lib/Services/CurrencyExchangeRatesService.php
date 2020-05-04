<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Services;

use \GoCardlessPro\Core\Paginator;
use \GoCardlessPro\Core\Util;
use \GoCardlessPro\Core\ListResponse;
use \GoCardlessPro\Resources\CurrencyExchangeRate;
use \GoCardlessPro\Core\Exception\InvalidStateException;


/**
 * Service that provides access to the CurrencyExchangeRate
 * endpoints of the API
 *
 * @method list()
 */
class CurrencyExchangeRatesService extends BaseService
{

    protected $envelope_key   = 'currency_exchange_rates';
    protected $resource_class = '\GoCardlessPro\Resources\CurrencyExchangeRate';


    /**
     * List exchange rates
     *
     * Example URL: /currency_exchange_rates
     *
     * @param  string[mixed] $params An associative array for any params
     * @return ListResponse
     **/
    protected function _doList($params = array())
    {
        $path = "/currency_exchange_rates";
        if(isset($params['params'])) { $params['query'] = $params['params'];
            unset($params['params']);
        }

        
        $response = $this->api_client->get($path, $params);
        

        return $this->getResourceForResponse($response);
    }

    /**
     * List exchange rates
     *
     * Example URL: /currency_exchange_rates
     *
     * @param  string[mixed] $params
     * @return Paginator
     **/
    public function all($params = array())
    {
        return new Paginator($this, $params);
    }

}
