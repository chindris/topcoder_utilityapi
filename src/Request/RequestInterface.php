<?php

namespace UtilityAPI\Request;

/**
 * @file
 *  @todo: add comments.
 */

interface RequestInterface {

  public function getUtilityApiService();

  public function getEndPointConfiguration();

   public function getUtilityApiCredentials();

   public function setEndPointURL($end_point_url);

   public function getEndPointURL();
}
