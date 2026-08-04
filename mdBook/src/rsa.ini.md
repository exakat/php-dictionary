# RSA
RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of Cryptography.

RSA is a public-key cryptosystem, with a a public key, shared with everyone, and a private key, kept secret.
```php
<?php

// 1) Create a new private/public key pair
$config = [
    'private_key_bits' => 2048,
    'private_key_type' => OPENSSL_KEYTYPE_RSA,
];

$res = openssl_pkey_new($config);

// Export the private key
openssl_pkey_export($res, $privateKey);

// Extract the public key
$keyDetails = openssl_pkey_get_details($res);
$publicKey = $keyDetails['key'];

echo "Private Key:\n$privateKey\n\n";
echo "Public Key:\n$publicKey\n\n";

// 2) Encrypt a message
$data = 'Hello, RSA!';

// Encrypt with public key
openssl_public_encrypt($data, $encrypted, $publicKey);

// Encode for safe output/storage
$encryptedBase64 = base64_encode($encrypted);

echo "Encrypted:\n$encryptedBase64\n\n";
?>
```

## See Also

+ [openssl_public_encrypt](https://www.php.net/manual/en/function.openssl-public-encrypt.php)

Related : [Base 64 Encoding](Base 64 Encoding), [XXTEA](XXTEA)
