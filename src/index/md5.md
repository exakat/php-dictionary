# Message Digest Algorithm 5 (MD5)
MD5 is a hash function, that produce a 128-bit footprint for a value. 

MD5 was used a lot for secure hashing and control. Nowadays, it may be useful for hashing and comparing data, though it is not considered secure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/md5.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/md5.html","name":"Message Digest Algorithm 5 (MD5)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"MD5 is a hash function, that produce a 128-bit footprint for a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Message Digest Algorithm 5 (MD5).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

//Generate a MD5 hash with the history md5() native function
echo hash('md5', 'Le rapide goupil brun sauta par dessus le chien paresseux.');

//Generate a MD5 hash with the history md5() native function
print md5("Some text.")

?>
```

**[Documentation](https://www.php.net/manual/fr/function.hash.php)**
## See Also

+ [PHP md5() function](https://www.php.net/manual/en/function.md5.php)

## Related

+ [Cryptography](cryptography.ini.html)
+ [Hashing](hashing.ini.html)
+ [Checksum](checksum.ini.html)
+ [Crack](crack.ini.html)
+ [Weak Cryptography](weak-cryptography.ini.html)
