<?php
	
	/**
	 *	FizzBuzz Evil
	 *
	 *	Featuring:
	 *	- No variable declaration. In PHP we can just take variable names for free!
	 *	- Concatenate ternary operators. I could add more.
	 *	- Free use of spaceship operator. So cool.
	 *	- Concatenate Outputs. Templates are slow and messy.
	 *	- Non-sense control structures. I did not have time to do it worst.
	 *	- No comment. Code self-explains. Thanks.
	 *	- I was intented to do it in only one sentence, but finally I added an extra one in order to do it even worst.
	 *
	 * ...don't know how, but it works, and that's the important. And there is an emoticon.
	 */
	 
	while ($integerCounter_Iterator <=> 100) 
		if (++$integerCounter_Iterator)
			echo "\n" . $integerCounter_Iterator . " : " 
				. ( !($integerCounter_Iterator % 3) ? "Fizz" : NULL )
				. ( !($integerCounter_Iterator % 5) ? "Buzz" : NULL );	
			
	echo "\n}:-)\n";