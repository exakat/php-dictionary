# in_array()
``in_array()`` function checks if a value exists in an array. It is important to use the third parameter 'strict' to true to ensure type safety and avoid unexpected behavior due to PHP's loose comparison rules.

A surprising pitfall is misplaced parentheses, which can lead to valid but incorrect logic: ``if (in_array($a, $b) == $c)`` vs ``if (in_array($a, $b == $c))``.
```php
<?php

    $array = [1, 2, '3', 4];
    
    // Loose comparison (default): returns true
    var_dump(in_array(3, $array)); 
    
    // Strict comparison: returns false
    var_dump(in_array(3, $array, true));
    
    // Misplaced parenthesis pitfall
    $a = 1;
    $b = [1, 2, 3];
    $c = true;
    
    // Correct usage
    if (in_array($a, $b) === $c) {
        echo 'Found';
    }
    
    // Potentially incorrect but valid syntax
    if (in_array($a, $b === $c)) {
        echo 'Valid PHP, but unlikely what was intended';
    }

?>
```

## See Also

+ [A Case Of Misplaced Parenthesis](https://php-tips.readthedocs.io/en/latest/tips/misplaced_parenthesis.html)
+ [When placing the parenthesis is ambiguous](https://3v4l.org/YN2FK)

Related : [array_search](array_search), [array_keys()](array_keys())
