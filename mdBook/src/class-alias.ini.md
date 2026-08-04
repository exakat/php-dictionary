# Class Aliases
It is possible to make an alias of a class and call it with this new name. It either rely on the ``use`` expression, preferable at the beginning of the namespace, or the ``class_alias()`` function, for dynamic and application-wide aliases. 

``use`` expressions are valid only in one file, while ``class_alias()`` impacts the whole application, once it is called. ``class_alias()`` may also be used with dynamic elements, such as variables.
```php
<?php

    use a as b;
    
    class_alias('a', 'c');
    
    class a {
        function __construct() {
            print __CLASS__;
        }
    }
    
    new a;
    new b;
    new c;

?>
```

## See Also

+ [PHP 8.3: class_alias() supports aliasing built-in PHP classes](https://php.watch/versions/8.3/class_alias-php-built-in-classes-supported)
+ [PHP Magic Methods and Class Aliases](https://alanastorm.com/php_magic_methods_and_class_aliases/)
+ [How to deprecate a type in php](https://dev.to/greg0ire/how-to-deprecate-a-type-in-php-48cf /)

Related : [Use](Use)
