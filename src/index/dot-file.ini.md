# . File
The ``.`` files are files whose name start with a dot. By convention, they are considered hidden files, and are not listed when scanning a directory. Otherwise, they may be files or directories: ``.env``, ``.ssh``, ``.git``, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-file.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-file.ini.html","name":". File","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:30 +0000","dateModified":"Fri, 19 Jun 2026 21:24:30 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/. File.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // files
    $files = glob('./*');

    // hidden files
    $files = glob('./.*');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory)**
## Related

+ [Path](path.ini.html)
+ [\\. Directory](dot-directory.ini.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.ini.html)
