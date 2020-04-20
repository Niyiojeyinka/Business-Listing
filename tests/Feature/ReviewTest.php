<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use App\Business;
use App\Review;

use Tests\TestCase;

class ReviewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    /** @test */
    public function add_review_page_can_be_access(){
        
        $response= $this->get('review/add/1-testslug');
        $response->assertStatus(200);

    }
       
    /** @test */
    public function review_can_be_added_logged_in_user(){
        $this->actingAs(factory(User::class)->create());
        $business = factory(Business::class)->create();
        $response= $this->post('add_review/'.$business['id'],['comment'=> 'Great Company','user_id'=>1,'rating'=>4]);
        $response->assertStatus(200);
        $this->assertCount(1,Review::all());
  
    }
        
    
}
