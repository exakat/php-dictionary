# str\_replace()
``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string.

The search and replace arguments may be arrays, allowing several substitutions to be applied in a single call. When arrays are used, each replaced value is rescanned for further matches, which may lead to unexpected double substitutions, unlike ``strtr()``.

The search is case-sensitive. ``str_ireplace()`` is the case-insensitive counterpart.

An optional fourth argument, passed by reference, receives the number of replacements performed.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_replace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_replace.html","name":"str_replace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 13:44:28 +0000","dateModified":"Thu, 16 Jul 2026 13:44:28 +0000","description":"``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_replace().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"str_replace"}]}]}</script>
```php
<?php

    echo str_replace('World', 'PHP', 'Hello World'); // Hello PHP

    // Array of search/replace pairs
    $search  = ['Hello', 'World'];
    $replace = ['Hi', 'Earth'];
    echo str_replace($search, $replace, 'Hello World'); // Hi Earth

    // Case-insensitive version
    echo str_ireplace('world', 'PHP', 'Hello World'); // Hello PHP

    // Counting replacements
    str_replace('o', '0', 'Hello World', $count);
    echo $count; // 2

?>
```

**[Documentation](https://www.php.net/manual/en/function.str-replace.php)**
## Related

+ [strtr()](strtr.html)
+ [String](string.html)
+ [strpos](strpos.html)
+ [Case Sensitivity](case-insensitive.html)
+ [preg\_replace()](preg_replace.html)
