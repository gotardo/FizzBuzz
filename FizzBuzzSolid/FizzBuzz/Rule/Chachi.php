<?php

namespace FizzBuzz\Rule;
	
class Chachi implements RuleInterface {
	
	public function evaluate($param) {
		
		if ($param == 10)
			return "Chachi";
		else
			return "";
	}
}
	