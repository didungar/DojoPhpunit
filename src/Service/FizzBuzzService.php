<?php


namespace App\Service;


class FizzBuzzService
{
	/*protected $now;
	public function __construct(\DateTime $datetime)
	{
		$this->now = $datetime;
	}*/
	protected $api;
	public function __construct(Api $api)
	{
		$this->api = $api;
	}

	public function testCountTo($max) : string {
		$result = '';
		for ($i=1; $i<=$max ; $i++) {
			$result .= $this->convert($i);
		}
		return $result;
	}
	public function convert(int $number) : string {
		if($this->isMultiple3($number)) {
			if($this->isMultiple5($number)) {
				//return 'Fizz'.$this->now->format('F').'Buzz';
				return 'Fizz'.$this->api->callApi((string)$number).'Buzz';
			}
			return 'Fizz';
		}
		if($this->isMultiple5($number)) {
			return 'Buzz';
		}
		return (string)$number;
	}
	protected function isMultiple3($number) : bool {
		return 0===($number%3);
	}
	protected function isMultiple5($number) : bool {
		return 0===($number%5);
	}
}