# Cryptography
Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native crypto features, like ``hash()`` and ``crypt()``, and also extensions, such as ``openssl`` or ``sodium``.
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

?>
```

Related : [libsodium](libsodium), [Message Digest Algorithm 5 (MD5)](Message Digest Algorithm 5 (MD5)), [OpenSSL](OpenSSL), [Weak Cryptography](Weak Cryptography), [Algorithm](Algorithm), [Asymmetric Cryptography](Asymmetric Cryptography), [Random](Random), [Secret](Secret), [HMAC](HMAC), [One-Time Password (OTP)](One-Time Password (OTP)), [Privacy](Privacy), [Random\CryptoSafeEngine](Random\CryptoSafeEngine)
