# Array Append
Append is an array operation, which adds an element at the end of the array. It is also called a push.

There are two operators for this feature ; the ``[]`` operator, which has to be placed after a variable or member. There is also the ``array_push()`` function, which is available as a callback, unlike the operator.

The opposite operation is a pop, with the function ``array_pop()``. ``array_unshift()`` is the append at the beginning of the array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/append.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/append.html","name":"Array Append","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Append is an array operation, which adds an element at the end of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Append.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array Prepend](prepend.ini.html)
+ [Square Brackets](square-bracket.ini.html)
