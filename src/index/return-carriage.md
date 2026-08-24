# Return Carriage
A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line.

A return carriage is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Return carriage are important when formatting code, as they are at the end of a line.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-carriage.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-carriage.html","name":"Return Carriage","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:54 +0000","dateModified":"Tue, 18 Aug 2026 05:24:54 +0000","description":"A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-carriage.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Carriage_return"},{"@type":"CreativeWork","name":"CRLF","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/CRLF"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"return-carriage"}]}]}</script>
```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Carriage_return)**
## See Also

+ [CRLF](https://developer.mozilla.org/en-US/docs/Glossary/CRLF)

## Related

+ [Line Feed](line-feed.html)
+ [New Line](new-line.html)
