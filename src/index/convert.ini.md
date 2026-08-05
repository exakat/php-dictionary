# Convert
To convert is to transform a piece of data, from one format to another. 

The conversion may be lossless, when it may be reverted without loss of information. It is lossy when it cannot be reverted, or if this operation is very expensive. 

PHP has several conversion systems: 

+ Cast, with ``(int)``, ``(array)``, ``(string)``, etc
+ String format conversion, with ``iconv()``, ``mb_convert_encoding()``, or ``UConverter::transcode``.
+ Number base conversion, with ``base_convert()`` and ``intval()``.

To convert may also be called cast, encode/decode, escape, crypt/decrypt, hash, sign, etc. depending on the context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/convert.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/convert.ini.html","name":"Convert","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:18:10 +0000","dateModified":"Wed, 01 Jul 2026 10:18:10 +0000","description":"To convert is to transform a piece of data, from one format to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Convert.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Cast Operator](cast.ini.html)
+ [Encode](encode.ini.html)
+ [Decode](decode.ini.html)
+ [Escape Data](escape.ini.html)
+ [To Crypt](crypt.ini.html)
+ [To Decrypt](decrypt.ini.html)
+ [Hash](hash.ini.html)
+ [Sign](sign.ini.html)
+ [Lossless](lossless.ini.html)
+ [Lossy](lossy.ini.html)
