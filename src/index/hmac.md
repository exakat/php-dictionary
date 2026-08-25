# HMAC
HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions. It combines a secret key with the message to produce a fixed-size digest, providing both data integrity and authenticity.

HMAC is defined in RFC 2104 and is widely used in API authentication, JWT signatures, and webhook verification.

HMAC is computed with ``hash_hmac()``, which accepts a hashing algorithm, the message, and a secret key.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hmac.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hmac.html","name":"HMAC","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:52:54 +0000","dateModified":"Fri, 03 Jul 2026 07:52:54 +0000","description":"HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hmac.html"]}],"alternateName":["hash-based-message-authentication-code"],"keywords":["security","cryptography","acronym","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jwt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash_equals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.hash-hmac.php"},{"@type":"CreativeWork","name":"RFC 2104 - HMAC: Keyed-Hashing for Message Authentication","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc2104"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hmac"}]}]}</script>
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

+ [Cryptography](cryptography.html)
+ [Hash](hash.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Algorithm](algorithm.html)
+ [hash\_equals()](hash_equals.html)
+ [One-Time Password (OTP)](otp.html)
