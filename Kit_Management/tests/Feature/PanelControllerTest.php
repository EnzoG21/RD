<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\PanelController;
use Tests\TestCase;

final class PanelControllerTest extends TestCase
{
    private PanelController $panelController;

    protected function setUp(): void
    {
        parent::setUp();

        $this->panelController = new PanelController();
        $this->app->instance(PanelController::class, $this->panelController);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->panelController);
    }

    public function testIndex(): void
    {
        $this->get('/admin/panel')
            ->assertStatus(302);
    }

    public function testStore(): void
    {
        $this->post('/admin/panel/kit-check', [
            'KitID' => 1,
            'result' => 'Pass',
            'note' => 'Sample note',
        ])
            ->assertStatus(302);
    }

    public function testStoreInvoice(): void
    {
        $this->post('/admin/panel/invoice/store', [
            'Date' => '2024-04-15',
            'user_id' => 1,
            'KitID' => 1,
            'FormID' => 1,
            'Price' => 100.50,
        ])
            ->assertStatus(302);
    }

    public function testStoreOrder(): void
    {
        $this->post('/admin/panel/order/store', [
            'Date' => '2024-04-15',
            'user_id' => 1,
            'FormID' => 1,
            'Status' => 'Pending',
        ])
            ->assertStatus(302);
    }

    public function testUpdateOrderStatus(): void
    {
        $this->post('/admin/panel/order/update', [
            'order_id' => 1,
            'new_status' => 'Completed',
        ])
            ->assertStatus(302);
    }
}
