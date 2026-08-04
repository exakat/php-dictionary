# Dynamic Expression
A dynamic expression is an expression that is only wholly defined at execution time. It needs to collect pieces of information before processing. This applies to elements that are usually static, such as class, function, method, constants, not to parameters which are expected to be variable.
```php
<?php

    $config = new ConfigFile();

    $function = $config->sortingMethod; // sort, or rsort
    $function($array);

?>
```

Related : [Static Expression](Static Expression)
