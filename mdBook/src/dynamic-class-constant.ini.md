# Dynamic Class Constant
Dynamic class constant access has always been possible with a call to the ``constant()`` function. With the ``class::constant`` syntax, it is possible to reach any visible constant, or, also, enumeration cases.

A new syntax is available since version 8.3 to do the same: ``class::{$name}``. The curly braces are important in that call.
```php
<?php

enum E: string {
    case A = 'abc';
    const B = 'def';
}

$name = 'E::A';
echo constant($name)->value;
// PHP 8.3+ 
echo E::{$name}->value;

$name = 'E::B';
echo constant($name);
// PHP 8.3+ 
echo E::{$name};

?>
```

## See Also

+ [PHP 8.3: Dynamic class constant and Enum member fetch support](https://php.watch/versions/8.3/dynamic-class-const-enum-member-syntax-support)

Related : [Static Constant](Static Constant), [Constants](Constants), [Dynamic](Dynamic), [Enumeration (enum)](Enumeration (enum)), [Functions](Functions), [constant()](constant())
