# Literal Types
Literal types are type which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0.
```php
<?php

    // bool is a type
    // false is a literal type : a bool, which value is false
    function foo(bool $a) : false {
        return false;
    }

?>
```

Related : [Scalar Types](Scalar Types), [Union Type](Union Type), [Relative Types](Relative Types)
