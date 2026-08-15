# DIRECTORY\_SEPARATOR
The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path. 

``DIRECTORY_SEPARATOR`` is ``/`` most of the time. On Windows, it may be ``\``, although ``/`` is also valid at the same time, for compatibility reasons.

Using ``DIRECTORY_SEPARATOR`` to build paths or split a string into its components, means that the resulting data is valid on every underlying system.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html","name":"DIRECTORY_SEPARATOR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The DIRECTORY_SEPARATOR constant provides the character to distinguish one directory from the next, in a path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DIRECTORY_SEPARATOR.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"directory_separator"}]}]}</script>
```php
<?php

    $path = 'folder' . DIRECTORY_SEPARATOR . 'subfolder' . DIRECTORY_SEPARATOR . 'file.txt';
    echo $path;

?>
```

**[Documentation](https://www.php.net/manual/en/dir.constants.php#constant.directory-separator)**
## Related

+ [Constants](constant.html)
+ [Path](path.html)
+ [File System](filesystem.html)
+ [Portability](portability.html)
+ [PHP Constants](php-constant.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
