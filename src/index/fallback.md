# Fallback
A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions. It ensures that the system or application can function, either by default, or if something unexpected happens.

+ Fallback to global is the mechanism that uses PHP native function, in the global namespace, when they are not found in the local namespace
+ Fallback constant to string was a mechanism to use the literal constant name instead of its value, when the constant was not defined. It is now removed
+ A default value is a fallback mechanism.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback.html","name":"Fallback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:19:07 +0000","dateModified":"Fri, 14 Aug 2026 09:19:07 +0000","description":"A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fallback.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fallback"}]}]}</script>
```php
<?php

    namespace A;
    
    // function A\strtolower does not exists, so it uses \strtolower
    echo strtolower('ABC');

?>
```

**[Documentation](https://www.merriam-webster.com/dictionary/fallback)**
## See Also

+ [Default parameter values](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)
+ [Null coalescing operator](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce)

## Related

+ [Fallback To Global](fallback-to-global.html)
+ [Fallback Function](fallback-function.html)
+ [Default Value](default-value.html)
+ [Stale-While-Revalidate](stale-while-revalidate.html)
+ [Resilience](resilience.html)
