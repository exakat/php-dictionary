# Reserved Names
PHP shares several namespaces with the custom code, and has reserved some names for its own usage. 

+ Namespaces: the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords: ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ``match``, ...
+ Some classes, constants, functions, interfaces: ``die``, ``exit``, 
+ Variables: ``$GLOBALS``, ``$_GET``,...
```php
<?php

    // function void() would not compile
    function theVoid() : bool { }

?>
```

## See Also

+ [Predefined Variables](https://www.php.net/manual/en/language.variables.predefined.php)

Related : [Name](Name), [Keyword](Keyword), [Name Conventions](Name Conventions)
