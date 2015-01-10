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
      'code' => 202
    );
  }

  public function genericTestApi()
  {
    $data = $this->data;

    http_response_code($data->code);
    header('Contnet-type: application/json; charset=utf-8');
    echo json_encode($data);
  }
}