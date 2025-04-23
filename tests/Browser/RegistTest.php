<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->ClickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name','Hawari')
                    ->type('email','hawari@gmail.com')
                    ->type('password', 'haw123456')
                    ->type('password_confirmation', 'haw123456')
                    ->press('REGISTER');
        });
    }
}
