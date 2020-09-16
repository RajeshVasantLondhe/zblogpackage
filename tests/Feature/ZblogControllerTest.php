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
    
        // $zblogs = Zblog::factory()->count(3)->make();
        $response = $this->withHeaders(['accept' => 'application/json'])->get('/api/zblog');
        $this->assertSuccessResponse($response);
        
   
   }
 

}
 