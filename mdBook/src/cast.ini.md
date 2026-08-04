# Cast Operator
Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

+ ``(int)``, ``(integer)``: cast to integer
+ ``(bool)``, ``(boolean)``: cast to boolean
+ ``(float)``, ``(double)``: cast to float
+ ``(string)``: cast to string
+ ``(array)``: cast to array
+ ``(object)``: cast to object, of type ``stdclass``. There is no operator to convert to a specific class type.
+ ``(void)``: complement operator to the ``NoDiscard`` attribute. It is not really a cast operator.
+ ``(unset)``: cast to NULL, deprecated since PHP 7.2
+ ``(real)``: cast to float.
```php
<?php

    $foo = 10;               // $foo is an integer
    $bar = (boolean) $foo;   // $bar is a boolean

?>
```

## See Also

+ [A detailed look into PHP type casting](https://dev.to/altsyset/a-detailed-look-into-php-type-casting-4m6d)
+ [Mastering Data Type Conversion In Php Through Type Casting](https://laranepal.com/blog/mastering-data-type-conversion-in-php-through-type-casting)
+ [Conversion](https://phplang.org/spec/08-conversions.html)
+ [Mastering the (array) cast](https://www.exakat.io/mastering-the-array-cast-operator-in-php-a-comprehensive-guide/)

Related : [__toString() Method](__toString() Method), [Type Juggling](Type Juggling), [ArrayObject](ArrayObject), [Convert](Convert), [Non-numeric](Non-numeric), [Sign](Sign), [array_keys()](array_keys()), [Boolean](Boolean), [Golf](Golf), [Number](Number), [Canonical](Canonical), [get_object_vars()](get_object_vars())
