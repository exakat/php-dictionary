# Convert
To convert is to transform a piece of data, from one format to another. 

The conversion may be lossless, when it may be reverted without loss of information. It is lossy when it cannot be reverted, or if this operation is very expensive. 

PHP has several conversion systems: 

+ Cast, with ``(int)``, ``(array)``, ``(string)``, etc
+ String format conversion, with ``iconv()``, ``mb_convert_encoding()``, or ``UConverter::transcode``.
+ Number base conversion, with ``base_convert()`` and ``intval()``.

To convert may also be called cast, encode/decode, escape, crypt/decrypt, hash, sign, etc. depending on the context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html","name":"Convert","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:18:10 +0000","dateModified":"Wed, 01 Jul 2026 10:18:10 +0000","description":"To convert is to transform a piece of data, from one format to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Convert.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"convert"}]}]}</script>
```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    // convert a string to its MD5 signature
    // it cannot be reverted easily, and it is considered lossful
    $string = 'PHP rocks';
    $hash = md5($string);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Data_conversion)**
## Related

+ [Cast Operator](cast.html)
+ [Encode](encode.html)
+ [Decode](decode.html)
+ [Escape Data](escape.html)
+ [To Crypt](crypt.html)
+ [To Decrypt](decrypt.html)
+ [Hash](hash.html)
+ [Sign](sign.html)
+ [Lossless](lossless.html)
+ [Lossy](lossy.html)
