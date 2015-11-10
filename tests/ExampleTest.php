<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('HI');
    }

    /**
     * Login test
     *@return void
     */
    public function testLoginPage()
    {
        $this->visit (route('auth.login'))
            ->see('Login');
    }

    /**
     * Login test
     *@return void
     */
    public function testUserWithoutAccessToResource()
    {
        Session::set('autenticated',false);
        $this->visit ('/resource')
            //->seePageIs(route('auth.login'))
            ->see('Login');
    }

    public function testUserWithAccessToResource()
    {
        Session::set('autenticated',true);
        $this->visit ('/resource')
            ->seePageIs('/resource');

    }

    public function testLoginPageHaveResgisterLinkAndWorkOk()
    {
        $this->visit('/login')
            ->type('alexbonavila@iesebre.com','email')
            ->type('123456','password')
            ->click('Register')
            ->seePageIs('/register');
    }



}
