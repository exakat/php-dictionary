# str\_starts\_with()
``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix.

``str_starts_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_ends_with()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_starts_with.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_starts_with.ini.html","name":"str_starts_with()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/str_starts_with().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    var_dump(str_starts_with('abc', 'a')); // true
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'ab')); // true
    var_dump(str_starts_with('abc', 'abc')); // true
    var_dump(str_starts_with('abc', 'abcd')); // false

?>
```

**[Documentation](https://www.php.net/manual/en/function.str-starts-with.php)**
## Related

+ [str\_ends\_with()](str_ends_with.ini.html)
+ [strpos](strpos.ini.html)
