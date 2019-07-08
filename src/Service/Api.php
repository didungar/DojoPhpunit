<?php


namespace App\Service;


class Api
{
	public function callApi(string $arg): string {
		// Something complexe, changing and very long
		return \uniqid();
	}
}