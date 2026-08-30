---
type: "concept"
title: "Hashing"
description: "Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest."
resource: "https://www.php.net/manual/en/book.hash.php"
tags: ["concept", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hashing

Hashing is the process of running data through a hash function, to produce a fixed-size value called a hash, or digest.

A good hash function is fast, deterministic, and spreads its output evenly, so that different inputs rarely produce the same hash, an event called a collision.

Hashing serves several distinct purposes applications:

+ Integrity checks and checksums, with fast algorithms like ``crc32`` or ``md5``, to detect accidental corruption.
+ Lookup structures, where hashing a key gives its position in a hash table, the internal structure behind PHP arrays.
+ Password storage, with slow, salted algorithms designed to resist brute-force attacks, such as ``bcrypt`` or ``argon2``, via the ``password_hash()`` function.
+ Cryptographic fingerprints, with algorithms like the ``SHA`` family, to sign or verify data.

Hashing is one-way: a hash cannot be reversed to recover the original data. This distinguishes it from encryption, which is meant to be decrypted with a key.

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

## Documentation
- [https://www.php.net/manual/en/book.hash.php](https://www.php.net/manual/en/book.hash.php)

## See Also
- [Everything you need to know about hashing in PHP](https://www.php.net/manual/en/faq.passwords.php)

## Related
- [Hash](/features/hash.md)
- [hash() Function](/features/hash-function.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Hash Table](/features/hash-table.md)
- [Message Digest](/features/message-digest.md)
- [Checksum](/features/checksum.md)
- [Cryptography](/features/cryptography.md)
- [Password API](/features/password-ext.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [Crack](/features/crack.md)
- [Deterministic](/features/deterministic.md)
- [Weak Cryptography](/features/weak-cryptography.md)

