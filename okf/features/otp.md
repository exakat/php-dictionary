---
type: "acronym"
title: "One-Time Password (OTP)"
description: "A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction."
resource: "https://www.php.net/manual/en/book.hash.php"
tags: ["security", "authentication", "acronym", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# One-Time Password (OTP)

A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction. Unlike static passwords, OTPs are generated dynamically and expire quickly, making them much more resistant to replay attacks.

There are two main OTP algorithms: ``TOTP``, Time-based One-Time Password RFC 6238, which generates a code based on the current time, and ``HOTP``, HMAC-based One-Time Password RFC 4226, which generates a code based on a counter.

TOTP is the standard used by authenticator apps such as Google Authenticator, Authy, and hardware tokens. Each code is typically 6 digits long and valid for 30 seconds.

OTP generation is commonly handled by libraries such as ``spomky-labs/otphp``, ``OTPHP`` in the Symfony ecosystem, or ``pragmarx/google2fa`` for Laravel applications.

```php
<?php

    use OTPHP\TOTP;
    
    $totp = TOTP::generate();
    echo 'Secret: ' . $totp->getSecret();
    echo 'Current OTP: ' . $totp->now();
    
    // Verify a code provided by the user
    $userCode = '123456';
    if ($totp->verify($userCode)) {
        echo 'Valid OTP';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.hash.php](https://www.php.net/manual/en/book.hash.php)

## See Also
- [RFC 6238 – TOTP](https://datatracker.ietf.org/doc/html/rfc6238)
- [RFC 4226 – HOTP](https://datatracker.ietf.org/doc/html/rfc4226)

## Related
- [Authentication](/features/authentication.md)
- [Multi-Factor Authentication (MFA)](/features/mfa.md)
- [Cryptography](/features/cryptography.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [HMAC](/features/hmac.md)
- [Nonce](/features/nonce.md)
- [Secret](/features/secret.md)
- [Password](/features/password.md)
- [Single Sign On (SSO)](/features/sso.md)

## Details
- Packagist: [spomky-labs/otphp](https://packagist.org/packages/spomky-labs/otphp)
- Packagist: [pragmarx/google2fa](https://packagist.org/packages/pragmarx/google2fa)

