# Double Arrow
The double arrow is the PHP token ``=>``. It is an arrow, and the equal sign as body of the arrow gives it its name of double arrow.

The double arrow is used in several situations: 

+ With arrow functions: ``fn($a) => $a + 1;``
+ In arrays, to distinguish the key from the value: ``['a' => 3]``
+ In list, to distinguish the key from the value: ``['a' => $b] = ['a' => 4]``
+ In yield, to distinguish the key from the value: ``yield 'a' => $b;``
+ In property hooks, to start the body of the hook: ``private $p { get => $this->p; }``

``=>`` has no relationship with ``<=``, which is a comparison operator, nor with ``->``, which is the object operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/double-arrow.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/double-arrow.ini.html","name":"Double Arrow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:40 +0000","dateModified":"Fri, 19 Jun 2026 21:24:40 +0000","description":"The double arrow is the PHP token ``=>``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Double Arrow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Arrow Functions](arrow-function.ini.html)
+ [List](list.ini.html)
+ [Yield](yield.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Comparison](comparison.ini.html)
+ [Object Operator ->](object-operator.ini.html)
