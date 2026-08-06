# Compact Array
An array is compact, or packed, if it only uses automated indices, starting with 0. This doesn't really show in the written code, though performances are better for some operations.

Such array's status may be reached by using ``array_values()`` or ``array_keys()`` on the array: such functions reindexes the values in the array.

This notion is not related to the ``compact()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compact-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compact-array.html","name":"Compact Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:30:18 +0000","dateModified":"Tue, 16 Jun 2026 15:30:18 +0000","description":"An array is compact, or packed, if it only uses automated indices, starting with 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Compact Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = [1,2,3];

    $notCompact = [1,2,3, 4=>4];

    $compactAgain = array_values($notCompact);

?>
```

**[Documentation](https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html)**
## See Also

+ [PHP 7 performance improvements (1/5): Packed arrays](https://blog.blackfire.io/php-7-performance-improvements-packed-arrays.html)

## Related

+ [Array, []](array.ini.html)
+ [compact()](compact.ini.html)
+ [array\_values()](array_values.ini.html)
+ [array\_keys()](array_keys.ini.html)
+ [Simple Switch](simple-switch.ini.html)
