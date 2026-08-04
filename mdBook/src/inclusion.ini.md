# Inclusions
Inclusion is the operation to add PHP code stored in an external file, into another PHP code. 

Inclusions rely on four native functions: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusions have application with templates, configurations, caches, function libraries. 

Inclusions have been superseded by autoload in recent PHP versions. Autoload relies on inclusion, though.
```php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

## See Also

+ [PHP Include](https://www.phptutorial.net/php-tutorial/php-include-file/)
+ [PHP Include & Require : All about Include vs Require in PHP](https://www.simplilearn.com/tutorials/php-tutorial/include-in-php)

Related : [Class Autoloading](Class Autoloading), [Code Injection](Code Injection), [Control Flow](Control Flow), [include](include)
