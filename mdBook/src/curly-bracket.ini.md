# Curly Brackets
Curly brackets have different usage:

+ Delimit a block of code 
+ Represents a variable delimiter inside string
+ It used to identify a single byte in a string, with an array syntax

They are also called curly braces.
```php
<?php

    for($a = 1; $a < 10; ++$i) {
        // block
        
        // delimit a variable to avoid confusing it with $vars
        echo "{$var}s";
    }

    // old syntax: it used to be the second character in the string
    // This is a removed feature in PHP 8.0+
    // modern syntax : use angular brackets
    echo $string{1};

?>
```

## See Also

+ [PHP Curly Braces: How and When to Use it?](https://schoolsofweb.com/php-curly-braces-how-and-when-to-use-it/)

Related : [Block](Block), [String](String), [Square Brackets](Square Brackets), [Token](Token), [Balanced](Balanced), [Bracketless](Bracketless)
