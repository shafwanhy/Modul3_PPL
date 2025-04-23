<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNote(): void
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
            ->ClickLink('Create Note')
            ->assertPathIs('/create-note')
            ->type('title', 'Ngerjain Modul 3')
            ->type('description', 'Mengerjakan Modul 3 PPL pada tanggal 23 April 2025')
            ->press('CREATE');
        });
    }
}
