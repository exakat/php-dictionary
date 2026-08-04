# Truthy
A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as ``1``, ``-1``, ``'0'``, strings, except the empty string and ``'0``, non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.
```php
<?php

var_dump((bool) 1);       // true
var_dump((bool) -1);      // true
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) new stdclass);    // true

?>
```

## See Also

+ [The Differences in Truthiness and Falsiness in JavaScript vs PHP](https://dev.to/kengitahi/the-differences-in-truthiness-and-falsiness-in-javascript-vs-php-4fdb)

Related : [False](False), [Falsy](Falsy), [True](True), [Boolean](Boolean), [Comparison](Comparison), [one](one), [Minus One -1](Minus One -1), [zero](zero)
