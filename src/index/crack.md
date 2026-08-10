# Crack
Cracking refers to breaking a security mechanism. Most commonly, it means recovering a plaintext password from its hash. Attackers crack hashes using:

+ Brute force: trying every possible input
+ Dictionary attacks: trying common words and known passwords
+ Rainbow tables: precomputed hash linked to plain-text mappings
+ Rule-based attacks: applying transformations like capitalisation, digit appending, ... to existing word lists

In any application, passwords must be stored using a strong, salted hashing algorithm such as ``bcrypt`` or Argon2. These algorithms are deliberately slow and include a random salt, making cracking computationally expensive and rendering rainbow tables useless.

Using weak algorithms such as MD5 or SHA-1 for passwords is a critical vulnerability, as they can be cracked rapidly with modern GPUs.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crack.html","name":"Crack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:40:38 +0000","dateModified":"Fri, 17 Jul 2026 08:40:38 +0000","description":"Cracking refers to breaking a security mechanism","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Crack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Crack"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.password-hash.php)**
## See Also

+ [OWASP Password Storage Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html)

## Related

+ [Password](password.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Weak Cryptography](weak-cryptography.html)
+ [Argon2](argon2.html)
+ [Message Digest Algorithm 5 (MD5)](md5.html)
+ [Secure Hash Algorithm (SHA)](sha.html)
+ [Timing Attack](timing-attack.html)
+ [To Crypt](crypt.html)
+ [To Decrypt](decrypt.html)
