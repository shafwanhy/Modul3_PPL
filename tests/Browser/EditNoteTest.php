<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditNote(): void
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
            ->ClickLink('Edit')
            ->assertPathIs('/edit-note-page/2')
            ->type('description', 'Mengerjakan Modul 3 PPL pada tanggal 23 April 2025 hari Rabu')
            ->press('UPDATE');
        });
    }
}
