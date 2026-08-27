# Byte
A byte is a unit of digital information storage that typically consists of 8 bits. It is the fundamental building block for representing data in computers. A byte can store values ranging from 0 to 255, in an unsigned 8-bit representation.

PHP uses bytes when manipulating strings. Bytes are characters, as long as the string uses ASCII representation, which is by default. Characters might be larger than a byte, and they become multi-bytes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html","name":"Byte","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A byte is a unit of digital information storage that typically consists of 8 bits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html"]}],"keywords":["string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Byte"},{"@type":"CreativeWork","name":"Byte | Definition & Facts | Britannica","url":"https:\/\/www.britannica.com\/technology\/byte"},{"@type":"CreativeWork","name":"What are Bits and Bytes?","url":"https:\/\/www.w3schools.com\/programming\/prog_bits_and_bytes.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"byte"}]}]}</script>
```php
<?php

    $string = abcd;

    echo strlen($string); // 4

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Byte)**
## See Also

+ [Byte | Definition & Facts | Britannica](https://www.britannica.com/technology/byte)
+ [What are Bits and Bytes?](https://www.w3schools.com/programming/prog_bits_and_bytes.php)

## Related

+ [Character](character.html)
+ [Multi-byte](multi-byte.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
