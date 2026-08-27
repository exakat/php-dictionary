# XXTEA
``XXTEA`` is a symmetric encryption algorithm that stands for ``Corrected Block TEA``: ``TEA`` refers to Tiny Encryption Algorithm. It is primarily used for encrypting and decrypting data, providing a level of security for sensitive information.

``XXTEA`` operates on 32-bit integer data blocks and employs a 128-bit key. It uses a series of iterations and bitwise operations to scramble the data and make it unreadable without the corresponding decryption process. ``XXTEA`` is a block cipher with a fixed block size of 8 bytes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xxtea.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xxtea.html","name":"XXTEA","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"XXTEA is a symmetric encryption algorithm that stands for Corrected Block TEA: TEA refers to Tiny Encryption Algorithm","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xxtea.html"]}],"keywords":["extension","cryptography"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rsa.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/XXTEA"},{"@type":"CreativeWork","name":"xxtea-pecl","url":"https:\/\/github.com\/xxtea\/xxtea-pecl"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xxtea"}]}]}</script>
```php
<?php

    $str = "Hello World! 你好，中国🇨🇳！";
    $key = "1234567890";
    $base64 = "D4t0rVXUDl3bnWdERhqJmFIanfn/6zAxAY9jD6n9MSMQNoD8TOS4rHHcGuE=";
    $encrypt_data = xxtea_encrypt($str, $key);
    $decrypt_data = xxtea_decrypt($encrypt_data, $key);
    if ($str == $decrypt_data && base64_encode($encrypt_data) == $base64) {
        echo "success!";
    } else {
        echo base64_encode($encrypt_data);
        echo "fail!";
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/XXTEA)**
## See Also

+ [xxtea-pecl](https://github.com/xxtea/xxtea-pecl)

## Related

+ [RSA](rsa.html)
