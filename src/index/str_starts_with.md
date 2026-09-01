# str\_starts\_with()
``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix.

``str_starts_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_ends_with()``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_starts_with.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_starts_with.html","name":"str_starts_with()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:39:42 +0000","dateModified":"Fri, 28 Aug 2026 09:39:42 +0000","description":"str_starts_with() is a built-in PHP function that checks that the string starts with the specified prefix","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_starts_with.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_ends_with.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.str-starts-with.php"},{"@type":"CreativeWork","name":"PHP: str_ends_with()","url":"https:\/\/www.php.net\/manual\/en\/function.str-ends-with.php"},{"@type":"CreativeWork","name":"PHP RFC: Add str_starts_with and str_ends_with functions","url":"https:\/\/wiki.php.net\/rfc\/add_str_starts_with_and_ends_with_functions"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"str_starts_with"}]}]}</script>
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
## See Also

+ [PHP: str_ends_with()](https://www.php.net/manual/en/function.str-ends-with.php)
+ [PHP RFC: Add str_starts_with and str_ends_with functions](https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions)

## Related

+ [str\_ends\_with()](str_ends_with.html)
+ [strpos](strpos.html)
