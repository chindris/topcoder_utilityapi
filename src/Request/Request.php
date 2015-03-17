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
class Request implements RequestInterface {
  private $utility_api_service;
  private $end_point_configuration;
  private $utility_api_credentials;
  private $end_point_url;

  public function __construct(array $end_point_configuration, array $utility_api_service, array $utility_api_credentials) {
    $this->utility_api_service = $utility_api_service;
    $this->end_point_configuration = $end_point_configuration;
    $this->utility_api_credentials = $utility_api_credentials;
  }

  public function getUtilityApiService() {
    return $this->utility_api_service;
  }

  public function getEndPointConfiguration() {
    return $this->end_point_configuration;
  }

  public function getUtilityApiCredentials() {
    return $this->utility_api_credentials;
  }

  public function setEndPointURL($end_point_url) {
    $this->end_point_url = $end_point_url;
  }

  public function getEndPointURL() {
    return $this->end_point_url;
  }

}
