# sscanf()
``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.

``sscanf()`` is the opposite feature of ``printf()``: the same format may be used to parse or print data.
```php
<?php

    $date = January 01 2000;
    list($month, $day, $year) = sscanf($date, %s %d %d);
    
    print(%s %d %d, $month, $day, $year);

?>
```

## See Also

+ [PHP sscanf() Function](https://www.geeksforgeeks.org/php/php-sscanf-function/)

Related : [printf()](printf()), [sprintf](sprintf)
