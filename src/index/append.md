# Array Append
Append is an array operation, which adds an element at the end of the array. It is also called a push.

There are two operators for this feature ; the ``[]`` operator, which has to be placed after a variable or member. There is also the ``array_push()`` function, which is available as a callback, unlike the operator.

The opposite operation is a pop, with the function ``array_pop()``. ``array_unshift()`` is the append at the beginning of the array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/append.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/append.html","name":"Array Append","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Append is an array operation, which adds an element at the end of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Append.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"append"}]}]}</script>
```php
<?php

$array = [1, 2, 3];
$array[] = 4;

$array []= 5; // Same as above, with a notation similar to a short assignation

array_push($array, 6);

// $array === [1, 2, 3, 4, 5, 6];
?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.array.php)**
## See Also

+ [array_push](https://www.php.net/manual/en/function.array-push.php)

## Related

+ [Array Prepend](prepend.html)
+ [Square Brackets](square-bracket.html)
