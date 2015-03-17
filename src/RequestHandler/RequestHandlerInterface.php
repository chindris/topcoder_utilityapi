<?php

namespace UtilityAPI\RequestHandler;

use UtilityAPI\Request\RequestInterface;

/**
 * @file
 *  @todo: add comments.
 */

interface RequestHandlerInterface {

  public function handleRequest(RequestInterface $request);

  public function handleNextRequest(RequestInterface $request);

  public function setSuccessor(RequestHandlerInterface $successor);
}
