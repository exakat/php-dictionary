---
type: "concept"
title: "Cryptographic Hash"
description: "A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert."
resource: "https://www.php.net/manual/en/book.hash.php"
tags: ["concept", "extension", "animal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cryptographic Hash

A cryptographic hash is an algorithm which maps a string to a fixed sized string, with a method that is difficult or impossible to revert.

Some famous algorithms:  ``MD5``,  ``SHA1``,  ``SHA256``,  ``HAVAL``,  ``Bcrypt``.

Other algorithms include  ``crc32()``, though it is not considered a cryptography. 

While the extension ``hash `` only process hashes, there are other extensions which offer these features:  ``openssl``, ``sodium `` and  ``password hashing``. ``Mhash`` and ``mcrypt`` are older PHP extensions, which are now discontinued.

```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
    // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3

?>
```

## Documentation
- [https://www.php.net/manual/en/book.hash.php](https://www.php.net/manual/en/book.hash.php)

## See Also
- [Cryptographic hash function](https://en.wikipedia.org/wiki/Cryptographic_hash_function)

## Related
- [hash() Function](/features/hash-function.md)
- [Hash](/features/hash.md)
- [Array, []](/features/array.md)
- [Map](/features/map.md)
- [Crack](/features/crack.md)
- [hash_equals()](/features/hash_equals.md)
- [One-Time Password (OTP)](/features/otp.md)

