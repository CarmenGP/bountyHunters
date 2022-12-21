<?php

namespace Tests\Feature;

use App\Models\Outlaw;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDOutlawTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

/*     public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_listOutlawAppearInHomeView(){
        $this->withExceptionHandling();

        $outlaws = Outlaw::factory(2)->create();
        $outlaw = $outlaws[0];

        $response = $this->get('/');

        $response->assertSee($outlaw->name);

        $response->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_anOutlawCanBeDeleted(){
        $this->withExceptionHandling();

        $outlaws = Outlaw::factory(1)->create();
        $this->assertCount(1, Outlaw::all());

        $response = $this->delete('deleteOutlaw', $outlaw->id);

        $this->assertCount(0, Outlaw::all());
    }
}
