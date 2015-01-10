<?php

use \Organization\Module\Library;
use \GuzzleHttp\Client;

class LibraryTest extends PHPUnit_Framework_TestCase
{
  protected $client;

  protected function setUp()
  {
    $this->client = new Client([
      'base_url' => 'http://localhost/php-rest-api-travis-ci/',
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
    $response = $this->client->get('index.php');

    //* ******** compare server headers ********* *//
    // $example = new Library();
    // fwrite(STDERR, $example->genericTestApi());
    //* ******** ********************** ********* *//
    fwrite(STDERR, print_r($response, TRUE));

    /* check for response code */
    $this->assertEquals(202, $response->getStatusCode());

    /* check for content type */
    $this->assertEquals('application/json', $response->getHeader('content-type'));
  }
}