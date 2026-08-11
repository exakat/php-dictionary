# American Standard Code for Information Interchange (ASCII)
ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number, or code, to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html","name":"American Standard Code for Information Interchange (ASCII)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:29:30 +0000","dateModified":"Mon, 20 Jul 2026 08:29:30 +0000","description":"ASCII is a character encoding standard used to represent text in computers and electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/American Standard Code for Information Interchange (ASCII).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ascii"}]}]}</script>
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
