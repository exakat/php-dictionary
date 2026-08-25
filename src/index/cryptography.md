# Cryptography
Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native cryptographic features, like ``hash()`` and ``crypt()``, and also extensions, such as ``openssl`` or ``sodium``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html","name":"Cryptography","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"]}],"alternateName":["crypto"],"keywords":["security","algorithm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/libsodium.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/md5.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openssl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/secret.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hmac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/refs.crypto.php"},{"@type":"CreativeWork","name":"OWASP Cryptographic Storage Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Cryptographic_Storage_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"PHP: OpenSSL","url":"https:\/\/www.php.net\/manual\/en\/book.openssl.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cryptography"}]}]}</script>
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

?>
```

**[Documentation](https://www.php.net/manual/en/refs.crypto.php)**
## See Also

+ [OWASP Cryptographic Storage Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cryptographic_Storage_Cheat_Sheet.html)
+ [PHP: OpenSSL](https://www.php.net/manual/en/book.openssl.php)

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
