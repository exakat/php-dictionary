# Typo
A typo is short for ``typographical error``. It refers to a mistake made in the typing of the code. Typographical errors can include misspelled words and misplaced operators. Typos can occur in various contexts, such as types, expressions, and naming.

A typo can lead to a visible or invisible error. A typo in the function name of ``array_slice()``, like ``array_sloce()``, leads to a fatal error, as the function is not defined.

On the other hand, a typo on the same function, written ``array_splice()``, note the extra p, leads to argument errors, as this new function exists, but requests different types of data.

Typos happen in any text-based system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typo.html","name":"Typo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 04:20:02 +0000","dateModified":"Wed, 12 Aug 2026 04:20:02 +0000","description":"A typo is short for typographical error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Typo.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typo"}]}]}</script>
```php
<?php

    // The typo has placed the === false INSIDE the in_array(), and changes the behavior
    if (in_array($array, $value, $strict === false)) {
    
    }
    
    // the type and is not expected, instead of an integer
    function foo(ant $i) {
    
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Typographical_error)**
## See Also

+ [Top Common PHP Errors](https://medium.com/@jaydipkumarjha/top-common-php-errors-9dd20dfcdf81)
+ [Top Common PHP Errors and How to Fix Them](https://olixlab.com/blog/top-common-php-errors-and-how-to-fix-them/)

## Related

+ [Silent Behavior](silent.html)
+ [Semantics](semantics.html)
