# Constant Case
Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:

+ All the letters are set to upper case
+ Each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.

```php
<?php

const CONSTANT_CASE = 1;

class X {
    const CLASS_CONSTANT_CASE = 1;
    
    function foo() {
        echo __METHOD__;
        echo __method__; // same as above
    }
}

?>
```

## See Also

+ [stringcase website](https://stringcase.org/)

Related : [Pascal Case](Pascal Case), [Camel Case](Camel Case), [Snake Case](Snake Case), [Magic Constants](Magic Constants), [Static Constant](Static Constant), [Constants](Constants), [Underscore](Underscore)
