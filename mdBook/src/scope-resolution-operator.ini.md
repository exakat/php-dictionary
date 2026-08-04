# Scope Resolution Operator ::
The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function ``get_class()``. The operator is more modern and faster. 

The double colon operator is used to access class related elements, such as 

+ Static properties, ``X::$property``
+ Static methods, ``X::method()``
+ Static constants, ``X::CONSTANT``
+ Class name, ``X::class``

This operator is often called double-colon, or ``paamayim-nekudotayim``: this means ``double-colon`` in Hebrew. It is said to be a lot easier to google than ``::``.

PHP also has a single colon operator ``:``, used for goto labels, ternary operator, etc. 

```php
<?php

$a = new stdClass();

echo $a::class;

// identical to 
echo get_class($a);

?>
```

## See Also

+ [Scope Resolution operator in PHP](https://www.geeksforgeeks.org/php/scope-resolution-operator-in-php/)
+ [Scope Resolution operator (in PHP)](https://parsifar.com/scope-resolution-operator-in-php/)

Related : [Object Operator ->](Object Operator ->), [Object Nullsafe Operator ?->](Object Nullsafe Operator ?->), [Static Method](Static Method), [Static Constant](Static Constant), [Static Class](Static Class), [Static Property](Static Property), [Colon](Colon), [Double](Double), [Null Safe Object Operator](Null Safe Object Operator)
