<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response =$this->get("http://localhost/online_food_ordering_system\CSE470-OnlineFoodOrderSystem");
        $response->assertStatus(404);

        $responses = $this->post("http://localhost/online_food_ordering_system\CSE470-OnlineFoodOrderSystem");
        $responses->assertStatus (404);


    }
}
