# . File
The ``.`` files are files whose name start with a dot. By convention, they are considered hidden files, and are not listed when scanning a directory. Otherwise, they may be files or directories: ``.env``, ``.ssh``, ``.git``, etc.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html","name":". File","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-file.html"]}],"keywords":["filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-directory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-dot-directory.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Hidden_file_and_hidden_directory"},{"@type":"CreativeWork","name":"phpdotenv (vlucas\/phpdotenv)","url":"https:\/\/github.com\/vlucas\/phpdotenv"},{"@type":"CreativeWork","name":"Git: gitignore","url":"https:\/\/git-scm.com\/docs\/gitignore"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dot-file"}]}]}</script>
```php
<?php

    // files
    $files = glob('./*');

    // hidden files
    $files = glob('./.*');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory)**
## See Also

+ [phpdotenv (vlucas/phpdotenv)](https://github.com/vlucas/phpdotenv)
+ [Git: gitignore](https://git-scm.com/docs/gitignore)

## Related

+ [Path](path.html)
+ [\\. Directory](dot-directory.html)
+ [Dot-dot Directory \\.\\.](dot-dot-directory.html)
