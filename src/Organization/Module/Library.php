<?php

namespace Organization\Module;

class Library
{
  protected $method;
  protected $data;

  public function __construct()
  {
    $this->method = 'GET';

    // setting some dummy response data
    $this->data = (object)array(
      'error' => false,
      'message' => 'Test response.',
      'code' => 200
    );
  }

  public function genericTestApi()
  {
    $data = $this->data;

    http_response_code($data->code);
    // in cases when http_response_code fails to set the value we can use:
    //header('X-HTTP-Response-Code: '.$data->code, true, $data->code);
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}