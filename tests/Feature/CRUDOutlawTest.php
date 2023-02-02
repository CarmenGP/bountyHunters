<?php

namespace Tests\Feature;

use App\Models\Outlaw;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

use function PHPUnit\Framework\assertCount;

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

    public function test_anOutlawCanBeDeletedByAdminAndCannotBeDeletedIfNoAdmin(){
        $this->withExceptionHandling();

        $outlaw = Outlaw::factory()->create();
        $this->assertCount(1, Outlaw::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteOutlaw', $outlaw->id));
        $this->assertCount(1, Outlaw::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteOutlaw', $outlaw->id));
        $this->assertCount(0, Outlaw::all());
    }

    public function test_anOutlawCanBeCreated(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->post(route('storeOutlaw'),
        [
            'name' => 'name',
            'alias' => 'alias',
            'crime' => 'crime',
            'hint' => 'hint',
            'reward' => 'reward',
            'description' => 'description',
            'deadline' => '2023/01/19 19:00:00',
            'gang' => '10',
            'img' => 'img',
            'vip' => 'vip'
        ]);

        $this->assertCount(1, Outlaw::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->post(route('storeOutlaw'),
        [
            'name' => 'name',
            'alias' => 'alias',
            'crime' => 'crime',
            'hint' => 'hint',
            'reward' => 'reward',
            'description' => 'description',
            'deadline' => '2023/01/19 19:00:00',
            'gang' => '10',
            'img' => 'img',
            'vip' => 'vip'
        ]);
        $this->assertCount(1, Outlaw::all());
        }

        public function test_anOutlawCanBeUpdated(){
            $this->withExceptionHandling();

            $outlaw = Outlaw::factory()->create();
            $this->assertCount(1, Outlaw::all());

            $userAdmin = User::factory()->create(['isAdmin'=>true]);
            $this->actingAs($userAdmin);
            $response = $this->patch(route('updateOutlaw', $outlaw->id),['name' => 'New Name']);
            $this->assertEquals('New Name', Outlaw::first()->name);

            $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
            $this->actingAs($userNoAdmin);
            $response = $this->patch(route('updateOutlaw', $outlaw->id),['name' => 'New Name if no Admin']);
            $this->assertEquals('New Name', Outlaw::first()->name);
        }

        public function test_anOutlawCanBeShowed(){
            $this->withExceptionHandling();

            $outlaws = Outlaw::factory(2)->create();

            $outlaw = $outlaws[0];
            $response = $this->get(route('showOutlaw', $outlaw->id));
            $response->assertSee($outlaw->name);
            $response->assertStatus(200)
                    ->assertViewIs('showOutlaw') 
                    ->assertSee($outlaw->name);            
        }       
}
