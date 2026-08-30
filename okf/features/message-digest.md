---
type: "concept"
title: "Message Digest"
description: "A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message."
resource: "https://www.php.net/manual/en/book.hash.php"
tags: ["security", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Message Digest

A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message. The term comes from the ``MD`` family of algorithms, ``MD2``, ``MD4`` and ``MD5``, but it is now used generically for the result of any cryptographic hash.

A message digest acts as a fingerprint: it is small, deterministic, and any change to the original message, even a single bit, produces a completely different digest. This makes digests useful to detect tampering, verify downloads, and sign data.

Unlike a checksum, which mainly targets accidental corruption, a message digest is designed to resist deliberate manipulation: it should be computationally infeasible to find two different messages producing the same digest, an event called a collision, or to reconstruct a message from its digest alone.

Message digests are produced with the ``hash()`` function, or its dedicated shortcuts such as ``md5()`` and ``sha1()``. Older algorithms like ``MD5`` and ``SHA1`` are now considered broken for security purposes, and ``SHA256`` or better should be preferred.

```php
<?php

    // generic access, through the hash extension
    echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');

    // dedicated shortcut functions
    echo md5('The quick brown fox jumped over the lazy dog.');
    echo sha1('The quick brown fox jumped over the lazy dog.');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.hash.php](https://www.php.net/manual/en/book.hash.php)

## See Also
- [Cryptographic hash function](https://en.wikipedia.org/wiki/Cryptographic_hash_function)

## Related
- [Hashing](/features/hashing.md)
- [Hash](/features/hash.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Message Digest Algorithm 5 (MD5)](/features/md5.md)
- [Secure Hash Algorithm (SHA)](/features/sha.md)
- [Checksum](/features/checksum.md)
- [Cryptography](/features/cryptography.md)
- [Weak Cryptography](/features/weak-cryptography.md)
- [Digital Signature](/features/digital-signature.md)

