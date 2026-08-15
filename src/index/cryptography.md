# Cryptography
Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native crypto features, like ``hash()`` and ``crypt()``, and also extensions, such as ``openssl`` or ``sodium``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html","name":"Cryptography","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cryptography.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cryptography"}]}]}</script>
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

?>
```

**[Documentation](https://www.php.net/manual/en/refs.crypto.php)**
## Related

+ [libsodium](libsodium.html)
+ [Message Digest Algorithm 5 (MD5)](md5.html)
+ [OpenSSL](openssl.html)
+ [Weak Cryptography](weak-cryptography.html)
+ [Algorithm](algorithm.html)
+ [Asymmetric Cryptography](asymmetric-cryptography.html)
+ [Random](random.html)
+ [Secret](secret.html)
+ [HMAC](hmac.html)
+ [One-Time Password (OTP)](otp.html)
+ [Privacy](privacy.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
