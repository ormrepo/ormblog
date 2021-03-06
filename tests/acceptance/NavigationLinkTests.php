<?php

namespace tests\acceptance;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class NavigationLinkTests extends \BrowserKitTestCase
{
    /** @test */
    public function testCocheLink()
    {
        $this->visit('/');

        $this->click('El Coche');

        $this->seePageIs('https://coches.ormrepo.co.uk');
    }

    /** @test */
    public function testRentalLink()
    {
        $this->visit('/');

        $this->click('Casa Rental');

        $this->seePageIs('https://casarentals.ormrepo.co.uk');
    }

    /** @test */
    public function testGamesLink()
    {
        $this->visit('/');

        $this->click('GamesStation');

        $this->seePageIs('https://games.ormrepo.co.uk');
    }

    /** @test */
    public function it_clicks_on_the_about_page()
    {
        $this->visit('/')
             ->click('About')
             ->seePageIs('/about');
    }

    /** @test */
    public function it_clicks_on_login_page()
    {
        $this->visit('/')
            ->click('Login')
            ->seePageIs('/login');
    }

    /** @test */
    public function it_clicks_on_register_page()
    {
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/register');
    }

    /** @test */
    public function it_clicks_on_rss_page()
    {
        $this->visit('/')
            ->click('Rss')
            ->seePageIs('/rss');
    }
}
