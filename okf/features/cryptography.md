---
type: "PHP Feature"
title: "Cryptography"
description: "Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior."
resource: "https://www.php.net/manual/en/refs.crypto.php"
tags: ["security", "algorithm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cryptography

Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native cryptographic features, like ``hash()`` and ``crypt()``, and also extensions, such as ``openssl`` or ``sodium``.

```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

?>
```

## Documentation
- [https://www.php.net/manual/en/refs.crypto.php](https://www.php.net/manual/en/refs.crypto.php)

## See Also
- [OWASP Cryptographic Storage Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cryptographic_Storage_Cheat_Sheet.html)
- [ext/openssl](https://www.php.net/manual/en/book.openssl.php)

## Related
- [libsodium](/features/libsodium.md)
- [Message Digest Algorithm 5 (MD5)](/features/md5.md)
- [OpenSSL](/features/openssl.md)
- [Weak Cryptography](/features/weak-cryptography.md)
- [Algorithm](/features/algorithm.md)
- [Asymmetric Cryptography](/features/asymmetric-cryptography.md)
- [Random](/features/random.md)
- [Secret](/features/secret.md)
- [HMAC](/features/hmac.md)
- [One-Time Password (OTP)](/features/otp.md)
- [Privacy](/features/privacy.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Hashing](/features/hashing.md)
- [Message Digest](/features/message-digest.md)
- [PRNG](/features/prng.md)
- [Pseudonymisation](/features/pseudonymisation.md)

