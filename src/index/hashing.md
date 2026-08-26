# Hashing
Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest.

A good hash function is fast, deterministic, and spreads its output evenly, so that different inputs rarely produce the same hash, an event called a collision.

Hashing serves several distinct purposes applications:

+ Integrity checks and checksums, with fast algorithms like ``crc32`` or ``md5``, to detect accidental corruption.
+ Lookup structures, where hashing a key gives its position in a hash table, the internal structure behind PHP arrays.
+ Password storage, with slow, salted algorithms designed to resist brute-force attacks, such as ``bcrypt`` or ``argon2``, via the ``password_hash()`` function.
+ Cryptographic fingerprints, with algorithms like the ``SHA`` family, to sign or verify data.

Hashing is one-way: a hash cannot be reversed to recover the original data. This distinguishes it from encryption, which is meant to be decrypted with a key.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html","name":"Hashing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html"]}],"keywords":["concept","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-digest.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-cryptography.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.hash.php"},{"@type":"CreativeWork","name":"Everything you need to know about hashing in PHP","url":"https:\/\/www.php.net\/manual\/en\/faq.passwords.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hashing"}]}]}</script>
```php
<?php

    // fast, non-cryptographic hashing, for a lookup or checksum
    echo hash('crc32b', 'The quick brown fox jumped over the lazy dog.');

    // cryptographic hashing, for a fingerprint
    echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');

    // slow, salted hashing, for password storage
    echo password_hash('correct horse battery staple', PASSWORD_BCRYPT);

?>
```

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [Everything you need to know about hashing in PHP](https://www.php.net/manual/en/faq.passwords.php)

## Related

+ [Hash](hash.html)
+ [hash() Function](hash-function.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Hash Table](hash-table.html)
+ [Message Digest](message-digest.html)
+ [Checksum](checksum.html)
+ [Cryptography](cryptography.html)
+ [Password API](password-ext.html)
+ [Hash Comparisons](hash-comparison.html)
+ [Crack](crack.html)
+ [Deterministic](deterministic.html)
+ [Weak Cryptography](weak-cryptography.html)
