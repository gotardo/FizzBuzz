<?php

namespace FizzBuzz\Renderer;

class Console implements RendererInterface {
	public function render($i, $result) : string{
		return sprintf("\n%s : %s", $i, $result);
	}
}	 	 
