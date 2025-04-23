<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testViewNote(): void
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
            ->ClickLink('Ngerjain Modul 3')
            ->assertPathIs('/note/2');
        });
    }
}
