# Convert
To convert is to transform a piece of data, from one format to another. 

The conversion may be lossless, when it may be reverted without loss of information. It is lossy when it cannot be reverted, or if this operation is very expensive. 

PHP has several conversion systems: 

+ Cast, with ``(int)``, ``(array)``, ``(string)``, etc
+ String format conversion, with ``iconv()``, ``mb_convert_encoding()``, or ``UConverter::transcode``.
+ Number base conversion, with ``base_convert()`` and ``intval()``.

To convert may also be called cast, encode/decode, escape, crypt/decrypt, hash, sign, etc. depending on the context.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html","name":"Convert","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:09:17 +0000","dateModified":"Tue, 25 Aug 2026 19:09:17 +0000","description":"To convert is to transform a piece of data, from one format to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html"]}],"keywords":["concept","data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crypt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decrypt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossy.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Data_conversion"},{"@type":"CreativeWork","name":"Type Juggling","url":"https:\/\/www.php.net\/manual\/en\/language.types.type-juggling.php"},{"@type":"CreativeWork","name":"settype","url":"https:\/\/www.php.net\/manual\/en\/function.settype.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"convert"}]}]}</script>
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
## See Also

+ [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)
+ [settype](https://www.php.net/manual/en/function.settype.php)

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
