# array\_filter()
``array_filter()`` is a native PHP function that filters elements of an array using a callback.

It iterates over each value of the array, passing it to the callback function. If the callback returns a truthy value, the element is included in the result array.

When no callback is provided, all entries that evaluate to false are removed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter.html","name":"array_filter()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:49 +0000","dateModified":"Sun, 12 Jul 2026 20:12:49 +0000","description":"array_filter() is a native PHP function that filters elements of an array using a callback","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_filter"}]}]}</script>
```php
<?php

    $numbers = [1, 2, 3, 4, 5, 6];
    
    // Filter even numbers
    $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
    // [2, 4, 6]
    
    // Remove falsy values
    $data = [0, 1, '', 'hello', null, true, false];
    $clean = array_filter($data);
    // [1, 'hello', true]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-filter.php)**
## See Also

+ [How to use array_filter in PHP](https://www.php.net/manual/en/function.array-filter.php#105986)

## Related

+ [Array, []](array.html)
+ [array\_map()](array_map.html)
+ [array\_walk()](array_walk.html)
+ [Closure](closure.html)
