# Chaining Assignation
Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators.

The assignment is evaluated from right to left: the rightmost value is assigned first, then the result propagates leftward. Each ``=`` operator returns the assigned value, which becomes the operand of the next assignment.

Note that magic methods such as ``__set()`` and ``__get()`` are never called during chaining assignments. Writing ``$a = $obj->b = 8;`` will not trigger ``__set()`` on ``$obj``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-assignation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-assignation.html","name":"Chaining Assignation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:13:32 +0000","dateModified":"Thu, 16 Jul 2026 14:13:32 +0000","description":"Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive = operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Chaining Assignation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"chaining-assignation"}]}]}</script>
```php
<?php

    // Basic chaining assignation
    $a = $b = $c = 0;
    // $a, $b, $c are all 0
    
    // Right-to-left evaluation
    $x = ($y = 5) + 3;
    // $y is 5, $x is 8
    
    // Chaining with a function call
    $arr = $count = count([1, 2, 3]);
    // both $arr and $count are 3

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.assignment.php)**
## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)
+ [Hidden Traps with Chained Assignments](https://www.exakat.io/hidden-traps-with-chained-assignments/)

## Related

+ [Assignment](assignment.html)
+ [\_\_set() Method](__set.html)
+ [\_\_get() Method](__get.html)
+ [Chaining](chaining.html)
+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.html)
