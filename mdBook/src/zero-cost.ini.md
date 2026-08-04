# Zero Cost
``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in version 7.0.

Zero cost assertions means that they can be turned off, and do not add any execution penalty. 

Until PHP 7.0, assertions could be switched off, but their parsing and non-execution would still require some condition checks. Since PHP 7.0, disabled assertions are not even compiled into bytecode: they are completely removed from the code.

Zero-cost is associated with compiled languages, which are able to remove such code at compile time, with the correction options, debug or not. 

Some PHP packages and applications claim to be zero-cost. They are using some well place execution to reduce the impact on the execution time, like ``Kphp``, which compiles to C++ a subset of PHP.
```php
<?php

    assert($a !== 0, '$a must not be zero.');

?>
```

## See Also

+ [kphp](https://vkcom.github.io/kphp/)

Related : [Assertions](Assertions)
