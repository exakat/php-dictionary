---
type: "PHP Feature"
title: "Crack"
description: "Cracking, also called password cracking or hash cracking, refers to breaking a security mechanism."
resource: "https://www.php.net/manual/en/function.password-hash.php"
tags: ["security", "cryptography"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Crack

Cracking, also called password cracking or hash cracking, refers to breaking a security mechanism. Most commonly, it means recovering a plaintext password from its hash. Attackers crack hashes using:

+ Brute force: trying every possible input
+ Dictionary attacks: trying common words and known passwords
+ Rainbow tables: precomputed hash linked to plain-text mappings
+ Rule-based attacks: applying transformations like capitalisation, digit appending, ... to existing word lists

In any application, passwords must be stored using a strong, salted hashing algorithm such as ``bcrypt`` or Argon2. These algorithms are deliberately slow and include a random salt, making cracking computationally expensive and rendering rainbow tables useless.

Using weak algorithms such as MD5 or SHA-1 for passwords is a critical vulnerability, as they can be cracked rapidly with modern GPUs.

```php
<?php

    // WRONG: MD5 is trivially crackable
    $hash = md5('password123'); // 482c811da5d5b4bc6d497ffa98491e38
    
    // CORRECT: use password_hash() — bcrypt with automatic salt
    $hash = password_hash('password123', PASSWORD_BCRYPT);
    
    // Verify
    if (password_verify('password123', $hash)) {
        echo 'Password is correct';
    }
    
    // Even stronger: Argon2id (PHP 7.3+)
    $hash = password_hash('password123', PASSWORD_ARGON2ID);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.password-hash.php](https://www.php.net/manual/en/function.password-hash.php)

## See Also
- [OWASP Password Storage Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html)

## Related
- [Password](/features/password.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Weak Cryptography](/features/weak-cryptography.md)
- [Argon2](/features/argon2.md)
- [Message Digest Algorithm 5 (MD5)](/features/md5.md)
- [Secure Hash Algorithm (SHA)](/features/sha.md)
- [Timing Attack](/features/timing-attack.md)
- [To Crypt](/features/crypt.md)
- [To Decrypt](/features/decrypt.md)

