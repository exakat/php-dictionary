# class_alias()
The ``class_alias()`` function creates an alias for a class, interface, enum or trait. Then, the alias may be used in place of the original name anywhere in the application, including in ``use`` expressions. 

Since version 8.3, ``class_alias()`` supports the creation of aliases with native PHP classes. 

``class_alias()`` is also usable on interfaces, enumerations and traits. 

Once created, the objects are of the original class. The alias name doesn't stick to the objects, and it is not possible to know if the object was created as an alias or the original class. The alias may be used with types.

There is no equivalent to ``class_alias()`` for functions, or constants. 
```php
<?php

class_alias(stdClass::class, StandardClass::class);

$object = new StandardClass();

// stdClass
print gettype($object);

?>
```

## See Also

+ [PHP: Using class_alias to maintain BC while moving/renaming classes](https://www.schmengler-se.de/en/2016/09/php-using-class_alias-to-maintain-bc-while-move-rename-classes/)
+ [Exploring PHP class_alias](hhttps://dev.to/khairuaqsara/exploring-php-classalias-k2n)

Related : [Use](Use), [Alias](Alias)
