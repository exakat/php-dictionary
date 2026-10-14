# str\_split()
``str_split()`` splits a string into an array of chunks of a fixed byte length, one character per chunk by default.

The function walks the string from left to right, cutting it every ``length`` bytes: the final chunk may be shorter than the others when the string length is not an exact multiple of ``length``. Because it counts bytes rather than characters, splitting a multibyte string with ``str_split()`` can cut a multi-byte character in half, producing chunks that are not valid text on their own; ``mb_str_split()`` exists for that case.

Passing a ``length`` smaller than one used to return false; since PHP 8.2, it throws a ``ValueError`` instead, and splitting an empty string now returns an empty array rather than an array containing one empty string.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_split.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_split.html","name":"str_split()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:36 +0000","dateModified":"Fri, 25 Sep 2026 18:46:36 +0000","description":"str_split() splits a string into an array of chunks of a fixed byte length, one character per chunk by default","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_split.html"]}],"keywords":["native function","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/substr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.str-split.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"str_split"}]}]}</script>
```php
<?php

    print_r(str_split('abcdef'));    // ['a','b','c','d','e','f']
    print_r(str_split('abcdef', 2)); // ['ab','cd','ef']
    print_r(str_split(''));          // [] since PHP 8.2

?>
```

**[Documentation](https://www.php.net/manual/en/function.str-split.php)**
## Related

+ [substr()](substr.html)
+ [explode()](explode.html)
+ [String](string.html)
+ [Multibyte String](mbstring.html)
