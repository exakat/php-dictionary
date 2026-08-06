# UUencode Encoding
Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups. It encodes binary files into a text format that can be easily transmitted and decoded back into their original form.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uuencode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uuencode.html","name":"UUencode Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/UUencode Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $phpString = 'Well, I can say: 你好！' ;
    
    $encoded = convert_uuencode($phpString);
    print $encoded.PHP_EOL;
    //:5V5L;"P@22!C86X@<V%Y.B#DO:#EI;WOO($`
    //`
    
    $decoded = convert_uudecode($encoded);
    print $decoded.PHP_EOL;
    //Well, I can say: 你好！

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Uuencoding)**
## See Also

+ [Php Base64 encode/decode – best practices and use cases](https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/)
+ [convert_uuencode](https://www.php.net/manual/en/function.convert-uuencode.php)
+ [Uuencoding with PHP](https://mojoauth.com/binary-encoding-decoding/uuencoding-with-php/)

## Related

+ [Base 64 Encoding](base64.ini.html)
