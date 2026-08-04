# String Interpolation
String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation: 

+ Use double-quotes and a variable
+ Use double-quotes and a property or a array with a valid index
+ Use curly braces with a variable
+ Use dollar and curly-braces: it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in version 8.2 and later.

Double quotes and Heredoc notation allows string interpolation. On the other hand, single quote and nowdoc forbid interpolation. Then, escaping the special characters such as ``$`` and ``{`` with ``\\\\`` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.
```php
<?php

$world = 'world';
// This is an interpolated string
$string = "Hello $world";

// This is not an interpolated string
$string = 'Hollow $world';

?>
```

## See Also

+ [PHP String Interpolation in 2026: Examples, Curly Braces, Heredoc, and PHP 8.2 Notes](https://phppot.com/php/variable-interpolation-in-php/)
+ [PHP 8.2:  string interpolation deprecated](https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated)
+ [PHP String Interpolation - Complete Tutorial with Examples](https://zetcode.com/php/string-interpolation/)

Related : [String](String)
