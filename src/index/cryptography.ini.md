# Cryptography
Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native crypto features, like ``hash()`` and ``crypt()``, and also extensions, such as ``openssl`` or ``sodium``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cryptography.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cryptography.ini.html","name":"Cryptography","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:58:51 +0000","dateModified":"Thu, 09 Jul 2026 08:58:51 +0000","description":"Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cryptography.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

?>
```

**[Documentation](https://www.php.net/manual/en/refs.crypto.php)**
## Related

+ [libsodium](libsodium.ini.html)
+ [Message Digest Algorithm 5 (MD5)](md5.ini.html)
+ [OpenSSL](openssl.ini.html)
+ [Weak Cryptography](weak-cryptography.ini.html)
+ [Algorithm](algorithm.ini.html)
+ [Asymmetric Cryptography](asymmetric-cryptography.ini.html)
+ [Random](random.ini.html)
+ [Secret](secret.ini.html)
+ [HMAC](hmac.ini.html)
+ [One-Time Password (OTP)](otp.ini.html)
+ [Privacy](privacy.ini.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.ini.html)
