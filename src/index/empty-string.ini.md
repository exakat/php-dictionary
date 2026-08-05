# Empty String
The empty string is a string without any content. It may be build with single quotes, double quotes or the Heredoc and NowDoc syntaxes.

The empty string is the neutral element for concatenation: concatenating an empty string to another string does not change the latter.

The empty string may be used as error report: for example, ``substr()`` returns an empty string when the offset is beyong the string range.

The empty string often serves as a default value, for properties and variables.

Comparisons between ``''`` and other falsy values, such as 0 changed with PHP 8.0: it was true and became false.

The empty string is falsy: it is converted to the ``false`` boolean when implicit conversion is need, such as in a condition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/empty-string.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/empty-string.ini.html","name":"Empty String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:16:48 +0000","dateModified":"Sun, 02 Aug 2026 06:16:48 +0000","description":"The empty string is a string without any content","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Empty String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $emptyString1 = '';  // single quote
    $emptyString2 = "";  // double quote
    $emptyString3 = <<<STRING
STRING;
    $emptyString4 = <<<'STRING'
STRING;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Empty_string)**
## Related

+ [String](string.ini.html)
+ [Heredocs](heredoc.ini.html)
+ [Nowdocs](nowdoc.ini.html)
+ [Falsy](falsy.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [str\_contains()](str_contains.ini.html)
+ [zero](zero.ini.html)
