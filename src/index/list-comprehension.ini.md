# List Comprehension
A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's ``[x * 2 for x in items if x > 0]`` or Haskell's ``[x * 2 | x <- items, x > 0]``. It is meant to read like the set-builder notation it is named after.

Because it is a single expression rather than a sequence of statements, a list comprehension can be nested, assigned, or passed as an argument directly, and many languages let the compiler fuse the filtering and mapping steps into a single pass.

PHP has no list comprehension syntax. The same result requires either an explicit loop that pushes onto an accumulator array, or a chain of ``array_map()`` and ``array_filter()`` calls, both of which are statements or nested function calls rather than a single declarative expression, and ``array_filter()`` followed by ``array_map()`` walks the array twice unless carefully reordered.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/list-comprehension.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/list-comprehension.ini.html","name":"List Comprehension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:49:54 +0000","dateModified":"Thu, 09 Jul 2026 07:49:54 +0000","description":"A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's ``[x * 2 for x in items if x > 0]`` or Haskell's ``[x * 2 | x <- items, x > 0]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/List Comprehension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// PHP equivalent of [x * 2 for x in items if x > 0]
$doubled = array_map(
    fn ($x) => $x * 2,
    array_filter($items, fn ($x) => $x > 0)
);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/List_comprehension)**
## Related

+ [array\_map()](array_map.ini.html)
+ [Generator](generator.ini.html)
+ [Functional Programming](functional-programming.ini.html)
