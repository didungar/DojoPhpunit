<?php
/**
 * Created by PhpStorm.
 * User: didungar
 * Date: 06/09/18
 * Time: 23:52
 */

namespace App\Tests\Service;

use App\Service\Api;
use App\Service\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FizzBuzzServiceTest extends WebTestCase
{
	protected function setUp()
	{
		$this->fizzBuzzService = $this->getFizzBuzzService();
	}
	protected function getFizzBuzzService() : FizzBuzzService {
		$api = $this->createMock(Api::class);
		$api->expects($this->any())
            ->method('callApi')
            ->willReturn('ResponseApi');
		return new FizzBuzzService($api);
	}
	/**
	 * @dataProvider providerFizzBuzz
	 */
	public function testFizzBuzz($in, $out) {
		$result = $this->fizzBuzzService->convert($in);
		$this->assertSame($out, $result);
	}
	public function providerFizzBuzz()
	{
		return [
			[1, '1'],
			[2, '2'],
			[3, 'Fizz'],
			[4, '4'],
			[5, 'Buzz'],
			[15, 'FizzResponseApiBuzz'],
			[16, '16'],
		];
	}
	/**
	 * @dataProvider providerCount100
	 */
	public function testCountTo($in, $out) {
		$result = $this->fizzBuzzService->testCountTo($in);
		$this->assertSame($out, $result);
	}
	public function providerCount100()
	{
		return [
			[1, '1'],
			[2, '12'],
			[3, '12Fizz'],
			[4, '12Fizz4'],
			[5, '12Fizz4Buzz'],
		];
	}
}
