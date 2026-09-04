# Hexadecimal Integer
Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format: ``hexdec()``, ``dechex()`` and ``base_convert()``, from ten to sixteen, and then, with an arbitrary base, up to 36.

PHP also has special syntax for binary and octal numbers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html","name":"Hexadecimal Integer","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"Hexadecimal integers are integers with an hexadecimal representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html"]}],"alternateName":["hexadecimal"],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/octal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.integer.php"},{"@type":"CreativeWork","name":"Hexadecimal on Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Hexadecimal"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hexadecimal-integer"}]}]}</script>
```php
<?php

    $twenty    = 0x14;
    $twentyToo = 20;
    
    $i = "\x69"; // i is the 105 ASCII code
    $i = 'i';

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## See Also

+ [Hexadecimal on Wikipedia](https://en.wikipedia.org/wiki/Hexadecimal)

## Related

+ [Binary Integer](binary-integer.html)
+ [Octal Integer](octal-integer.html)
+ [Floating Point Numbers](float.html)
+ [Base](base.html)
