<?php

namespace AJT\ReviewBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');

        $this->assertContains("navbar navbar-default navbar-inverse", $client->getResponse()->getContent());
        $this->assertGreaterThan(0, $crawler->filter('h2')->count());
    }
}
