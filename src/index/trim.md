# trim
The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time. 

By default, it removes any of the following characters from the start and end of the string:

+ Space ``" "``
+ Horizontal tab ``\t``
+ Newline ``\n``
+ Carriage return ``\r``
+ Null-byte ``\0``

Unbreakable spaces are not considered here, nor any other character, unless specified.

This function does not support multi-byte characters. It actually uses single-byte characters, and may leave inconsistent characters, or, with luck, it may actually remove the characters. Multibyte trim shall be done with ``mb_trim()``.

``trim()`` removes all the provided characters, as long as it finds them leading or trailing the string. It is not possible to remove only one character with this function.

``trim()`` is completed with ``ltrim()``, which is removing characters on the left part of the string, and  with ``rtrim()``, which is removing characters on the right part of the string.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trim.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trim.html","name":"trim","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:30 +0000","dateModified":"Tue, 11 Aug 2026 20:51:30 +0000","description":"The trim() function is used to remove whitespaces from the beginning and end of a string, at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trim.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.trim.php"},{"@type":"CreativeWork","name":"How to trim strings with PHP","url":"https:\/\/benjamincrozat.com\/php-trim"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"trim"}]}]}</script>
```php
<?php

    $string = "\n\t PHP ";
    $trimmed = trim($string);
    // 'PHP'

    $b = 'aaaaaab';
    print trim($a, 'a'); //b

    $a = '我是法国人';
    print $a;               //我是法国人
    print trim($a, '人我'); //��法国 

?>
```

**[Documentation](https://www.php.net/manual/en/function.trim.php)**
## See Also

+ [How to trim strings with PHP](https://benjamincrozat.com/php-trim)

## Related

+ [Non Breakable Spaces](non-breakable-space.html)
