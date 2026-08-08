# Decode
To decode is to transform a piece of data, from a specialized format to a human readable one.

The conversion is lossless, and shall be reverted with an encode operation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decode.html","name":"Decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:01 +0000","dateModified":"Fri, 19 Jun 2026 21:24:01 +0000","description":"To decode is to transform a piece of data, from a specialized format to a human readable one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Decode"}]}]}</script>
```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    $original = json_decode($json);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Code)**
## See Also

+ [PHP: Useful Encoding and decoding Functions You Need to Know](https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)

## Related

+ [Encode](encode.html)
+ [Convert](convert.html)
