# Increment
Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increments usually refers to the pre-plusplus and post-plusplus. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.
```php
<?php

    $a = 1;
    
    echo ++$a; // pre plus plus : displays 1, and $a ends with 2
    
    echo $a++; // post plus plus 
    
    echo $a += 1; // increment 

?>
```

Related : [Pre-increment](Pre-increment), [Post-increment](Post-increment), [String Increment](String Increment)
