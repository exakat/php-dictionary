# Dynamic Constant
A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time. 

Reaching a constant's value is done by using the ``constant()`` function, or the dynamic constant fetch with classes. 

Sometimes, dynamic constants are also called variable constants.
```php
<?php

const A = 1;
// simple case
$a = 'A';
echo constant($a); // displays 1

// with leading backslash
$b = '\A';
echo constant($b); // displays 1

// definition has no leading backslash
define('B\C', d);
// reading has no leading backslash, or not
$c = '\b\C';
echo constant($c); // displays d
$c = 'b\C';
echo constant($c); // displays d

// constant() works also on class constants.
class D {
    const E = 'f';
}
echo constant('d::E'); // displays f

// dynamic constant access on classes or enumeration
$k = 'E';
echo D::{$k}; // f

// constant works also on enumeration cases
enum I: string {
    case G = 'h';
}
echo constant('I::G')->value; // displays h

// dynamic constant access on classes or enumeration
$g = 'G';
echo I::{$g}->value; // h

?>
```

## See Also

+ [All the Dynamic Syntax in PHP](https://www.exakat.io/all-the-dynamic-syntaxes-in-php/)

Related : [Constants](Constants), [constant()](constant()), [Class Constant Syntax](Class Constant Syntax), [Static Constant](Static Constant), [Dynamic](Dynamic)
