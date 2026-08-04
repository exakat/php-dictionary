# Dynamic
Dynamic is a common concept, and may be used in three distinct situations: 

+ Dynamic call, to call a function or method whose name is in a variable
+ Dynamic constant, to call a constant whose name is in a variable
+ Dynamic property, to access a property whose name is in a variable
+ Dynamic loading, for PHP to load an extension after the start of execution
+ Dynamic variable, to access a variable whose name is in another variable.
```php
<?php

    // Dynamic call of a variable
    $a = K;
    $x = 'a';
    echo $$x; // K
    
    const A = 1;
    $name = 'A';
    echo constant($name); // 1

?>
```

## See Also

+ [All the Dynamic Syntaxes in PHP](https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/)

Related : [Dynamic Call](Dynamic Call), [Dynamic Constant](Dynamic Constant), [Dynamic Properties](Dynamic Properties), [Dynamic Loading](Dynamic Loading), [Dynamic Variable](Dynamic Variable), [Variable Variables](Variable Variables), [static](static), [Dynamic Class Constant](Dynamic Class Constant), [Dynamic Method](Dynamic Method)
