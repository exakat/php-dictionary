# str\_contains()
``str_contains()`` is a PHP native function that checks if a string contains another string.

The function returns a boolean. It is meant to be a replacement to ``strpos()``, which returns the position of the found string, but is often misused.

The search is case sensitive. There is no case insensitive version of ``str_contains()``. This has to be done by setting the strings to the same case first.

The empty string is always found. ``null`` value is not accepted, but still default to empty string ``''``, so ``true``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_contains.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_contains.ini.html","name":"str_contains()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``str_contains()`` is a PHP native function that checks if a string contains another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_contains().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Null](null.ini.html)
+ [Empty String](empty-string.ini.html)
+ [fnmatch()](fnmatch.ini.html)
+ [Preg\_match](preg_match.ini.html)
+ [strpos](strpos.ini.html)
