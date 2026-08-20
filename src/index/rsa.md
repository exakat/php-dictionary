# RSA
RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of cryptography.

RSA is a public-key cryptosystem, with a public key, shared with everyone, and a private key, kept secret.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rsa.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rsa.html","name":"RSA","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:36 +0000","dateModified":"Wed, 19 Aug 2026 06:47:36 +0000","description":"RSA is the Rivest\u2013Shamir\u2013Adleman algorithm, a widely used method of encryption in the field of cryptography","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RSA.html"]}],"keywords":["acronym","cryptography"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base64.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xxtea.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/RSA_cryptosystem"},{"@type":"CreativeWork","name":"openssl_public_encrypt","url":"https:\/\/www.php.net\/manual\/en\/function.openssl-public-encrypt.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rsa"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/RSA_cryptosystem)**
## See Also

+ [openssl_public_encrypt](https://www.php.net/manual/en/function.openssl-public-encrypt.php)

## Related

+ [Base 64 Encoding](base64.html)
+ [XXTEA](xxtea.html)
