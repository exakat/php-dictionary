# American Standard Code for Information Interchange (ASCII)
ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number, or code, to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ascii.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ascii.html","name":"American Standard Code for Information Interchange (ASCII)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:29:30 +0000","dateModified":"Mon, 20 Jul 2026 08:29:30 +0000","description":"ASCII is a character encoding standard used to represent text in computers and electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/American Standard Code for Information Interchange (ASCII).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Byte](byte.ini.html)
+ [Character](character.ini.html)
+ [Carriage Return](carriage-return.ini.html)
+ [Line Feed](line-feed.ini.html)
+ [Multi-byte](multi-byte.ini.html)
+ [String Increment](string-increment.ini.html)
