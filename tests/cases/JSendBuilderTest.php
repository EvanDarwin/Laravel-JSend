<?php

use Illuminate\Support\Facades\Route;

class JSendBuilderTest extends LaravelJSend_TestCase {
    public function testDefaultValues(): void {
        $response = jsend()->get();
        
        $this->assertJson(json_encode(array(
            'status' => 'success',
            'data'   => array()
        )), $response);
    }
    
    public function testRendersCorrectly(): void {
        Route::get('/jsend', static function () {
            return jsend()->failed()->code(404)->get();
        });
        
        $response = $this->call('get', '/jsend');
        
        $this->assertEquals(json_encode(array(
            'status' => 'fail',
            'data'   => array(),
            'errors' => null,
            'code'   => 404,
        )), $response->getContent());
    }
    
    public function testRenderCompatibility(): void {
        Route::get('/jsend', static function () {
            return jsend()->failed()->code(404)->get();
        });
        
        $response = $this->call('get', '/jsend');
        
        $this->assertEquals(json_encode(array(
            'status' => 'fail',
            'data'   => array(),
            'errors' => null,
            'code'   => 404,
        )), $response->getContent());
    }
    
    public function testHttpStatus(): void {
        Route::get('/jsend_http', static function () {
            return jsend()->failed()->code(403)->get(403);
        });
        
        $res = $this->call('get', '/jsend_http');
        $this->assertEquals(403, $res->status());
    }
    
    public function testInvalidBuilderException(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->app['config']->set('jsend.builder', '');
        jsend()->get();
    }
}
