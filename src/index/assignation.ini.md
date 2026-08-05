# Assignations
Assignation refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows storing and manipulating data.

The main operator of assignation is ``=``. There are secondary operators, such as ``+=``, ``*=``, ``??=``, ... which are called short assignation: they apply a specific operation while assigning.

Finally, there are some inherent assignations: ``foreach()`` loops, method calls and ``list()`` operator perform assignations without an explicit operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assignation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assignation.ini.html","name":"Assignations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 10:55:03 +0000","dateModified":"Tue, 04 Aug 2026 10:55:03 +0000","description":"Assignation refers to the process of assigning a value to a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Assignations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Short Assignations](short-assignation.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [Iffectation](iffectation.ini.html)
+ [Short Syntax](short-syntax.ini.html)
