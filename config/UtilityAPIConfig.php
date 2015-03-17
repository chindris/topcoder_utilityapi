<?php

/**
 * @file
 *  Configuration class.
 *
 *  @todo: write documentation.
 */

namespace UtilityAPIConfig;

class UtilityAPIConfig {

  // In order to be able to access the UtilityAPI service, we need an access
  // token. You can generate a token from your account settings page. Make sure
  // that you generate an 'api' token.
  public static $utility_api_credentials = array(
    'access_token' => '1ca6ab6728b64092ae5a6ecf93741928',
  );

  // Here we store the configuration of the UtilityAPI host.
  public static $utility_api_service = array(
    'protocol' => 'https',
    'host' => 'utilityapi.com',
    'port' => '80',
    'base_path' => 'api',
  );

  // Here we store the configuration for the all the end points. Each value of the
  // array represents the configuration on one endpoint, and it can contain the
  // following values:
  // @todo: Define the values!
  public static $utility_api_end_points = array(
    // Returns a list of Account objects that you have permission to see.
    'accounts' => array(
      'call_chain' => array(
        'url_handler' => array(
          'target' => 'accounts',
          'handler' => 'UtilityAPI\RequestHandler\RequestHandlerURL',
        ),
        'request_handler' => array(
          'request_type' => 'get',
        ),
        'response_handler' => array(
          'format' => 'json'
        ),
      ),
    ),
  );
}
