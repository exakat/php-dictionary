# ArrayObject
``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object. It extends the base ``ArrayObject`` class and implements the ``ArrayAccess``, ``Countable``, ``IteratorAggregate``, and ``Serializable`` interfaces.

With ``ArrayObject``, it is possible to create objects that have the behavior of arrays, meaning it is possible to access array elements as properties and use object-oriented methods to manipulate the array. 

Operator such as append ``[]``, or ``foreach()`` loops are then available with those objects.

On the other hand, ``ArrayObject`` fails any ``array`` type, and many ``array`` functions do not work with the objects: ``array_key_exists()``, ``array_map()``, etc. 

Converting an ``ArrayObject`` to an array is done with a cast ``(array)`` or a call to ``iterator_to_array()``.
```php
<?php

    class myObject extends ArrayObject{ }
    
    $variable = new ArrObj([0, 1]);
    
    $variable[] = 2;
    foreach($variable as $k => $v) {
        echo $k . ' => ' . $v . PHP_EOL; 
    }

?>
```

## See Also

+ [Array Objects in PHP](https://gist.github.com/Jeff-Russ/e1f64273a471d440e8b4d9183f9a2667)

Related : [Array, []](Array, []), [Cast Operator](Cast Operator), [iterator_to_array()](iterator_to_array()), [Array Syntax](Array Syntax), [Iterator](Iterator)
