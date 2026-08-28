# Arcane
Arcane refers to weird and obscure features, that are unknown, unused or forgotten: sometimes, all at the same time. They have been with the language for a long time, and they eventually drop from the feature list.

+ It is possible to use ``++`` on a string containing variables. In that case, trailing letters are augmented by one. 
+ ``strpos()`` used to accept an integer as second argument: it would convert it automatically to its ASCII equivalent
+ ``range()`` used to produce all the values between the interval boundaries, even when the boundaries where one string and one integer 
+ Logical operators works on strings, and then, produce strings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arcane.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arcane.html","name":"Arcane","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"Arcane refers to weird and obscure features, that are unknown, unused or forgotten: sometimes, all at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arcane.html"]}],"keywords":["concept","adjective","feature","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/obsolete.html"}],"citation":[{"@type":"CreativeWork","name":"The Dark Corners of PHP: Lesser-Known Features and Quirks","url":"https:\/\/medium.com\/@makalin\/the-dark-corners-of-php-lesser-known-features-and-quirks-04abc4b163e6"},{"@type":"CreativeWork","name":"PHP: Deprecated Features - Manual","url":"https:\/\/www.php.net\/manual\/en\/migration74.deprecated.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arcane"}]}]}</script>
```php
<?php

    $a = 'b';
    echo ++$a; // c
    
    // 98 is b
    print strpos('abc', 99); // 1
    // This was removed in PHP 8.0

    var_dump(a & 'A' );    // 'A'
    var_dump(a & 'B' );    // '@'

?>
```

## See Also

+ [The Dark Corners of PHP: Lesser-Known Features and Quirks](https://medium.com/@makalin/the-dark-corners-of-php-lesser-known-features-and-quirks-04abc4b163e6)
+ [PHP: Deprecated Features - Manual](https://www.php.net/manual/en/migration74.deprecated.php)

## Related

+ [Deprecated](deprecated.html)
+ [Deprecation](obsolete.html)
