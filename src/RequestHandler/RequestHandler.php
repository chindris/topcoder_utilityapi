<?php

namespace UtilityAPI\RequestHandler;

use UtilityAPI\Request\RequestInterface;

/**
 * @file
 *  @todo: add comments.
 */

abstract class RequestHandler implements RequestHandlerInterface {

  private $handler_successor;

  public function setSuccessor(RequestHandlerInterface $successor) {
    $this->handler_successor = $successor;
  }

  public function handleNextRequest(RequestInterface $request) {
    // Handle first the request itself.
    $this->handleRequest($request);

    // If we have a successor, handle the next request. Otherwise, just return
    // the request object.
    if (!empty($this->handler_successor)) {
      return $this->handler_successor->handleNextRequest($request);
    }

    return $request;
  }
}
