# Self-documenting
A self-documenting piece of code may be understood without the need to read the documentation. In particular, names are explicit and related to the application goals, and the methods and techniques are simple to relate to.

Self-documenting prevents developers to write external documentation: this never fall out of synchronisation, as the code is the documentation itself. It also saves switching context to collect extra information.

Self-documenting relies on the reader's knowledge: one need to have background know-how to confirm the code does what it means. 
```php
<?php

function multiplication(int $left, int $right): int {
    $return = $left * $right;
    
    // usage of is_float() is not obvious, or self-documenting
    if (is_float($return)) {
        throw new OverflowException('The result is too big.');
    }
    
    return $return;
}

?>
```

## See Also

+ [Keeping Your PHP Code Well Documented](https://www.sitepoint.com/keeping-php-code-well-documented/)

Related : [Docblock](Docblock), [Expressive Interface](Expressive Interface)
