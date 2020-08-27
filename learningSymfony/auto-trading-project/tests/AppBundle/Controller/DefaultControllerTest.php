<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to JustMop', $crawler->filter('h1')->text());
    }
    public function testOffer() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/our-cars');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('OFFER PAGE', $crawler->filter('h1')->text());   
    }
}
