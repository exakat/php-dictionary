# Default Value
Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided. 

Arguments and properties may have a default value. That way, arguments may be skipped when the method is being called, and the properties do not have to be initialized before usage.

Variable have a default value of ``null``. Their initial assignment is considered a default value, as it replaces the ``null`` one.
```php
<?php

function foo($a = 1) {
    echo $a;
}

foo('one ');
foo();

// displays one 1

?>
```

Related : [Parameter](Parameter), [Properties](Properties), [Default](Default), [Null](Null), [Null Pattern](Null Pattern), [Autovivification](Autovivification), [Fallback](Fallback), [Optional Parameter](Optional Parameter)
