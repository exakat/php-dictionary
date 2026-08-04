# Mixed
A special type that represents any available type. It is equivalent to not explicitly setting the type, though it is now explicitly done. 

A ``mixed`` type may be also represented by a union of all possible types. 

``mixed`` is useful when literally any type should be supported, such as with a cache system. Yet, it is usually recommended to consider reducing the number of possible types by using a common interface or a union type.
```php
<?php

    function cache(string $name, mixed $value) : bool {
        static $cache = [];
        
        $cache[$name] = $value;
        
        return true;
    }

?>
```

## See Also

+ [Mixed Type PHP 8](https://www.amitmerchant.com/mixed-type-php8/)
+ [A mixed type PHPStan journey](https://staabm.github.io/2024/11/26/phpstan-mixed-types.html)
+ [Why `mixed` Is the Worst Type in Your PHP Codebase (and How to Kill It)](https://dev.to/gabrielanhaia/why-mixed-is-the-worst-type-in-your-php-codebase-and-how-to-kill-it-3ie)

Related : [Type System](Type System), [Pseudo-type](Pseudo-type), [Special Types](Special Types), [Type Inference](Type Inference), [Wildcard](Wildcard)
