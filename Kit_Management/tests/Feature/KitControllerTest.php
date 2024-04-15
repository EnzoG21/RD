<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\KitController;
use Tests\TestCase;


final class KitControllerTest extends TestCase
{
    private KitController $kitController;

    
    protected function setUp(): void
    {
        parent::setUp();

        $this->kitController = new KitController();
        $this->app->instance(KitController::class, $this->kitController);
    }

    

     
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->kitController);
    }

    public function testIndex(): void
    {
        
        $this->get('/admin/kit_list')
            ->assertStatus(302);
    }
}
