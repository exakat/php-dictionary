# mcrypt Extension
``mcrypt`` is a PHP extension that provides access to the mcrypt library. It provides a variety of cryptographic algorithms. 

``mcrypt`` was deprecated in version 7.1 and removed in version 7.2. It is recommended to use ``sodium`` or ``openssl`` instead.
```php
<?php

    $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");

    $key_size =  strlen($key);
    echo "Key size: " . $key_size . "\n";
    
    $plaintext = "This string was AES-256 / CBC / ZeroBytePadding encrypted.";

    # create a random IV to use with CBC encoding
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                 $plaintext, MCRYPT_MODE_CBC, $iv);

?>
```

## See Also

+ [ext/sodium](https://www.php.net/manual/en/book.sodium.php)
+ [ext/openssl](https://www.php.net/manual/en/book.openssl.php)

Related : [libsodium](libsodium), [OpenSSL](OpenSSL)
