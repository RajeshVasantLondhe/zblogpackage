<?php

namespace Zivlify\Zblog\Tests\Feature;
 
use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Foundation\Testing\WithFaker;
use Zivlify\Zblog\Models\Zblog;
use Zivlify\Zblog\Tests\TestCase;

class ZblogControllerTest extends TestCase
{
   
   use RefreshDatabase, WithFaker;
  

   /** @test */
   public function a_user_can_get_all_the_blogs()
   {
    
      $zblogs = Zblog::factory()->count(3)->create();
      
      $response = $this->withHeaders(['accept' => 'application/json'])->get('/api/zblog');
      $this->assertSuccessResponse($response);
         
   }
  
   /** @test */
   public function a_user_can_store_the_blogs()
   {
      
      $payload = [
         "title" => "rajesh",
         "meta_keywords" => "rajesh",
         "meta_description" => "rajesh",
         "body" => "rajesh",
         "short_description" => "short_description",
         "published_date" => now(),
         "display_date" => now(),
         "image_url" => "url",
         "image_alt" => "url",
      ];
      
      $response = $this->withHeaders(['accept' => 'application/json'])->post('/api/zblog', $payload);
       
      $this->assertSuccessResponse($response);
     
      $response->assertOk();   
   
   }


   public function validationCheck(string $zkey, $zvalue, array $data) {
      $this->assertArrayHasKey($zkey, $data);
      $this->assertEquals($data[$zkey], $zvalue);
  }



}
 