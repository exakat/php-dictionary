---
type: "PHP Feature"
title: "hash_equals()"
description: "``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ."
resource: "https://www.php.net/manual/en/function.hash-equals.php"
tags: ["native function", "security", "cryptography"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# hash_equals()

``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ.

It is specifically designed to prevent timing attacks: a regular ``==`` or ``===`` comparison short-circuits as soon as it finds a differing byte, leaking information about the compared value through the response time. ``hash_equals()`` always takes the same amount of time, making it safe for security-sensitive comparisons such as comparing password hashes, HMAC signatures, CSRF tokens, or API keys.

The function returns ``true`` if both strings are equal, ``false`` otherwise. If the two arguments are not strings, a ``TypeError`` is raised.

A common mistake is to compare hashes with ``===``, which is semantically correct but vulnerable to timing attacks. ``hash_equals()`` should be used whenever the compared value could be guessed by an attacker through repeated requests.

```php
<?php

    $expected = hash_hmac('sha256', $message, $secret);
    $received = $_POST['signature'];

    // Vulnerable: === leaks timing information
    if ($expected === $received) {
        // ...
    }

    // Safe: constant-time comparison
    if (hash_equals($expected, $received)) {
        // ...
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.hash-equals.php](https://www.php.net/manual/en/function.hash-equals.php)

## See Also
- [Timing attacks explained](https://codahale.com/a-lesson-in-timing-attacks/)

## Related
- [Timing Attack](/features/timing-attack.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Authentication](/features/authentication.md)
- [Cross Site Request Forgery (CSRF)](/features/csrf.md)
- [Security](/features/security.md)
- [HMAC](/features/hmac.md)

## Details
- PHP since: 5.6

