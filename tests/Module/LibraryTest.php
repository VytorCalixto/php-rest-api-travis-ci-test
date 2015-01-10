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

  public function testLibrary()
  {
    $example = new Library();
    $data = json_decode($example->jsonData());
    $this->assertEquals(200, $data->code);
  }

  public function testApiResponse()
  {
    $response = $this->client->get('/');

    /* check for response code */
    $this->assertEquals(200, $response->getStatusCode());

    fwrite(STDERR, print_r($response, TRUE));

    /* check for content type */
    //$this->assertEquals('application/json', $response->getHeader('content-type'));
  }
}