# Array Syntax
The array syntax is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-syntax.html","name":"Array Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:33 +0000","dateModified":"Fri, 19 Jun 2026 21:24:33 +0000","description":"The array syntax is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];
    echo $array[1]; // b
    
    $string = 'ABC';
    echo $string[2]; // C
    
    $object = new ArrayObject(['x', 'y', 'z']);
    print $object[0]; // x

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## Related

+ [Object Syntax](object-syntax.ini.html)
+ [resource](resource.ini.html)
+ [ArrayObject](arrayobject.ini.html)
+ [Array Dot Notation](array-dot-notation.ini.html)
