<?php

namespace FizzBuzz;	

class App {
	
	protected $renderer;
	
	public function __construct($renderer) {
		$this->renderer = $renderer;
	}
	
	public function run($limit) {
		$i = 1;
		while ($i < $limit) {
			$result = '';			
			foreach ($this->getRules() as $ruleClass) {
				$rule = new $ruleClass;
				$result .= $rule->evaluate($i);	
			}
			echo $this->renderer->render($i, $result);												
			++$i;
		}
			
								
	}
	
	public function getRules() {
		return include "rules.php";
	}
	
}
