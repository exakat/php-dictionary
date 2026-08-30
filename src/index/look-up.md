# Look-up
A look-up is the operation of retrieving a value from a data structure by key, index, or identity. It is one of the most fundamental operations in programming, and its efficiency depends on the underlying structure: ``O(1)`` for hash tables, ``O(log n)`` for sorted arrays or trees, and ``O(n)`` for linear search.

The most common look-up structures are associative arrays, which use hash tables internally and offer average ``O(1)`` access by string or integer key. Objects, SPL data structures, and databases serve as look-up sources in larger systems.

Look-up tables are a specific pattern where a computation is replaced by a precomputed array indexed by the input. They trade memory for speed by eliminating repeated calculations.

Look-ups also appear implicitly in many places: variable resolution, function dispatch, method resolution, and class autoloading are all look-up operations performed by the engine itself.

Understanding look-up complexity matters for performance-sensitive code: choosing a hash-based structure over a sequential scan can change an ``O(n)`` bottleneck into an ``O(1)`` operation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/look-up.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/look-up.html","name":"Look-up","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:08:27 +0000","dateModified":"Sat, 15 Aug 2026 12:08:27 +0000","description":"A look-up is the operation of retrieving a value from a data structure by key, index, or identity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/look-up.html"]}],"alternateName":["lookup"],"keywords":["concept","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/big-o-notation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lookup_table"},{"@type":"CreativeWork","name":"Hash table (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Hash_table"},{"@type":"CreativeWork","name":"Big O notation (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Big_O_notation"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"look-up"}]}]}</script>
```php
<?php

    // Simple look-up in an associative array
    $countryNames = [
        'FR' => 'France',
        'DE' => 'Germany',
        'JP' => 'Japan',
    ];
    
    $code = 'FR';
    $name = $countryNames[$code] ?? 'Unknown'; // O(1) look-up
    
    // Look-up table replacing a computation
    $dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    $dayName = $dayNames[date('w')]; // index look-up instead of switch/match

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Lookup_table)**
## See Also

+ [Hash table (Wikipedia)](https://en.wikipedia.org/wiki/Hash_table)
+ [Big O notation (Wikipedia)](https://en.wikipedia.org/wiki/Big_O_notation)

## Related

+ [Hash Table](hash-table.html)
+ [Array, []](array.html)
+ [Pattern](pattern.html)
+ [Big-o-notation](big-o-notation.html)
+ [Memoization](memoization.html)
