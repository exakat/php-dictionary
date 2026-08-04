# To Decrypt
To decrypt is to apply a data transformation on encrypted data to access the original and readable information. Usually, the transformation involves a key. That key may be public or private.

Decrypting data may be done after the transit of information, or its storage, in a database. In both case, privacy is critical.

The opposite to crypt is to crypt, when it is a legit operation. The evil equivalent to decrypt is to crack, when the secrets have been forced by any mean.
```php
<?php

    // Encryption
    $key = openssl_random_pseudo_bytes(32); // 256-bit key
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    
    $plaintext = 'PHP rocks';
    $ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    $encrypted = base64_encode($iv . $ciphertext);
    
    // Decryption
    $decoded = base64_decode($encrypted);
    $iv = substr($decoded, 0, openssl_cipher_iv_length('aes-256-cbc'));
    $ciphertext = substr($decoded, openssl_cipher_iv_length('aes-256-cbc'));
    $decrypted = openssl_decrypt($ciphertext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    
    echo 'Encrypted: ' . $encrypted . PHP_EOL;
    echo 'Decrypted: ' . $decrypted . PHP_EOL;

?>
```

Related : [Asymmetric Cryptography](Asymmetric Cryptography), [To Crypt](To Crypt), [Crack](Crack), [Convert](Convert)
