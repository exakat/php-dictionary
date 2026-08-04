# Alias
An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the ``class_alias()`` function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name.
```php
<?php

    use stdClass as StandardClass;
    
    foreach($map as $key => $value) {
        print "$key => $value\n";
    }

?>
```

## See Also

+ [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

Related : [Use Alias](Use Alias), [Alias Types](Alias Types), [Insteadof](Insteadof), [References](References), [class_alias()](class_alias()), [As](As)
