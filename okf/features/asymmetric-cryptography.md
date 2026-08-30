---
type: "PHP Feature"
title: "Asymmetric Cryptography"
description: "Asymmetric cryptography, also called public-key cryptography, is a method of encrypting and authenticating data using two mathematically linked keys: a public key and a private key."
resource: "https://en.wikipedia.org/wiki/Public-key_cryptography"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Asymmetric Cryptography

Asymmetric cryptography, also called public-key cryptography, is a method of encrypting and authenticating data using two mathematically linked keys: a public key and a private key.

The method is build on three elements: 

+ The public key can be shared freely with anyone.
+ The private key is kept secret by its owner.
+ What one key encrypts, only the other can decrypt

RSA, ECC or Elliptic Curve, Diffie-Hellman and DSA are all asymmetric cryptography.

## Documentation
- [https://en.wikipedia.org/wiki/Public-key_cryptography](https://en.wikipedia.org/wiki/Public-key_cryptography)

## See Also
- [ext/openssl](https://www.php.net/manual/en/book.openssl.php)
- [ext/sodium](https://www.php.net/manual/en/book.sodium.php)

## Related
- [Cryptography](/features/cryptography.md)
- [To Crypt](/features/crypt.md)
- [To Decrypt](/features/decrypt.md)

## Details
- Extension: ext-sodium
- Extension: ext-openssl

