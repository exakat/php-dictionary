# To Decrypt
To decrypt is to apply a data transformation on encrypted data to access the original and readable information. Usually, the transformation involves a key. That key may be public or private.

Decrypting data may be done after the transit of information, or its storage, in a database. In both case, privacy is critical.

The opposite to crypt is to crypt, when it is a legit operation. The evil equivalent to decrypt is to crack, when the secrets have been forced by any mean.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/decrypt.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/decrypt.html","name":"To Decrypt","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:03 +0000","dateModified":"Fri, 19 Jun 2026 21:24:03 +0000","description":"To decrypt is to apply a data transformation on encrypted data to access the original and readable information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/To Decrypt.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Encryption)**
## Related

+ [Asymmetric Cryptography](asymmetric-cryptography.ini.html)
+ [To Crypt](crypt.ini.html)
+ [Crack](crack.ini.html)
+ [Convert](convert.ini.html)
