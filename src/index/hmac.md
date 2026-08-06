# HMAC
HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions. It combines a secret key with the message to produce a fixed-size digest, providing both data integrity and authenticity.

HMAC is defined in RFC 2104 and is widely used in API authentication, JWT signatures, and webhook verification.

HMAC is computed with ``hash_hmac()``, which accepts a hashing algorithm, the message, and a secret key.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hmac.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hmac.html","name":"HMAC","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:52:54 +0000","dateModified":"Fri, 03 Jul 2026 07:52:54 +0000","description":"HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/HMAC.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $key     = 'secret-key';
    $message = 'important data';
    
    $hmac = hash_hmac('sha256', $message, $key);
    
    echo $hmac; // 64-character hexadecimal string

?>
```

**[Documentation](https://www.php.net/manual/en/function.hash-hmac.php)**
## See Also

+ [RFC 2104 - HMAC: Keyed-Hashing for Message Authentication](https://datatracker.ietf.org/doc/html/rfc2104)

## Related

+ [Cryptography](cryptography.ini.html)
+ [Hash](hash.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [Algorithm](algorithm.ini.html)
+ [hash\_equals()](hash_equals.ini.html)
+ [One-Time Password (OTP)](otp.ini.html)
