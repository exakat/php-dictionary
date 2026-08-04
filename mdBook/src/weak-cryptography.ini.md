# Weak Cryptography
A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data. This makes it easier for attackers to break encryption, steal data, or compromise systems.

Weak cryptography refers to the use of:

+ Outdated algorithms, such as MD5, SHA-1, DES, RC4
+ Short or predictable keys, such as 40-bit encryption, hardcoded keys
+ Insecure protocols, such as SSLv2, SSLv3, early TLS versions
+ Poor randomness, such as using ``rand()`` instead of ``random\random_bytes()``
+ Improper implementations, such as ECB mode in block ciphers, custom crypto.
## See Also

+ [PHP : Weak mode for encrypting algorithm](https://derscanner.com/vulnerability-database/PHP-:-Weak-mode-for-encrypting-algorithm)
+ [Do not use a weak hash algorithm](https://docs.datadoghq.com/fr/security/code_security/static_analysis/static_analysis_rules/php-security/weak-hash-algorithm/)

Related : [Cryptography](Cryptography), [Message Digest Algorithm 5 (MD5)](Message Digest Algorithm 5 (MD5)), [Vulnerability](Vulnerability), [Crack](Crack), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST))
