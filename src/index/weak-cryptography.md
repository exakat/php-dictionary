# Weak Cryptography
A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data. This makes it easier for attackers to break encryption, steal data, or compromise systems.

Weak cryptography refers to the use of:

+ Outdated algorithms, such as MD5, SHA-1, DES, RC4
+ Short or predictable keys, such as 40-bit encryption, hardcoded keys
+ Insecure protocols, such as SSLv2, SSLv3, early TLS versions
+ Poor randomness, such as using ``rand()`` instead of ``random\random_bytes()``
+ Improper implementations, such as ECB mode in block ciphers, custom crypto.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weak-cryptography.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/weak-cryptography.html","name":"Weak Cryptography","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:31:43 +0000","dateModified":"Mon, 29 Jun 2026 09:31:43 +0000","description":"A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Weak Cryptography.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://owasp.org/www-project-top-ten/2017/A3_2017-Sensitive_Data_Exposure)**
## See Also

+ [PHP : Weak mode for encrypting algorithm](https://derscanner.com/vulnerability-database/PHP-:-Weak-mode-for-encrypting-algorithm)
+ [Do not use a weak hash algorithm](https://docs.datadoghq.com/fr/security/code_security/static_analysis/static_analysis_rules/php-security/weak-hash-algorithm/)

## Related

+ [Cryptography](cryptography.ini.html)
+ [Message Digest Algorithm 5 (MD5)](md5.ini.html)
+ [Vulnerability](vulnerability.ini.html)
+ [Crack](crack.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
