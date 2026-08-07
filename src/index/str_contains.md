# str\_contains()
``str_contains()`` is a PHP native function that checks if a string contains another string.

The function returns a boolean. It is meant to be a replacement to ``strpos()``, which returns the position of the found string, but is often misused.

The search is case sensitive. There is no case insensitive version of ``str_contains()``. This has to be done by setting the strings to the same case first.

The empty string is always found. ``null`` value is not accepted, but still default to empty string ``''``, so ``true``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html","name":"str_contains()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``str_contains()`` is a PHP native function that checks if a string contains another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"str_contains()"}]}]}</script>
```php
<?php

    var_dump(str_contains('abc', '')); // true
    
    var_dump(str_contains('abc', 'a')); // true
    
    var_dump(str_contains('abc', 'A')); // false
    
    var_dump(str_contains('abc', 'd')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false

?>
```

**[Documentation](https://www.php.net/manual/fr/function.str-contains.php)**
## Related

+ [Null](null.html)
+ [Empty String](empty-string.html)
+ [fnmatch()](fnmatch.html)
+ [Preg\_match](preg_match.html)
+ [strpos](strpos.html)
