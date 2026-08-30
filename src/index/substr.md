# substr()
``substr()`` is a PHP native function that extracts a portion of a string, starting at a given position, for an optional given length.

A negative ``start`` counts from the end of the string, rather than the beginning. A negative ``length`` stops the extraction that many characters before the end of the string, rather than counting a number of characters to keep.

When ``start`` is beyond the length of the string, or ``length`` resolves to zero or a negative amount that consumes the whole remaining string, ``substr()`` returns an empty string, since PHP 8.0; before, it could return ``false``.

``substr()`` is byte-oriented: it counts bytes, not characters, which corrupts multi-byte strings such as UTF-8. ``mb_substr()`` should be used instead, whenever the string may contain non-ASCII characters.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/substr.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/substr.html","name":"substr()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:43:01 +0000","dateModified":"Fri, 28 Aug 2026 09:43:01 +0000","description":"substr() is a PHP native function that extracts a portion of a string, starting at a given position, for an optional given length","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/substr.html"]}],"keywords":["native function","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.substr.php"},{"@type":"CreativeWork","name":"PHP: mb_substr()","url":"https:\/\/www.php.net\/manual\/en\/function.mb-substr.php"},{"@type":"CreativeWork","name":"Substring - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Substring"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"substr"}]}]}</script>
```php
<?php

    substr('Hello World', 6);      // 'World'
    substr('Hello World', 0, 5);   // 'Hello'
    substr('Hello World', -5);     // 'World'
    substr('Hello World', 0, -6);  // 'Hello'
    substr('Hello', 10);           // '' (PHP 8+; was false before)

    // byte-oriented: mangles multi-byte characters
    substr('héllo', 0, 2);     // 'h' followed by half of the 'é' byte sequence
    mb_substr('héllo', 0, 2);  // 'hé'

?>
```

**[Documentation](https://www.php.net/manual/en/function.substr.php)**
## See Also

+ [PHP: mb_substr()](https://www.php.net/manual/en/function.mb-substr.php)
+ [Substring - Wikipedia](https://en.wikipedia.org/wiki/Substring)

## Related

+ [str\_contains()](str_contains.html)
+ [strpos](strpos.html)
+ [Multi-byte](multi-byte.html)
+ [array\_slice()](array_slice.html)
