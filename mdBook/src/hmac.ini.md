# HMAC
HMAC, short for Hash-based Message Authentication Code, is a mechanism for message authentication using cryptographic hash functions. It combines a secret key with the message to produce a fixed-size digest, providing both data integrity and authenticity.

HMAC is defined in RFC 2104 and is widely used in API authentication, JWT signatures, and webhook verification.

HMAC is computed with ``hash_hmac()``, which accepts a hashing algorithm, the message, and a secret key.
```php
<?php

    $key     = 'secret-key';
    $message = 'important data';
    
    $hmac = hash_hmac('sha256', $message, $key);
    
    echo $hmac; // 64-character hexadecimal string

?>
```

## See Also

+ [RFC 2104 - HMAC: Keyed-Hashing for Message Authentication](https://datatracker.ietf.org/doc/html/rfc2104)

Related : [Cryptography](Cryptography), [Hash](Hash), [JSON Web Token (JWT)](JSON Web Token (JWT)), [Algorithm](Algorithm), [hash_equals()](hash_equals()), [One-Time Password (OTP)](One-Time Password (OTP))
