<?php

namespace Zivlify\Zblog\Tests;

use Orchestra\Testbench\TestCase as BaseTest; 
use Mockery;
use Zivlify\Zblog\ZblogServiceProvider;

abstract class TestCase extends BaseTest
{
    
    // use CreatesApplication;
    // use CreatesPackage;


    public function tearDown(): void
    {
        Mockery::close();
    }

    // use CreatesPackage;

      /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
    */
   protected function getPackageProviders($app)
   {
        return [
            ZblogServiceProvider::class
        ];
   }

   /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testdb');
        $app['config']->set('database.connections.testdb', [
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);
    }


    public function assertResponseHas($response, $code, $error, $message)
    {
        $response->assertStatus($code);
        
        $response->assertJson([
            'error' => $error,
            'message' => $message,
            'code' => $code 
        ]);
    }

    public function assertSuccessResponse($response, $message = 'Activity is successfully done.')
    {
        return $this->assertResponseHas($response, 200, false, $message);
    }

    public function assertErrorResponse($response, $message = 'Something went wrong.')
    {
        return $this->assertResponseHas($response, 421, true, $message);
    }


}


