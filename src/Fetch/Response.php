<?php

namespace Fetch;

class Response
{
  private $_response;

  function __construct(\GuzzleHttp\Psr7\Response $response)
  {
    $this->_response = $response;
  }

  function psr()
  {
    return $this->_response;
  }

  function ok()
  {
    return $this->status() >= 200 and $this->status() <= 299;
  }

  function status()
  {
    return $this->_response->getStatusCode();
  }

  function statusText()
  {
    return $this->_response->getReasonPhrase();
  }

  function body()
  {
    $body = $this->_response->getBody();
    $body->seek(0);
    return $body->getContents();
  }

  function json(bool $assoc = FALSE)
  {
    return json_decode($this->body(), $assoc);
  }
}
