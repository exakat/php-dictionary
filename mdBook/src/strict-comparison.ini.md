# Strict Comparison
Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value. In other words, it does not apply any type-juggling to the values before processing. 

Here are the strict operators: ``==`` may be replaced with ``===``,  ``!=`` may be replaced with ``!==``, ``switch`` may be replaced with ``match``, ``in_array()`` with the third parameter ``strict`` set to true.
```php
<?php

    //true
    var_dump(1 == "1");
    //false
    var_dump(1 === "1");
    
    //true
    var_dump(null == 0);
    //false
    var_dump(null === 0);

?>
```

## See Also

+ [Strict vs. Loose Comparisons in PHP](https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/)
+ [Strict Comparison in PHP Explained at the Zend Engine Level](https://coderlegion.com/9440/strict-comparison-in-php-explained-at-the-zend-engine-level)

Related : [Switch](Switch), [Match](Match), [Relaxed Comparison](Relaxed Comparison), [Hash Comparisons](Hash Comparisons)
