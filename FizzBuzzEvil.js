/**
 *	FizzBuzz Evil (for JavaScript)
 */

(function fizzbuzz(i) {
  i && fizzbuzz(--i);
  console.log(i +':' 
    + ((!(i%3)) ? "Fizz" : '') 
    + ((!(i%5)) ? "Buzz" : ''));
})(100);

console.log('}:_)' );