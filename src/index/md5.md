# Message Digest Algorithm 5 (MD5)
MD5 is a hash function, that produce a 128-bit footprint for a value. 

MD5 was used a lot for secure hashing and control. Nowadays, it may be useful for hashing and comparing data, though it is not considered secure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/md5.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/md5.html","name":"Message Digest Algorithm 5 (MD5)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"MD5 is a hash function, that produce a 128-bit footprint for a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Message Digest Algorithm 5 (MD5).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Message Digest Algorithm 5 (MD5)"}]}]}</script>
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

+ [Cryptography](cryptography.html)
+ [Hashing](hashing.html)
+ [Checksum](checksum.html)
+ [Crack](crack.html)
+ [Weak Cryptography](weak-cryptography.html)
