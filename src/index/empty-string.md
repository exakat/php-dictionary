# Empty String
The empty string is a string without any content. It may be built with single quotes, double quotes or the Heredoc and NowDoc syntaxes.

The empty string is the neutral element for concatenation: concatenating an empty string to another string does not change the latter.

The empty string may be used as an error report: for example, ``substr()`` returns an empty string when the offset is beyond the string range.

The empty string often serves as a default value, for properties and variables.

Comparisons between ``''`` and other falsy values, such as ``0``, changed with PHP 8.0: it was true and became false.

The empty string is falsy: it is converted to the ``false`` boolean when implicit conversion is needed, such as in a condition.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty-string.html","name":"Empty String","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:13 +0000","dateModified":"Tue, 11 Aug 2026 14:42:13 +0000","description":"The empty string is a string without any content","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty-string.html"]}],"keywords":["falsy"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nowdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/falsy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_put_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Empty_string"},{"@type":"CreativeWork","name":"Strings","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php"},{"@type":"CreativeWork","name":"Comparison operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"empty-string"}]}]}</script>
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
## See Also

+ [Strings](https://www.php.net/manual/en/language.types.string.php)
+ [Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)

## Related

+ [String](string.html)
+ [Heredocs](heredoc.html)
+ [Nowdocs](nowdoc.html)
+ [Falsy](falsy.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [str\_contains()](str_contains.html)
+ [zero](zero.html)
