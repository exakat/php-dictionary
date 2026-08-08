# Assignations
Assignation refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows storing and manipulating data.

The main operator of assignation is ``=``. There are secondary operators, such as ``+=``, ``*=``, ``??=``, ... which are called short assignation: they apply a specific operation while assigning.

Finally, there are some inherent assignations: ``foreach()`` loops, method calls and ``list()`` operator perform assignations without an explicit operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignation.html","name":"Assignations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Assignation refers to the process of assigning a value to a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Assignations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Assignations"}]}]}</script>
```php
<?php

    $a = 'b';
    
    // $c is assigned by 
    foreach([1, 2, 3] as $c) {}
    echo $c; // $c is 3
    
    // list call that assigns values
    [$a, $b, $c] = ['a', 'b', 'C'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.assignment.php)**
## See Also

+ [Assignment Operators Explained with Examples](https://softwarebhai.com/blog/php-assignment-operators)

## Related

+ [Short Assignations](short-assignation.html)
+ [Overwrite](overwrite.html)
+ [Iffectation](iffectation.html)
+ [Short Syntax](short-syntax.html)
