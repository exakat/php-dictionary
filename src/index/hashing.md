# Hashing
Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest.

A good hash function is fast, deterministic, and spreads its output evenly, so that different inputs rarely produce the same hash, an event called a collision.

Hashing serves several distinct purposes applications:

+ Integrity checks and checksums, with fast algorithms like ``crc32`` or ``md5``, to detect accidental corruption.
+ Lookup structures, where hashing a key gives its position in a hash table, the internal structure behind PHP arrays.
+ Password storage, with slow, salted algorithms designed to resist brute-force attacks, such as ``bcrypt`` or ``argon2``, via the ``password_hash()`` function.
+ Cryptographic fingerprints, with algorithms like the ``SHA`` family, to sign or verify data.

Hashing is one-way: a hash cannot be reversed to recover the original data. This distinguishes it from encryption, which is meant to be decrypted with a key.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hashing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hashing.html","name":"Hashing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:51:55 +0000","dateModified":"Wed, 15 Jul 2026 13:51:55 +0000","description":"Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hashing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Hash](hash.ini.html)
+ [hash() Function](hash-function.ini.html)
+ [Cryptographic Hash](hash-crypto.ini.html)
+ [Hash Table](hash-table.ini.html)
+ [Message Digest](message-digest.ini.html)
+ [Checksum](checksum.ini.html)
+ [Cryptography](cryptography.ini.html)
+ [Password API](password-ext.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
+ [Crack](crack.ini.html)
+ [Deterministic](deterministic.ini.html)
+ [Weak Cryptography](weak-cryptography.ini.html)
