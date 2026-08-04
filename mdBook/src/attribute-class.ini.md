# Attribute Class
This is a native PHP attribute, which tells the engine that a class is a PHP attribute.

This attribute is not necessary to make a class a valid attribute. Yet, it is recommended to use it and make the classes explicitly attributes.
```php
<?php

    #[Attribute]
    class MyAttribute { }
    
    #[MyAttribute]
    class MyClass { }

?>
```

## See Also

+ [Attributes in PHP 8](https://php.watch/articles/php-attributes)
+ [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

Related : [Override Attribute](Override Attribute), [NoDiscard](NoDiscard), [Attribute](Attribute), [PHP Native Attributes](PHP Native Attributes)
