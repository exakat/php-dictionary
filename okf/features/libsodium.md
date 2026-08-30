---
type: "PHP Feature"
title: "libsodium"
description: "Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more."
resource: "https://libsodium.gitbook.io/doc/"
tags: ["cryptography"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# libsodium

Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.

```php
<?php
//Generate a random key for sodium_crypto_auth
$key = sodium_crypto_auth_keygen();

?>
```

## Documentation
- [https://libsodium.gitbook.io/doc/](https://libsodium.gitbook.io/doc/)

## See Also
- [libsodium on github](https://github.com/jedisct1/libsodium.git)

## Related
- [Cryptography](/features/cryptography.md)
- [OpenSSL](/features/openssl.md)

