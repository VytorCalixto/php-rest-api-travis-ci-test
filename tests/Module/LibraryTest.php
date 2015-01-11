<?php

use \Organization\Module\Library;
use \GuzzleHttp\Client;

class LibraryTest extends PHPUnit_Framework_TestCase
{
  protected $client;

  protected function setUp()
  {
    $this->client = new Client([
      'base_url' => 'http://localhost',
      'defaults' => ['exceptions' => false]
    ]);
  }

  /*
  // basic unit testing
  public function testLibrary()
  {
    $example = new Library();
    $this->assertEquals('some value', $example->someMethod());
  }
  */

  // API testing
  public function testApiResponse()
  {
    $response = $this->client->get('/');

    //* ******** compare server headers ********* *//
    // $example = new Library();
    // fwrite(STDERR, $example->genericTestApi());
    //* ******** ********************** ********* *//
    fwrite(STDERR, print_r($response->getStatusCode(), TRUE));
    fwrite(STDERR, print_r($response->getHeader('content-type'), TRUE));
    fwrite(STDERR, print_r($response->getBody()->read(1024), TRUE));

    /* check for response code */
    //$this->assertEquals(202, $response->getStatusCode());

    /* check for content type */
    //$this->assertEquals('application/json', $response->getHeader('content-type'));
  }
}