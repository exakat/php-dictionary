# libsodium
Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/libsodium.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/libsodium.html","name":"libsodium","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/libsodium.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
//Generate a random key for sodium_crypto_auth
$key = sodium_crypto_auth_keygen();

?>
```

**[Documentation](https://libsodium.gitbook.io/doc/)**
## See Also

+ [libsodium on github](https://github.com/jedisct1/libsodium.git)

## Related

+ [Cryptography](cryptography.ini.html)
+ [OpenSSL](openssl.ini.html)
