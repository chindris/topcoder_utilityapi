<?php

namespace UtilityAPI\RequestHandler;

use UtilityAPI\Request\RequestInterface;

/**
 * @file
 */

class RequestHandlerURL extends RequestHandler {

  private $handler_successor;

  public function handleRequest(RequestInterface $request) {
    $host_settings = $request->getUtilityApiService();
    $credentials = $request->getUtilityApiCredentials();
    $end_point = $request->getEndPointConfiguration();

    $end_point_url = '';
    $url_parts = array();
    $url_parts[] = $host_settings['protocol'] . '://';
    $url_parts[] = $host_settings['host'];
    if (!empty($host_settings['port']) && $host_settings['port'] != '80') {
      $url_parts[] = ':80';
    }
    if (!empty($host_settings['base_path'])) {
      $url_parts[] = '/' . $host_settings['base_path'];
    }
    // @todo: can we make this nicer?
    if (!empty($end_point['call_chain']['url_handler']['target'])) {
      $url_parts[] = '/' . $end_point['call_chain']['url_handler']['target'];
    }
    $query = array();
    foreach ($credentials as $key => $value) {
      $query[] = urlencode($key) . '=' . urlencode($value);
    }
    if (!empty($query)) {
      $url_parts[] = '?' . implode('&', $query);
    }

    $end_point_url = implode('', $url_parts);
    $request->setEndPointURL($end_point_url);
  }
}
