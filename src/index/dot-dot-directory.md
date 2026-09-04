# Dot-dot Directory ..
The ``..`` directory represents the parent directory of the current one. This directory always exists, at the root directory, aka ``/``, which is also its own parent.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html","name":"Dot-dot Directory ..","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:52:44 +0000","dateModified":"Tue, 11 Aug 2026 20:52:44 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html"]}],"keywords":["filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Directory_(computing)"},{"@type":"CreativeWork","name":"Dot and dot-dot directories","url":"https:\/\/www.qnx.com\/developers\/docs\/8.0\/com.qnx.doc.neutrino.user_guide\/topic\/files_Dot.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dot-dot-directory"}]}]}</script>
```php
<?php

    // lists of the files in the parent directory
    $files = glob('../*.php');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Directory_(computing))**
## See Also

+ [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

## Related

+ [Path](path.html)
+ [\\. Directory](dot-directory.html)
+ [\\. File](dot-file.html)
