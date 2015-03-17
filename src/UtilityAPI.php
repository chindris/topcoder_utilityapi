<?php

/**
 * @file
 *  The main UtilityAPI class.
 *
 *  @todo: create a factory.
 */
namespace UtilityAPI;

use UtilityAPI\Request\UtilityAPIRequestInterface;

use UtilityAPI\Request\UtilityAPIRequest;

use UtilityAPIConfig\UtilityAPIConfig;

class UtilityAPI {

  public function __construct() {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    print_r(UtilityAPIConfig::$utility_api_credentials);
  }

  public function listAccounts() {
    $request = new UtilityAPIRequest(UtilityAPIConfig::$utility_api_service, UtilityAPIConfig::$utility_api_end_points['accounts']);


    //$credentials = UtilityAPIConfig::$utility_api_credentials;
    //$end_point_configuration = UtilityAPIConfig::$utility_api_end_points['accounts'];
    //$this->callEndPoint($end_point_configuration, $credentials);
    //return $this->performRequest();
  }

  public function handleRequest(UtilityAPIRequestInterface $request) {
    $end_point_configuration = $request->getEndPointConfiguration();
    // Based on the configuration, we instantiate the chain of responsability.

    //$end_point_controller = new $end_point_configuration['controller']();
  }
}
