<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise Application Development')
            ->ClickLink('Log In')
            ->assertPathIs('/login')
            ->type('email','hawari@gmail.com')
            ->type('password', 'haw123456')
            ->press('LOGIN')
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
