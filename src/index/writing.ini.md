# Writing
Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writing.ini.html","name":"Writing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:17 +0000","dateModified":"Fri, 19 Jun 2026 21:25:17 +0000","description":"Writing is the action to replace a value in a data container with another one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Writing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$x = 1; // writing 1

++$x; // reading 1 and writing 2 

echo $x; // reading 2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Assignment_(computer_science))**
## Related

+ [Reading](reading.ini.html)
