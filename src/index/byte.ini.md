# Byte
A byte is a unit of digital information storage that typically consists of 8 bits. It is the fundamental building block for representing data in computers. A byte can store values ranging from 0 to 255, in an unsigned 8-bit representation.

PHP uses bytes when manipulating strings. Bytes are characters, as long as the string uses ASCII representation, which is by default. Characters might be larger than a byte, and they become multi-bytes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/byte.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/byte.ini.html","name":"Byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:39 +0000","dateModified":"Fri, 19 Jun 2026 21:25:39 +0000","description":"A byte is a unit of digital information storage that typically consists of 8 bits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $string = abcd;

    echo strlen($string); // 4

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Byte)**
## Related

+ [Character](character.ini.html)
+ [Multi-byte](multi-byte.ini.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.ini.html)
