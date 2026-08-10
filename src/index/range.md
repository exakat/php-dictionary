# range()
``range()`` produces an array with all values between the two arguments of the function.

By default, the produced elements are spaced by 1, or another distance when the ``$step`` argument is used. 

When ``$start`` is bigger than ``$end``, the array is descending. Otherwise, it is ascending.

When both ``$start`` and ``$end`` are single byte strings, such as alphabet letters, ``range()`` produces all letters in-between. It does not work on multi-bytes characters, nor with values beyond 255.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html","name":"range()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``range()`` produces an array with all values between the two arguments of the function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"range()"}]}]}</script>
```php
<?php

    // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    $figures = range(0, 9); 
    
    // 0, 2, 4, 6, 8
    $even = range(0, 9, 2); 
    
    // The ASCII range
    print_r(range(chr(0), chr(231)));

?>
```

**[Documentation](https://www.php.net/manual/en/function.range.php)**
## See Also

+ [The Fundamentals of PHP’s range() Function](https://clouddevs.com/php/range-function/)

## Related

+ [Yield](yield.html)
+ [Generator](generator.html)
+ [yield from Keyword](yield-from.html)
+ [array\_fill()](array_fill.html)
+ [array\_pad()](array_pad.html)
