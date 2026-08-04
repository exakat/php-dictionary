# PHP Constants
PHP provides a set of predefined global constants. 

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``T_READONLY`` was not defined, and appeared in version 8.1. 

It is possible to list all available PHP native constants with the function ``get_declared_constants()``.
```php
<?php

    print E_ALL;

    print PHP_VERSION;

?>
```

## See Also

+ [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

Related : [Superglobal Variables](Superglobal Variables), [Variables](Variables), [Native](Native), [DIRECTORY_SEPARATOR](DIRECTORY_SEPARATOR), [New Line](New Line), [Predefined Constants](Predefined Constants)
