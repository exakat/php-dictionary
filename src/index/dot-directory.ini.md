# . Directory
The ``.`` directory represents the current directory. It is useful to designate the current directory, and apply an operation on all the files in that directory. It is also used in ``php.ini`` directives, to that a path at the current directory.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-directory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-directory.ini.html","name":". Directory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:28 +0000","dateModified":"Fri, 19 Jun 2026 21:24:28 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/. Directory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Path](path.ini.html)
+ [Concatenation \\.](dot.ini.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.ini.html)
+ [\\. File](dot-file.ini.html)
