<?php
/**
 * Created by PhpStorm.
 * User: didungar
 * Date: 06/09/18
 * Time: 23:52
 */

namespace App\Tests\Service;

use App\Service\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FizzBuzzServiceTest extends WebTestCase
{
	public function testFizzBuzz() {
		$service = new FizzBuzzService();
		$result = $service->convert(1);
		$this->assertSame("1", $result);
	}
}
