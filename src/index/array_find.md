# array\_find()
``array_find()`` is a PHP native function, introduced in version 8.4, that returns the first value of an array for which a callback returns a truthy value, or ``null`` if no element matches.

Unlike ``array_filter()`` followed by picking the first element, ``array_find()`` short-circuits as soon as a match is found, and never builds an intermediate array. It complements ``array_any()`` and ``array_all()``, which only test for the existence of a match without returning the matching value, and ``array_find_key()``, which returns the matching key instead of the value.

Since ``array_find()`` returns ``null`` when nothing matches, and ``null`` may also be a legitimate value already stored in the array, code that must tell the two situations apart should use ``array_find_key()`` and compare it to ``null`` with ``===``, rather than rely on the returned value alone.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find.html","name":"array_find()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:27:22 +0000","dateModified":"Thu, 09 Jul 2026 10:27:22 +0000","description":"``array_find()`` is a PHP native function, introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"array_find()"}]}]}</script>
```php
<?php

    $numbers = [1, 3, 4, 7, 10];

    $firstEven = array_find($numbers, fn($n) => $n % 2 === 0);
    // 4

    $found = array_find($numbers, fn($n) => $n > 100);
    // null, no element matches

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-find.php)**
## See Also

+ [PHP RFC: array_find](https://wiki.php.net/rfc/array_find)

## Related

+ [array\_find\_key()](array_find_key.html)
+ [array\_filter()](array_filter.html)
+ [array\_search](array_search.html)
+ [array\_walk()](array_walk.html)
