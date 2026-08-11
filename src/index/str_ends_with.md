# str\_ends\_with()
``str_ends_with()`` is a built-in PHP function that checks that the string ends with the specified suffix.

``str_ends_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_starts_with()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_ends_with.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_ends_with.html","name":"str_ends_with()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``str_ends_with()`` is a built-in PHP function that checks that the string ends with the specified suffix","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_ends_with().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"str_ends_with"}]}]}</script>
```php
<?php

    var_dump(str_starts_with('abc', 'a')); // false
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'c')); // true

?>
```

**[Documentation](https://www.php.net/manual/en/function.str-ends-with.php)**
## Related

+ [str\_starts\_with()](str_starts_with.html)
+ [strpos](strpos.html)
