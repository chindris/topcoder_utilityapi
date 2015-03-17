<?php

namespace UtilityAPI\Request;

/**
 * @file
 *  Contains a class which encapsulates the data of a request.
 */

/**
 * @todo: add comments.
 *
 */
class UtilityAPIRequest implements UtilityAPIRequestInterface {
  private $utility_api_service;
  private $end_point_configuration;

  public function __construct(array $utility_api_service, array $end_point_configuration) {
    $this->utility_api_service = $utility_api_service;
    $this->end_point_configuration = $end_point_configuration;
  }

  public function getUtilityApiService() {
    return $this->utility_api_service;
  }

  public function getEndPointConfiguration() {
    return $this->end_point_configuration;
  }

}
