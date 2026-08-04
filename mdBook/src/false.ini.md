# False
``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``.
```php
<?php

function foo($a) : false|A {
    if ($a == 1) {
        return false;
    } else {
        return new A();
    }
}

?>
```

## See Also

+ [PHP Boolean: Assigning True or False to a Variable](https://flatcoding.com/tutorials/php/php-boolean-true-and-false/)

Related : [Boolean](Boolean), [Type System](Type System), [True](True), [Falsy](Falsy), [Truthy](Truthy), [Underscore](Underscore), [zero](zero), [Logical Operators](Logical Operators), [file_get_contents()](file_get_contents()), [PHP Natives](PHP Natives), [one](one), [Short Ternary Operator](Short Ternary Operator), [Autovivification](Autovivification), [Standalone Types](Standalone Types)
