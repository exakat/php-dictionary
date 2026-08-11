# Array Syntax
The array syntax is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-syntax.html","name":"Array Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:33 +0000","dateModified":"Fri, 19 Jun 2026 21:24:33 +0000","description":"The array syntax is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Syntax.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-syntax"}]}]}</script>
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

+ [Object Syntax](object-syntax.html)
+ [resource](resource.html)
+ [ArrayObject](arrayobject.html)
+ [Array Dot Notation](array-dot-notation.html)
