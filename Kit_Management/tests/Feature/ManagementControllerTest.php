<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\ManagementController;
use Tests\TestCase;

final class ManagementControllerTest extends TestCase
{
    private ManagementController $managementController;

    protected function setUp(): void
    {
        parent::setUp();

        $this->managementController = new ManagementController();
        $this->app->instance(ManagementController::class, $this->managementController);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->managementController);
    }

    public function testIndex(): void
    {
        $response = $this->get('/admin/management');
    $response->assertStatus(302); // Expecting a successful response
    }

    public function testStoreKit(): void
    {
        $response = $this->post('/admin/management/storeKit', [
            'brand' => 'Nike',
            'model' => 'XYZ',
            'size' => 'L',
            'status' => 'available',
            'date' => '2024-04-15',
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testUpdateKit(): void
    {
        $response = $this->post('/admin/management/updateKit', [
            'kit_id' => 1,
            'brand' => 'Adidas',
            'model' => 'ABC',
            'size' => 'M',
            'status' => 'in-use',
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testDeleteKit(): void
    {
        $response = $this->post('/admin/management/deleteKit', [
            'kit_id_delete' => 1,
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testStoreJersey(): void
    {
        $response = $this->post('/admin/management/storeJersey', [
            'number' => '10',
            'size' => 'M',
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testUpdateJersey(): void
    {
        $response = $this->post('/admin/management/updateJersey', [
            'jersey_id' => 1,
            'number' => '7',
            'size' => 'L',
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testDeleteJersey(): void
    {
        $response = $this->post('/admin/management/deleteJersey', [
            'jersey_id_delete' => 1,
        ]);
        $response->assertStatus(302); // Redirect status
    }

    public function testAllocateKit(): void
    {
        $response = $this->post('/admin/management/allocateKit', [
            'user_id' => 1,
            'kit_id' => 1,
            'jersey_id' => 1,
        ]);
        $response->assertStatus(404); // Redirect status
    }
}
