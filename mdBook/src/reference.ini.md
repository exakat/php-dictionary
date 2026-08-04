# References
References allow creating multiple variables that refer to the same underlying value in memory. When using references, any changes made by one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfer of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.
```php
<?php

    $a = 1;

    $b = &$a; 
    $b = 2;

    echo $a;
    // displays 2

?>
```

## See Also

+ [PHP References: How They Work, and When to Use Them](https://www.elated.com/php-references/)
+ [PHP Spotting References](https://www.tutorialspoint.com/php-spotting-references)
+ [References in PHP](https://erikpoehler.com/2023/01/15/references-in-php/)

Related : [Variables](Variables), [Weak References](Weak References), [Alias](Alias), [Dangling Reference](Dangling Reference), [Garbage Collection](Garbage Collection), [Recursive Array](Recursive Array), [Self-reference](Self-reference), [Circular Reference](Circular Reference), [Clone](Clone), [Pointer](Pointer)
