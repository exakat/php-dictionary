# Range Type
A first-class range type represents an interval of values, such as ``1..10`` in Rust or Kotlin, or ``1...10`` in Swift, as a value in its own right, with its own type. A range can be stored in a variable, passed to a function, matched against with pattern matching, or iterated lazily, and the language often overloads slicing and ``for`` syntax to accept it directly.

Because a range is a value, not just a loop construct, it can express things such as ``switch x { 1..5 => ..., 6..10 => ... }`` or a slice bound ``arr[2..5]`` using the same type.

PHP has no range type. ``range()`` is an ordinary function that eagerly builds and returns a plain array of all the values in the interval; the interval itself is never represented as a value, cannot be matched with ``match``, and cannot be used as a slice boundary. Iterating lazily over an interval requires a ``Generator`` written by hand, or an external library.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range-type.html","name":"Range Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 05:03:07 +0000","dateModified":"Wed, 08 Jul 2026 05:03:07 +0000","description":"A first-class range type represents an interval of values, such as 1","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range-type.html"]}],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Interval_(mathematics)"},{"@type":"CreativeWork","name":"range() manual page","url":"https:\/\/www.php.net\/manual\/en\/function.range.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"range-type"}]}]}</script>
```php
<?php

// range() eagerly materializes the array; there is no interval value.
$values = range(1, 10);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Interval_(mathematics))**
## See Also

+ [range() manual page](https://www.php.net/manual/en/function.range.php)

## Related

+ [range()](range.html)
+ [Generator](generator.html)
+ [array\_slice()](array_slice.html)
+ [Pattern Matching](pattern-matching.html)
