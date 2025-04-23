<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RMVNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRemoveNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise Application Development')
            ->ClickLink('Log in')
            ->assertPathIs('/login')
            ->type('email','hawari@gmail.com')
            ->type('password', 'haw123456')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->ClickLink('Notes')
            ->assertPathIs('/notes')
            ->press('Delete');
        });
    }
}
