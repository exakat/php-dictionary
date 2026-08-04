# Comparison
Comparison operators check how two values relate to each other. They may be equal or different, and, depending on the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, ``==``, ``<>``, ``<=>``, ``switch()`` and ``!=``, and with type checks, ``match()``, ``===`` and ``!==``. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications: ``strcmp()``, ``strcasecmp()``, ``strnatcasecmp()``, ``strcoll()``, ``similar_text()``, ``levensthein()``, ``bccomp()``, ``version_compare()``, ``hash_equals()``. 

Some of the functions include a loose or a strict version.
```php
<?php

    if ($a == $b) {
        print 'a and b are equal';
    }

?>
```

## See Also

+ [PHP Variable Comparison](https://phpcheatsheets.com/compare/)
+ [Difference between the (=), (==), and (===) operators in PHP](https://www.educative.io/answers/difference-between-the-and-operators-in-php)

Related : [Operators](Operators), [Type Juggling](Type Juggling), [Switch](Switch), [Match](Match), [Spaceship Operator](Spaceship Operator), [Magic Hash](Magic Hash), [Truthy](Truthy), [Underscore](Underscore), [zero](zero), [Identity Comparison](Identity Comparison), [Relaxed Comparison](Relaxed Comparison), [array_keys()](array_keys()), [Double Arrow](Double Arrow), [Triple](Triple)
