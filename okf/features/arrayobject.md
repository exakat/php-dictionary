---
type: "PHP Feature"
title: "ArrayObject"
description: "``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object."
resource: "https://www.php.net/manual/en/class.arrayobject.php"
tags: ["array", "php native"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ArrayObject

``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object. It extends the base ``ArrayObject`` class and implements the ``ArrayAccess``, ``Countable``, ``IteratorAggregate``, and ``Serializable`` interfaces.

With ``ArrayObject``, it is possible to create objects that have the behavior of arrays, meaning it is possible to access array elements as properties and use object-oriented methods to manipulate the array. 

Operators such as append ``[]``, or ``foreach()`` loops, are then available with those objects.

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

## Documentation
- [https://www.php.net/manual/en/class.arrayobject.php](https://www.php.net/manual/en/class.arrayobject.php)

## See Also
- [Array Objects in PHP](https://gist.github.com/Jeff-Russ/e1f64273a471d440e8b4d9183f9a2667)

## Related
- [Array, []](/features/array.md)
- [Cast Operator](/features/cast.md)
- [iterator_to_array()](/features/iterator_to_array.md)
- [Array Syntax](/features/array-syntax.md)
- [Iterator](/features/iterator.md)

## Details
- Packagist: [jbzoo/data](https://packagist.org/packages/jbzoo/data)
- Packagist: [phootwork/collection](https://packagist.org/packages/phootwork/collection)

