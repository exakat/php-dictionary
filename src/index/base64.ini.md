# Base 64 Encoding
Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format. It is often used to encode data so it can be safely transmitted over text-based systems such as email, URLs, or JSON, which may not handle binary data well.

Base64 is used to prevent degradation of the message during the transmission: the data is not corrupted by the journey on Internet.

Base64 is not encryption. It does not secure the data: there is no protection against reading by a third party, unless they are not aware of Base64 itself.

Base64 is not related to the notion of mathematical base, such as base 10, binary, octal or hexadecimal.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/base64.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/base64.ini.html","name":"Base 64 Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Base 64 Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $phpString = 'Well, I can say: 你好！' ;
    
    $encoded = base64_encode($phpString);
    print $encoded.PHP_EOL;
    
    $decoded = base64_decode($encoded);
    print $decoded.PHP_EOL;

?>
```

**[Documentation](https://www.php.net/manual/en/function.base64-encode.php)**
## See Also

+ [Php Base64 encode/decode – best practices and use cases](https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/)

## Related

+ [UUencode Encoding](uuencode.ini.html)
+ [Base](base.ini.html)
+ [php://filter](php-filter.ini.html)
+ [RSA](rsa.ini.html)
