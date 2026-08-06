# Encode
To encode is to transform a piece of data, from a human readable format to a specialized format.

The conversion is lossless, and shall be reverted with a decode operation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/encode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/encode.html","name":"Encode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:55 +0000","dateModified":"Fri, 19 Jun 2026 21:24:55 +0000","description":"To encode is to transform a piece of data, from a human readable format to a specialized format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Encode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    $original = json_decode($json);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Character_encoding)**
## See Also

+ [PHP: Useful Encoding and decoding Functions You Need to Know](https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)

## Related

+ [Decode](decode.ini.html)
+ [Convert](convert.ini.html)
