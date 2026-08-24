# List Comprehension
A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's ``[x * 2 for x in items if x > 0]`` or Haskell's ``[x * 2 | x <- items, x > 0]``. It is meant to read like the set-builder notation it is named after.

Because it is a single expression rather than a sequence of statements, a list comprehension can be nested, assigned, or passed as an argument directly, and many languages let the compiler fuse the filtering and mapping steps into a single pass.

PHP has no list comprehension syntax. The same result requires either an explicit loop that pushes onto an accumulator array, or a chain of ``array_map()`` and ``array_filter()`` calls, both of which are statements or nested function calls rather than a single declarative expression, and ``array_filter()`` followed by ``array_map()`` walks the array twice unless carefully reordered.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list-comprehension.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list-comprehension.html","name":"List Comprehension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 09:53:35 +0000","dateModified":"Sat, 15 Aug 2026 09:53:35 +0000","description":"A list comprehension is an expression-level syntax for building a new collection by describing it declaratively: a source, a transformation, and an optional filter, all in a single readable expression, as in Python's [x * 2 for x in items if x > 0] or Haskell's [x * 2 | x <- items, x > 0]","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list-comprehension.html"]}],"keywords":["concept","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/List_comprehension"},{"@type":"CreativeWork","name":"array_filter()","url":"https:\/\/www.php.net\/manual\/en\/function.array-filter.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"list-comprehension"}]}]}</script>
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
## See Also

+ [array_filter()](https://www.php.net/manual/en/function.array-filter.php)

## Related

+ [array\_map()](array_map.html)
+ [Generator](generator.html)
+ [Functional Programming](functional-programming.html)
