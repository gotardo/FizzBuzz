<?php
	
namespace FizzBuzz\Renderer;

interface RendererInterface {
	public function render($i, $result): string;
}	 	 
