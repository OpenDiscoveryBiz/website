<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class WebsitePagesTest extends TestCase
{
    public function test_home_page_loads(): void
    {
        $this->get('/')->assertOk();
    }

    public function test_static_pages_load(): void
    {
        $this->get('/specifications')->assertOk();
        $this->get('/investigator')->assertOk();
        $this->get('/publisher')->assertOk();
        $this->get('/resolver')->assertOk();
    }

    public function test_resolver_lookup_renders_result(): void
    {
        Http::fake([
            'resolver.example.test/*' => Http::response('{"id":"DK123"}', 200),
        ]);

        $response = $this->post('/resolver', ['id' => 'DK123']);

        $response->assertOk()
            ->assertSee('DK123', false);
    }
}
