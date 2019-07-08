<?php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class AbstractCase extends WebTestCase
{
    protected function getMockDateTime(): \DateTime
    {
        return new \DateTime();
    }
}
