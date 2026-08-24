# ArrayObject
``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object. It extends the base ``ArrayObject`` class and implements the ``ArrayAccess``, ``Countable``, ``IteratorAggregate``, and ``Serializable`` interfaces.

With ``ArrayObject``, it is possible to create objects that have the behavior of arrays, meaning it is possible to access array elements as properties and use object-oriented methods to manipulate the array. 

Operators such as append ``[]``, or ``foreach()`` loops, are then available with those objects.

On the other hand, ``ArrayObject`` fails any ``array`` type, and many ``array`` functions do not work with the objects: ``array_key_exists()``, ``array_map()``, etc. 

Converting an ``ArrayObject`` to an array is done with a cast ``(array)`` or a call to ``iterator_to_array()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayobject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayobject.html","name":"ArrayObject","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:18 +0000","dateModified":"Tue, 11 Aug 2026 20:51:18 +0000","description":"ArrayObject is a native class that provides the functionality of an array with the added features of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayobject.html"]}],"keywords":["array","php native"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator_to_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.arrayobject.php"},{"@type":"CreativeWork","name":"Array Objects in PHP","url":"https:\/\/gist.github.com\/Jeff-Russ\/e1f64273a471d440e8b4d9183f9a2667"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arrayobject"}]}]}</script>
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

+ [Array, []](array.html)
+ [Cast Operator](cast.html)
+ [iterator\_to\_array()](iterator_to_array.html)
+ [Array Syntax](array-syntax.html)
+ [Iterator](iterator.html)

## Related packages

+ [jbzoo/data](https://packagist.org/packages/jbzoo/data)
+ [phootwork/collection](https://packagist.org/packages/phootwork/collection)
