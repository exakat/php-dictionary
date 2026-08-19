# Digital Signature
A digital signature is a method to ensure that a message was sent by a specific recipient. It uses mathematical methods to combine the original message, plain text or not, with a private key, to produce a piece of data which may be verified later with the public key. Then, the pair of private key and public key gives a high level of confidence that the message was coming from the known sender.

PHP can sign data with ``openssl`` and ``sodium`` extensions. 

A checksum can be considered a signature without a private key: it computes a short version of a file, and is difficult to reproduce without the original data. Any attempt at modifying the original data can then be detected, although the checksum itself has now to be trusted.

A signature is distinct from the sign of a number, ``+`` or ``-``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html","name":"Digital Signature","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:37 +0000","dateModified":"Wed, 19 Aug 2026 06:47:37 +0000","description":"A digital signature is a method to ensure that a message was sent by a specific recipient","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Digital Signature.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-signature.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signature.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Digital_signature"},{"@type":"CreativeWork","name":"How to Explain Public-Key Cryptography and Digital Signatures to Non-Techies","url":"https:\/\/auth0.com\/blog\/how-to-explain-public-key-cryptography-digital-signatures-to-anyone\/"},{"@type":"CreativeWork","name":"Public Key Signature: What It Is & Why It's Everywhere","url":"https:\/\/www.thesslstore.com\/blog\/public-key-signature\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"digital-signature"}]}]}</script>
```php
<?php

    function foo(string $message): string {

        // adapted from the PHP manual
        // fetch private key from file and ready it
        $pkeyid = openssl_pkey_get_private(file://src/openssl-0.9.6/php/sign/key.pem);

        // compute signature
        openssl_sign($message, $signature, $pkeyid);

        // free the key from memory
        openssl_free_key($pkeyid);        
        
        // This returns the signature of the message for 'php' user.
        // It may be checked with the public key
        return $signature;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Digital_signature)**
## See Also

+ [How to Explain Public-Key Cryptography and Digital Signatures to Non-Techies](https://auth0.com/blog/how-to-explain-public-key-cryptography-digital-signatures-to-anyone/)
+ [Public Key Signature: What It Is & Why It's Everywhere](https://www.thesslstore.com/blog/public-key-signature/)

## Related

+ [Method Signature](method-signature.html)
+ [Signature](signature.html)
+ [Sign](sign.html)
+ [Checksum](checksum.html)
