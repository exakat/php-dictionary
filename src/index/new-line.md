# New Line
A new-line ``\n`` character. It may be represented by this string sequence, or an actual new line, within a string, or, also by the ``PHP_EOL`` native constant. 

PHP uses the ``\r\f`` representation for a new line: it is a combinaison of line feed and return carriage. This is the Linux standard. The ``PHP_EOL`` constant depends on the running platform: its value is adapted to the underlying OS.

By convention, PHP files are expected to end on a new line.

It was possible to use new lines within a namespace name, until PHP 8.0. This is not possible anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new-line.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new-line.html","name":"New Line","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:40 +0000","dateModified":"Fri, 19 Jun 2026 21:25:40 +0000","description":"A new-line ``\\n`` character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/New Line.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Line Feed](line-feed.ini.html)
+ [Return Carriage](return-carriage.ini.html)
+ [PHP Constants](php-constant.ini.html)
+ [Carriage Return](carriage-return.ini.html)
