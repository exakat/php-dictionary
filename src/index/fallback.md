# Fallback
A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions. It ensures that the system or application can function, either by default, or if something unexpected happens.

+ Fallback to global is the mechanism that uses PHP native function, in the global namespace, when they are not found in the local namespace
+ Fallback constant to string was a mechanism to use the literal constant name instead of its value, when the constant was not defined. It is now removed
+ A default value is a fallback mechanism.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fallback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fallback.html","name":"Fallback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fallback.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

namespace A;

// function A\strtolower does not exists, so it uses \strtolower
echo strtolower('ABC');

?>
```

**[Documentation](https://www.merriam-webster.com/dictionary/fallback)**
## Related

+ [Fallback To Global](fallback-to-global.ini.html)
+ [Fallback Function](fallback-function.ini.html)
+ [Default Value](default-value.ini.html)
