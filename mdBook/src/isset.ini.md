# Isset
``isset()`` is a function that determines if a variable is declared and is different than ``null``.

``isset()`` is also related to the magic method ``__isset()``, which is used to determine if a property in an object exists or not. 

``isset()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.

``isset()`` may be compared to ``array_key_exists()`` to check if an index exists in an array. As a micro-optimisation, it is faster than the function.

```php
<?php

    $var = 'something';
    
    if (isset($var)) {
        echo 'The variable $var contains '.$var;
    } else {
        echo 'No such variable as $var';
    }

?>
```

## See Also

+ [isset vs empty vs is_null](https://phppot.com/php/isset-vs-empty-vs-is_null/)
+ [isset(), empty() And the Magic Methods](https://php-tips.readthedocs.io/en/latest/tips/isset-empty-valued.html)

Related : [Magic Methods](Magic Methods), [__isset() Method](__isset() Method), [array_key_exists()](array_key_exists()), [Empty](Empty), [Existence](Existence)
