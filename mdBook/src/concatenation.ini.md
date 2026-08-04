# Concatenation .
Concatenation is the PHP feature that appends two strings together, to make a third, longer one.

Concatenation is also achieved with interpolation, inside a string; by calling echo, multiple times or with multiple arguments; by using the ``join()`` function.

Concatenation is done with the dot operator ``.``.
```php
<?php

    $a = "world";
    $b = "Hello ";
    echo $b . $a; 
    // displays Hello world

?>
```

## See Also

+ [All String Concatenations in PHP](https://www.exakat.io/en/all-string-concatenations-in-php/)

Related : [String](String), [Interpolation](Interpolation), [Heredocs](Heredocs), [__toString() Method](__toString() Method), [implode()](implode())
