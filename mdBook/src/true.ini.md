# True
``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``. 

``true`` as a type was introduced in version 8.2.
```php
<?php

    function foo($a) : true|A {
        if ($a == 1) {
            return true;
        } else {
            return new A();
        }
    }

?>
```

## See Also

+ [PHP Boolean: Assigning True or False to a Variable](https://flatcoding.com/tutorials/php/php-boolean-true-and-false/)

Related : [Boolean](Boolean), [Type System](Type System), [False](False), [Logical Operators](Logical Operators), [Minus One -1](Minus One -1), [PHP Natives](PHP Natives), [Standalone Types](Standalone Types), [Truthy](Truthy)
