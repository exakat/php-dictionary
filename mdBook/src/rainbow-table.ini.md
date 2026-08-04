# Rainbow Table
A rainbow table is a precomputed table used to reverse cryptographic hash functions, mainly to recover plaintext passwords from their hash. Instead of hashing every candidate password on demand, an attacker precomputes long chains of hash and reduction operations, keeps only the endpoints, and can then look up a captured hash in a fraction of the time a brute-force search would take, at the cost of a large upfront computation and storage effort.

Rainbow tables are defeated by salting: prefixing or suffixing every password with a random, per-user value before hashing. This forces an attacker to build a distinct table for every possible salt, which makes the precomputation cost prohibitive. This is precisely why ``password_hash()`` salts automatically, and why raw ``md5()`` or ``sha1()`` should never be used to store passwords.
```php
<?php

    // password_hash() salts automatically: a rainbow table cannot help here
    $hash = password_hash('correct horse battery staple', PASSWORD_DEFAULT);

    // unsalted hash: vulnerable to a lookup in a precomputed rainbow table
    $unsafeHash = md5('correct horse battery staple');

?>
```

Related : [Hash Table](Hash Table), [Cryptographic Hash](Cryptographic Hash), [Password API](Password API), [Secure Hash Algorithm (SHA)](Secure Hash Algorithm (SHA)), [Argon2](Argon2)
