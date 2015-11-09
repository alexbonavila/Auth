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
}
