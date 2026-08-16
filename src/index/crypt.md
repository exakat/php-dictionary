# To Crypt
To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting. Usually, the transformation involves a key, which stays secret, and is only known from the author or the receiver of the data.

Crypting data may be done for the transit of information, or its storage, in a database, until its usage. In both cases, privacy is critical.

Since the data may be decrypted, it is always possible that an unwanted actor accesses the crypted data. The notion of impossible to read is related to the difficulty to perform the decryption without the critical key. 

The opposite to crypt is to decrypt, when it is a legit operation, or to crack, when it is an unwanted operation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crypt.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crypt.html","name":"To Crypt","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/To Crypt.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"crypt"}]}]}</script>
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

+ [Asymmetric Cryptography](asymmetric-cryptography.html)
+ [To Decrypt](decrypt.html)
+ [Crack](crack.html)
+ [Convert](convert.html)
+ [Cyclic Redundancy Check 32-bit (CRC32)](crc32.html)
+ [Plain Text](plain-text.html)
+ [Rich Text](rich-text.html)
