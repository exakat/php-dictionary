# Double Arrow
The double arrow is the PHP token ``=>``. It is an arrow, and the equal sign as body of the arrow gives it its name of double arrow.

The double arrow is used in several situations: 

+ With arrow functions: ``fn($a) => $a + 1;``
+ In arrays, to distinguish the key from the value: ``['a' => 3]``
+ In list, to distinguish the key from the value: ``['a' => $b] = ['a' => 4]``
+ In yield, to distinguish the key from the value: ``yield 'a' => $b;``
+ In property hooks, to start the body of the hook: ``private $p { get => $this->p; }``

``=>`` has no relationship with ``<=``, which is a comparison operator, nor with ``->``, which is the object operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html","name":"Double Arrow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:40 +0000","dateModified":"Fri, 19 Jun 2026 21:24:40 +0000","description":"The double arrow is the PHP token ``=>``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Double Arrow.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"double-arrow"}]}]}</script>
```php
<?php

    $array = ['a' => 3, 3];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)
+ [Understanding the Difference between -> and => in PHP and Laravel](https://medium.com/@tajbidtousif/understanding-the-difference-between-and-in-php-and-laravel-60f8a38fc5be)

## Related

+ [Arrow Functions](arrow-function.html)
+ [List](list.html)
+ [Yield](yield.html)
+ [Property Hook](property-hook.html)
+ [Comparison](comparison.html)
+ [Object Operator ->](object-operator.html)
