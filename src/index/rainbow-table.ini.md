# Rainbow Table
A rainbow table is a precomputed table used to reverse cryptographic hash functions, mainly to recover plaintext passwords from their hash. Instead of hashing every candidate password on demand, an attacker precomputes long chains of hash and reduction operations, keeps only the endpoints, and can then look up a captured hash in a fraction of the time a brute-force search would take, at the cost of a large upfront computation and storage effort.

Rainbow tables are defeated by salting: prefixing or suffixing every password with a random, per-user value before hashing. This forces an attacker to build a distinct table for every possible salt, which makes the precomputation cost prohibitive. This is precisely why ``password_hash()`` salts automatically, and why raw ``md5()`` or ``sha1()`` should never be used to store passwords.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rainbow-table.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rainbow-table.ini.html","name":"Rainbow Table","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:41 +0000","dateModified":"Mon, 13 Jul 2026 18:47:41 +0000","description":"A rainbow table is a precomputed table used to reverse cryptographic hash functions, mainly to recover plaintext passwords from their hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Rainbow Table.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // password_hash() salts automatically: a rainbow table cannot help here
    $hash = password_hash('correct horse battery staple', PASSWORD_DEFAULT);

    // unsalted hash: vulnerable to a lookup in a precomputed rainbow table
    $unsafeHash = md5('correct horse battery staple');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Rainbow_table)**
## Related

+ [Hash Table](hash-table.ini.html)
+ [Cryptographic Hash](hash-crypto.ini.html)
+ [Password API](password-ext.ini.html)
+ [Secure Hash Algorithm (SHA)](sha.ini.html)
+ [Argon2](argon2.ini.html)
