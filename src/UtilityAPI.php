<?php

/**
 * @file
 *  The main UtilityAPI class.
 *
 *  @todo: create a factory.
 */
namespace UtilityAPI;

use UtilityAPI\RequestHandler\RequestHandlerInterface;

use UtilityAPI\Request\RequestInterface;

use UtilityAPI\Request\Request;

use UtilityAPIConfig\UtilityAPIConfig;

class UtilityAPI {

  public function __construct() {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    print_r(UtilityAPIConfig::$utility_api_credentials);
  }

  public function listAccounts() {
    return $this->handleRequest(UtilityAPIConfig::$utility_api_end_points['accounts']);
  }

  public function handleRequest(array $end_point_configuration) {
    $request = new Request($end_point_configuration, UtilityAPIConfig::$utility_api_service, UtilityAPIConfig::$utility_api_credentials);
    // Based on the configuration, we instantiate the chain of responsability.
    $chain_head = $this->getChain($end_point_configuration['call_chain']);
    $chain_head->handleNextRequest($request);
    return $request;
  }

  /**
   * @todo: rename this method.
   */
  public function getChain($call_chain) {
    $chain_head = null;
    $current = null;
    $previous = null;
    foreach ($call_chain as $key => $configuration) {
      if (!empty($configuration['handler'])) {
        $current = new $configuration['handler']();
        if ($current instanceof RequestHandlerInterface) {
          if (empty($chain_head)) {
            $chain_head = $current;
            $previous = $current;
            continue;
          }
          if (!empty($previous)) {
            $previous->setSuccessor($current);
          }
        }
      }
    }
    return $chain_head;
  }
}
