# American Standard Code for Information Interchange (ASCII)
ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number, or code, to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html","name":"American Standard Code for Information Interchange (ASCII)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:29:30 +0000","dateModified":"Mon, 20 Jul 2026 08:29:30 +0000","description":"ASCII is a character encoding standard used to represent text in computers and electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/American Standard Code for Information Interchange (ASCII).html"]}],"keywords":["acronym","encoding"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/ASCII"},{"@type":"CreativeWork","name":"Converting to and from ASCII","url":"http:\/\/www.hackingwithphp.com\/4\/7\/3\/converting-to-and-from-ascii"},{"@type":"CreativeWork","name":"A Guide to PHP\u2019s chr() Function: Working with ASCII","url":"https:\/\/clouddevs.com\/php\/chr-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ascii"}]}]}</script>
```php
<?php

$string = 'abdc';

echo ord($string[1]); // b = 98

echo chr(100); // d

?>
```

**[Documentation](https://en.wikipedia.org/wiki/ASCII)**
## See Also

+ [Converting to and from ASCII](http://www.hackingwithphp.com/4/7/3/converting-to-and-from-ascii)
+ [A Guide to PHP’s chr() Function: Working with ASCII](https://clouddevs.com/php/chr-function/)

## Related

+ [Byte](byte.html)
+ [Character](character.html)
+ [Carriage Return](carriage-return.html)
+ [Line Feed](line-feed.html)
+ [Multi-byte](multi-byte.html)
+ [String Increment](string-increment.html)
