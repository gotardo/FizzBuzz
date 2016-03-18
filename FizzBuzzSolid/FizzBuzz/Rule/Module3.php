<?php

namespace FizzBuzz\Rule;
	
class Module3 implements RuleInterface {
	
	public function evaluate($param) {
		
		if (!($param % 3))
			return "Fizz";
		else
			return "";
	}
}