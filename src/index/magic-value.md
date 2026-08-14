# Magic Values
A magic value is a literal value that appears in the code without a clear explanation of its meaning.

Similar to magic numbers, magic values can be strings, arrays, or other literal types. They should be replaced with named constants or configuration values to improve readability and maintainability.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-value.html","name":"Magic Values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:13:03 +0000","dateModified":"Sun, 12 Jul 2026 20:13:03 +0000","description":"A magic value is a literal value that appears in the code without a clear explanation of its meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Magic Values.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-value"}]}]}</script>
```php
<?php

    // Magic string value
    $role = 'admin';
    
    // Better: use a constant
    const ROLE_ADMIN = 'admin';
    $role = ROLE_ADMIN;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Magic_number_(programming))**
## Related

+ [Magic Numbers](magic-number.html)
+ [Hard Coded](hard-coded.html)
+ [Constants](constant.html)
+ [Code Smell](code-smell.html)
+ [Readability](readability.html)
