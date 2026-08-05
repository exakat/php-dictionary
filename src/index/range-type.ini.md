# Range Type
A first-class range type represents an interval of values, such as ``1..10`` in Rust or Kotlin, or ``1...10`` in Swift, as a value in its own right, with its own type. A range can be stored in a variable, passed to a function, matched against with pattern matching, or iterated lazily, and the language often overloads slicing and ``for`` syntax to accept it directly.

Because a range is a value, not just a loop construct, it can express things such as ``switch x { 1..5 => ..., 6..10 => ... }`` or a slice bound ``arr[2..5]`` using the same type.

PHP has no range type. ``range()`` is an ordinary function that eagerly builds and returns a plain array of all the values in the interval; the interval itself is never represented as a value, cannot be matched with ``match``, and cannot be used as a slice boundary. Iterating lazily over an interval requires a ``Generator`` written by hand, or an external library.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/range-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/range-type.ini.html","name":"Range Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 05:03:07 +0000","dateModified":"Wed, 08 Jul 2026 05:03:07 +0000","description":"A first-class range type represents an interval of values, such as ``1","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Range Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [range()](range.ini.html)
+ [Generator](generator.ini.html)
+ [array\_slice()](array_slice.ini.html)
+ [Pattern Matching](pattern-matching.ini.html)
