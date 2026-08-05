# Infinite Loop
An infinite loop never ends, unless there is an external event.

Infinite loops are usually not wanted, and should be avoided. They are prevented by PHP which enforces a ``max_execution_time`` or ``memory_limit`` error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/infinite-loop.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/infinite-loop.ini.html","name":"Infinite Loop","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An infinite loop never ends, unless there is an external event","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Infinite Loop.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// infinite loop while
while(true) { }

// infinite loop while
do { } while(1);

for(;;) {} 

?>
```

**[Documentation](https://fr.wikipedia.org/wiki/Infinite_Loop)**
## See Also

+ [Infinite loops in PHP](https://www.exakat.io/infinite-loops-in-php/)

## Related

+ [INF](inf.ini.html)
+ [Infinite](infinite.ini.html)
+ [InfiniteIterator](infiniteiterator.ini.html)
+ [max\_execution\_time](max_execution_time.ini.html)
+ [Return Value](return-value.ini.html)
