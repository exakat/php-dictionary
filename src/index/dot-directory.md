# . Directory
The ``.`` directory represents the current directory. It is useful to designate the current directory, and apply an operation on all the files in that directory. It is also used in ``php.ini`` directives, to indicate a path relative to the current directory.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html","name":". Directory","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:40 +0000","dateModified":"Tue, 11 Aug 2026 20:58:40 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html"]}],"keywords":["filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Directory_(computing)"},{"@type":"CreativeWork","name":"Dot and dot-dot directories","url":"https:\/\/www.qnx.com\/developers\/docs\/8.0\/com.qnx.doc.neutrino.user_guide\/topic\/files_Dot.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dot-directory"}]}]}</script>
```php
<?php

    // lists of the files in the current directory
    $files = glob('./*.php');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Directory_(computing))**
## See Also

+ [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

## Related

+ [Path](path.html)
+ [Concatenation \\.](dot.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.html)
+ [\\. File](dot-file.html)
