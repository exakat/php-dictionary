# Cryptographic Hash
A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert.

Some famous algorithms:  ``MD5``,  ``SHA1``,  ``SHA256``,  ``HAVAL``,  ``Bcrypt``.

Other algorithms include  ``crc32()``, though it is not considered a cryptography. 

While the extension ``hash `` only process hashes, there are other extensions which offer these features:  ``openssl``, ``sodium `` and  ``password hashing``. ``Mhash`` and ``mcrypt`` are older PHP extensions, which are now discontinued.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html","name":"Cryptographic Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cryptographic Hash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash-crypto"}]}]}</script>
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
    // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3

?>
```

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [Cryptographic hash function](https://en.wikipedia.org/wiki/Cryptographic_hash_function)

## Related

+ [hash() Function](hash-function.html)
+ [Hash](hash.html)
+ [Array, []](array.html)
+ [Map](map.html)
+ [Crack](crack.html)
+ [hash\_equals()](hash_equals.html)
+ [One-Time Password (OTP)](otp.html)
