<?php

namespace Organization\Module;

class Library
{
  protected $method;

  public function __construct() {
    $this->method = 'GET';
  }

  public function jsonData($inData = null)
  {
    $data = (object)array(
      'error' => false,
      'message' => 'Test response.',
      'code' => 202
    );
    return json_encode($data);
  }

  public function testApi()
  {
    http_response_code($data->code);
    header('X-HTTP-Response-code: '.$data->code, true, $data->code);
    header('Content-type: application/json; charset=utf-8', true);
    echo $this->jsonData();
  }
}