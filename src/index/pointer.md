# Pointer
Pointers are a fundamental concept in programming, especially in languages like C and C++. A pointer is a variable that stores the memory address of another variable.

PHP does not support a notion of pointer. The closest feature is called 'reference', yet it is quite different from pointers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pointer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pointer.html","name":"Pointer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:28:13 +0000","dateModified":"Fri, 19 Jun 2026 21:28:13 +0000","description":"Pointers are a fundamental concept in programming, especially in languages like C and C++","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pointer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 1;
$b = &$a;
$b = 2;

echo $a; // 2 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Pointer_(computer_programming))**
## Related

+ [References](reference.ini.html)
