<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RoomTest extends DuskTestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @group room
     */
    public function guest_can_view_rooms()
    {
        $this->browse(function ($browser) {
            $browser->visit('/rooms')
                ->assertSee('Rooms')
                ->assertPathIs('/rooms');
        });
    }

    /**
     * @test
     * @group room
     */
    public function auth_user_can_view_rooms()
    {
        $user = factory(User::class)->create([
            'email' => 'syahzul@me.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/rooms')
                ->assertSee('Rooms')
                ->assertPathIs('/rooms');
        });
    }
}
