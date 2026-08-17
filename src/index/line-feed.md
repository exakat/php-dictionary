# Line Feed
A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.

A line feed is represented by the escape sequence ``\f``, in double quote strings. It is also the ASCII code 12.

Line feed are important when formatting code, as they are at the end of a line.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html","name":"Line Feed","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:09:39 +0000","dateModified":"Sat, 15 Aug 2026 12:09:39 +0000","description":"A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Line Feed.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-carriage.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Newline"},{"@type":"CreativeWork","name":"Double quoted strings escape sequences","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.syntax.double"},{"@type":"CreativeWork","name":"Carriage return (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Carriage_return"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"line-feed"}]}]}</script>
```php
<?php

    echo "\f";
    echo chr(12); // ASCII code 12

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Newline)**
## See Also

+ [Double quoted strings escape sequences](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)
+ [Carriage return (Wikipedia)](https://en.wikipedia.org/wiki/Carriage_return)

## Related

+ [New Line](new-line.html)
+ [Carriage Return](carriage-return.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [Return Carriage](return-carriage.html)
