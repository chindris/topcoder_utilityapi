<?php

namespace src;

use GuzzleHttp\Client;

class TestGuzzle {

  public static function testGuzzle() {
    $client = new Client();
    $response = $client->get('https://utilityapi.com/api/accounts.json', array('query' => array('access_token' => '1ca6ab6728b64092ae5a6ecf93741928')));
//print_r($response);
print_r($response->json());
  }
}

TestGuzzle::testGuzzle();
//echo 'test';