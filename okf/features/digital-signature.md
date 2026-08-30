---
type: "disambiguation"
title: "Digital Signature"
description: "A digital signature is a method to ensure that a message was sent by a specific recipient."
resource: "https://en.wikipedia.org/wiki/Digital_signature"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Digital Signature

A digital signature is a method to ensure that a message was sent by a specific recipient. It uses mathematical methods to combine the original message, plain text or not, with a private key, to produce a piece of data which may be verified later with the public key. Then, the pair of private key and public key gives a high level of confidence that the message was coming from the known sender.

PHP can sign data with ``openssl`` and ``sodium`` extensions. 

A checksum can be considered a signature without a private key: it computes a short version of a file, and is difficult to reproduce without the original data. Any attempt at modifying the original data can then be detected, although the checksum itself has now to be trusted.

A signature is distinct from the sign of a number, ``+`` or ``-``.

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

## Documentation
- [https://en.wikipedia.org/wiki/Digital_signature](https://en.wikipedia.org/wiki/Digital_signature)

## See Also
- [How to Explain Public-Key Cryptography and Digital Signatures to Non-Techies](https://auth0.com/blog/how-to-explain-public-key-cryptography-digital-signatures-to-anyone/)
- [Public Key Signature: What It Is & Why It's Everywhere](https://www.thesslstore.com/blog/public-key-signature/)

## Related
- [Method Signature](/features/method-signature.md)
- [Signature](/features/signature.md)
- [Sign](/features/sign.md)
- [Checksum](/features/checksum.md)

## Details
- Extension: ext-sodium
- Extension: ext-openssl

