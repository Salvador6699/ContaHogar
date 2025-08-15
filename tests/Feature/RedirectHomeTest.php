<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class RedirectHomeTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  public function guest_can_see_welcome_page()
  {
    $response = $this->get('/');

    $response->assertOk()
      ->assertViewIs('welcome');
  }

  /** @test */
  public function authenticated_user_is_redirected_to_dashboard()
  {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/');

    $response->assertRedirect('/dashboard');
  }
}
