<?php

class JSendBuilderTest extends LaravelJSend_TestCase
{
  public function testDefaultValues()
  {
    $response = jsend()->get();

    $this->assertJson(json_encode(array(
        'status' => 'success',
        'data'   => array()
    )), $response);
  }

  public function testRendersCorrectly()
  {
    \Route::get('/jsend', function () {
      return jsend()->failed()->code(404)->get();
    });

    $response = $this->call('get', '/jsend');

    $this->assertJson(json_encode(array(
        'status' => 'failed',
        'code'   => 404,
        'data'   => array()
    )), $response);
  }

  public function testRenderCompatibility()
  {
    \Route::get('/jsend', function () {
      return jsend()->failed()->code(404)->get();
    });

    $response = $this->call('get', '/jsend');

    $this->assertJson(json_encode(array(
        'status' => 'failed',
        'code'   => 404,
        'data'   => array()
    )), $response);
  }

  public function testHttpStatus()
  {
    \Route::get('/jsend_http', function() {
      return jsend()->failed()->code(403)->get(403);
    });

    $response = $this->call('get', '/jsend_http');

    $this->assertResponseStatus(403);
  }

  /**
   * @expectedException InvalidArgumentException
   */
  public function testInvalidBuilderException()
  {
    $this->app['config']->set('jsend.builder', '');

    jsend()->get();
  }
}
