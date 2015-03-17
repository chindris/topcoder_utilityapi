<?php

namespace UtilityAPI\RequestHandler;

use UtilityAPI\Request\UtilityAPIRequestInterface;

/**
 * @file
 *  @todo: add comments.
 */

interface RequestHandlerInterface {

  public function handleRequest(UtilityAPIRequestInterface $request);
}
