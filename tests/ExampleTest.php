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
        // $this->visit('/')
        //      ->see('hello');
        $response = $this->client->request('GET','/');

      // $found =  $crawler->filter("body:conatain('hello')");
        dd($response->getContent());

        //$this->assertEquals('hello',$response->getContent());
    }
}
