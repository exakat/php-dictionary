# Cyclic Redundancy Check 32-bit (CRC32)
``CRC32`` stands for Cyclic Redundancy Check 32-bit. It is a hash function that produces a 32-bit, or 8-character hexadecimal, checksum or hash value from a given input, typically a sequence of bytes or a string. The primary purpose of CRC32 is error-checking and data integrity verification.

PHP calculates CRC32 values with the native ``crc32()`` function, and the ``hash()`` function, although with slight differences.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crc32.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crc32.html","name":"Cyclic Redundancy Check 32-bit (CRC32)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:56:16 +0000","dateModified":"Thu, 09 Jul 2026 08:56:16 +0000","description":"CRC32 stands for Cyclic Redundancy Check 32-bit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cyclic Redundancy Check 32-bit (CRC32).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"crc32"}]}]}</script>
```php
<?php
    
    $checksum = crc32("The quick brown fox jumped over the lazy dog.");
    printf("%u\n", $checksum);
    
    hash('crc32b', $str) === str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT);

?>
```

**[Documentation](https://www.php.net/manual/en/function.crc32.php)**
## See Also

+ [php hash('crc32') and crc32() return different value](https://stackoverflow.com/questions/40741707/php-hashcrc32-and-crc32-return-different-value)

## Related

+ [To Crypt](crypt.html)
+ [Hash](hash.html)
+ [Checksum](checksum.html)
