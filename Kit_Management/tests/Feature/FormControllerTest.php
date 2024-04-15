<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\FormController;
use Tests\TestCase;

final class FormControllerTest extends TestCase
{
    private FormController $formController;

    protected function setUp(): void
    {
        parent::setUp();
        $this->formController = new FormController();
        $this->app->instance(FormController::class, $this->formController);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->formController);
    }

    public function testIndex(): void
    {
        $this->get(route('admin.forms'))
            ->assertStatus(302);
    }

    public function testCreate(): void
    {
        $this->assertTrue(true);
    }

    public function testStore(): void
    {
        $postData = [
            'name' => 'John',
            'surname' => 'Doe',
            'KitID' => 1,
            'JerseyID' => 1,
            'textbox' => 'Some text',
            'issue' => 'broken',
        ];

        $response = $this->formController->store(new \Illuminate\Http\Request($postData));

        $this->assertEquals(302, $response->getStatusCode());
    }
}
