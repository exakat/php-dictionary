---
type: "acronym"
title: "HMAC"
description: "HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions."
resource: "https://www.php.net/manual/en/function.hash-hmac.php"
tags: ["security", "cryptography", "acronym", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HMAC

HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions. It combines a secret key with the message to produce a fixed-size digest, providing both data integrity and authenticity.

HMAC is defined in RFC 2104 and is widely used in API authentication, JWT signatures, and webhook verification.

HMAC is computed with ``hash_hmac()``, which accepts a hashing algorithm, the message, and a secret key.

```php
<?php

    $key     = 'secret-key';
    $message = 'important data';
    
    $hmac = hash_hmac('sha256', $message, $key);
    
    echo $hmac; // 64-character hexadecimal string

?>
```

## Documentation
- [https://www.php.net/manual/en/function.hash-hmac.php](https://www.php.net/manual/en/function.hash-hmac.php)

## See Also
- [RFC 2104 - HMAC: Keyed-Hashing for Message Authentication](https://datatracker.ietf.org/doc/html/rfc2104)

## Related
- [Cryptography](/features/cryptography.md)
- [Hash](/features/hash.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [Algorithm](/features/algorithm.md)
- [hash_equals()](/features/hash_equals.md)
- [One-Time Password (OTP)](/features/otp.md)

## Details
- Extension: ext-hash

