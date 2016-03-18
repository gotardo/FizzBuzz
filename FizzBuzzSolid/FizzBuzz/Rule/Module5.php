<?php
	
namespace FizzBuzz\Rule;
	
class Module5 implements RuleInterface {
	public function evaluate($param) {
		if (!($param % 5))
			return "Buzz";
		else
			return "";
	}
}