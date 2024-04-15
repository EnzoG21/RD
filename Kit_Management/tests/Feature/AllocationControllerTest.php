<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\AllocationController;
use Tests\TestCase;

final class AllocationControllerTest extends TestCase
{
    private AllocationController $allocationController;

    
    protected function setUp(): void
    {
        parent::setUp();

        $this->allocationController = new AllocationController();
        $this->app->instance(AllocationController::class, $this->allocationController);
    }

    
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->allocationController);
    }

    public function testIndex(): void
    {
        
        $this->get('/admin/allocations')
            ->assertStatus(302);
    }
}
