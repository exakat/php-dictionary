# UUencode Encoding
Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups. It encodes binary files into a text format that can be easily transmitted and decoded back into their original form.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuencode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuencode.html","name":"UUencode Encoding","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Uuencode, short for Unix-to-Unix encoding, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/UUencode Encoding.html"]}],"keywords":["encoding"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base64.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Uuencoding"},{"@type":"CreativeWork","name":"Php Base64 encode\/decode \u2013 best practices and use cases","url":"https:\/\/inspector.dev\/php-base64-encodedecode-best-practices-and-use-cases\/"},{"@type":"CreativeWork","name":"convert_uuencode","url":"https:\/\/www.php.net\/manual\/en\/function.convert-uuencode.php"},{"@type":"CreativeWork","name":"Uuencoding with PHP","url":"https:\/\/mojoauth.com\/binary-encoding-decoding\/uuencoding-with-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uuencode"}]}]}</script>
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

+ [Base 64 Encoding](base64.html)
