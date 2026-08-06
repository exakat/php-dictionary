# ArrayObject
``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object. It extends the base ``ArrayObject`` class and implements the ``ArrayAccess``, ``Countable``, ``IteratorAggregate``, and ``Serializable`` interfaces.

With ``ArrayObject``, it is possible to create objects that have the behavior of arrays, meaning it is possible to access array elements as properties and use object-oriented methods to manipulate the array. 

Operator such as append ``[]``, or ``foreach()`` loops are then available with those objects.

On the other hand, ``ArrayObject`` fails any ``array`` type, and many ``array`` functions do not work with the objects: ``array_key_exists()``, ``array_map()``, etc. 

Converting an ``ArrayObject`` to an array is done with a cast ``(array)`` or a call to ``iterator_to_array()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arrayobject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arrayobject.html","name":"ArrayObject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ArrayObject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.arrayobject.php)**
## See Also

+ [Array Objects in PHP](https://gist.github.com/Jeff-Russ/e1f64273a471d440e8b4d9183f9a2667)

## Related

+ [Array, []](array.ini.html)
+ [Cast Operator](cast.ini.html)
+ [iterator\_to\_array()](iterator_to_array.ini.html)
+ [Array Syntax](array-syntax.ini.html)
+ [Iterator](iterator.ini.html)

## Related packages

+ [jbzoo/data](https://packagist.org/packages/jbzoo/data)
+ [phootwork/collection](https://packagist.org/packages/phootwork/collection)
