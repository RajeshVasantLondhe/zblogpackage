<?php

namespace Zivlify\Zblog\Tests\Feature;
 
use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Foundation\Testing\WithFaker;
use Zivlify\Zblog\Tests\TestCase;

class ZblogControllerTest extends TestCase
{
   
   use RefreshDatabase, WithFaker;
  

   /** @test */
   public function a_user_can_get_all_the_blogs()
   {
       
       $response = $this->withHeaders(['accept' => 'application/json'])->get('/api/zblog');
       $this->assertSuccessResponse($response);
   
   }

   
   /** @test */
   public function a_user_can_store_blog()
   {
        $data = ['title' => 'test a content '];
        $response = $this->withHeaders(['accept' => 'application/json'])->post('/api/zblog', $data);
        //    $response->assertOk();
        // dd($response);
        $this->assertSuccessResponse($response);
   }


}
 