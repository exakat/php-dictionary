# Non-numeric
A non-numeric string is a string that can't be converted to a number without difficult choices.

When forced to a number, such string emits a warning, unless hidden with cast or noscream ``@`` operator.

A string may be only constituted of digits, from 0 to 9. It might be converted to a float or to ``INF``, depending on its size. In arrays, when used as an index, a very long string is kept as a string, and it is not converted to integer.

A string may be considered as ``is_numeric()`` when it is built with digits, whatever its size. In fact, when such a string is converted to float, it might go beyond the largest PHP float, and become ``INF``: this constant is of type ``float``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-numeric.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-numeric.html","name":"Non-numeric","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:12 +0000","dateModified":"Tue, 11 Aug 2026 20:59:12 +0000","description":"A non-numeric string is a string that can't be converted to a number without difficult choices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-numeric.html"]}],"keywords":["integer","decimal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/noscream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-numeric.php"},{"@type":"CreativeWork","name":"Remove All Non-Numeric Characters from String using PHP","url":"https:\/\/lindevs.com\/code-snippets\/remove-all-non-numeric-characters-from-string-using-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"non-numeric"}]}]}</script>
```php
<?php

    $string = '123';
    $integer = (int) $string; // 123
    
    $string = '12.3E4';
    $float = (float) $string; // 123000
    
    $nonNumeric = '12a3';
    $integer = (int) $string; // 12

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-numeric.php)**
## See Also

+ [Remove All Non-Numeric Characters from String using PHP](https://lindevs.com/code-snippets/remove-all-non-numeric-characters-from-string-using-php)

## Related

+ [@, No Scream Operator](noscream.html)
+ [Cast Operator](cast.html)
+ [Floating Point Numbers](float.html)
+ [INF](inf.html)
