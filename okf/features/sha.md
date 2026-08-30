---
type: "PHP Feature"
title: "Secure Hash Algorithm (SHA)"
description: "Secure Hash Algorithm, or SHA, is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest."
resource: "https://www.php.net/manual/en/function.hash.php"
tags: ["cryptography", "algorithm", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Secure Hash Algorithm (SHA)

Secure Hash Algorithm, or SHA, is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest.

Key properties

+ Deterministic: same input gives the same output
+ One-way: it is not possible to go back to the original data, unless may be with brute-force or rainbow tables
+ Collision resistant: it is hard to find two inputs with the same hash
+ Fast to compute

Common SHA versions

+ SHA-1: a 160-bit hash. It is now considered insecure and should not be used anymore
+ SHA-2:

  . SHA-224
  . SHA-256, the most common
  . SHA-384
  . SHA-512

+ SHA-3: future version

The SHA hashes re commonly used for password hashing and storage, although it is replaced by more modern methods, like bcrypt, file integrity check, signature, git commits with SHA-1.

```php
<?php

    // recommended SHA256 for password
    password_hash($password, PASSWORD_DEFAULT);

    // raw SHA256 
    echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
    

?>
```

## Documentation
- [https://www.php.net/manual/en/function.hash.php](https://www.php.net/manual/en/function.hash.php)

## See Also
- [SHA1](https://datatracker.ietf.org/doc/html/rfc3174)

## Related
- [git](/features/git.md)
- [Hash](/features/hash.md)
- [Checksum](/features/checksum.md)
- [Crack](/features/crack.md)
- [Revision](/features/revision.md)

