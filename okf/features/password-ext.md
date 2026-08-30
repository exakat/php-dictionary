---
type: "PHP Feature"
title: "Password API"
description: "The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner."
resource: "https://www.php.net/manual/en/ref.password.php"
tags: ["password", "hashing"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Password API

The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.

```php
<?php

    echo password_hash('PHP is alive', PASSWORD_DEFAULT);

?>
```

## Documentation
- [https://www.php.net/manual/en/ref.password.php](https://www.php.net/manual/en/ref.password.php)

## See Also
- [PHP and Password Hashing: Securely Storing and Verifying Passwords](https://reintech.io/blog/php-password-hashing-securely-storing-verifying-passwords)

## Related
- [Secret](/features/secret.md)
- [Privacy](/features/privacy.md)
- [Hash](/features/hash.md)
- [Password](/features/password.md)
- [Passphrase](/features/passphrase.md)

