# New Line
A new-line ``\n`` character. It may be represented by this string sequence, or an actual new line, within a string, or, also by the ``PHP_EOL`` native constant. 

PHP uses the ``\r\f`` representation for a new line: it is a combination of line feed and return carriage. This is the Linux standard. The ``PHP_EOL`` constant depends on the running platform: its value is adapted to the underlying OS.

By convention, PHP files are expected to end on a new line.

It was possible to use new lines within a namespace name, until PHP 8.0. This is not possible anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html","name":"New Line","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:03 +0000","dateModified":"Sat, 08 Aug 2026 14:31:03 +0000","description":"A new-line \\n character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/New Line.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"new-line"}]}]}</script>
```php
<?php

    $string = "one new line
another new line\nAnd then another new line" . PHP_EOL

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php)**
## See Also

+ [Newline (\n) in PHP](https://ssojet.com/special-characters/newline-n-in-php)

## Related

+ [Line Feed](line-feed.html)
+ [Return Carriage](return-carriage.html)
+ [PHP Constants](php-constant.html)
+ [Carriage Return](carriage-return.html)
