# array_pad()
``array_pad()`` is a PHP native function which completes an array up to ``$length`` elements with a specified ``$value``. When ``$length`` is positive, the padding is to the right, and when ``$length`` is negative, it is a padding to the left.

Literal values are copied, while objects are only copied at the reference level: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.

```php
<?php

    $array = [1];
    $array = array_pad($array, 3, 2); 
    $array === [1, 2, 2];
    
    $array = [1];
    $array = array_pad($array, -3, 4); 
    $array === [4, 4, 1];
    
    $x = new stdClass();
    $x->i = 1;
    
    $array = array_pad([], 2, $x);
    $array[1]->i = 3;
    echo $array[0]->i; // also 3 

?>
```

## See Also

+ [The Power of PHP’s array_pad() Function](https://clouddevs.com/php/array_pad-function/)

Related : [range()](range()), [array_fill()](array_fill())
