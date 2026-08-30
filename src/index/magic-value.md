# Magic Values
A magic value is a literal value that appears in the code without a clear explanation of its meaning.

Similar to magic numbers, magic values can be strings, arrays, or other literal types. They should be replaced with named constants or configuration values to improve readability and maintainability.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-value.html","name":"Magic Values","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:27:13 +0000","dateModified":"Sat, 15 Aug 2026 08:27:13 +0000","description":"A magic value is a literal value that appears in the code without a clear explanation of its meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-value.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-number.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hard-coded.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-smell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Magic_number_(programming)"},{"@type":"CreativeWork","name":"Constants","url":"https:\/\/www.php.net\/manual\/en\/language.constants.php"},{"@type":"CreativeWork","name":"Enumerations","url":"https:\/\/www.php.net\/manual\/en\/language.enumerations.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-value"}]}]}</script>
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
## See Also

+ [Constants](https://www.php.net/manual/en/language.constants.php)
+ [Enumerations](https://www.php.net/manual/en/language.enumerations.php)

## Related

+ [Magic Numbers](magic-number.html)
+ [Hard Coded](hard-coded.html)
+ [Constants](constant.html)
+ [Code Smell](code-smell.html)
+ [Readability](readability.html)
