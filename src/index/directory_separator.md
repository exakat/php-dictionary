# DIRECTORY\_SEPARATOR
The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path. 

``DIRECTORY_SEPARATOR`` is ``/`` most of the time. On Windows, it may be ``\``, although ``/`` is also valid at the same time, for compatibility reasons.

Using ``DIRECTORY_SEPARATOR`` to build paths or split a string into its components, means that the resulting data is valid on every underlying system.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directory_separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directory_separator.html","name":"DIRECTORY_SEPARATOR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DIRECTORY_SEPARATOR.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $path = 'folder' . DIRECTORY_SEPARATOR . 'subfolder' . DIRECTORY_SEPARATOR . 'file.txt';
    echo $path;

?>
```

**[Documentation](https://www.php.net/manual/en/dir.constants.php#constant.directory-separator)**
## Related

+ [Constants](constant.ini.html)
+ [Path](path.ini.html)
+ [File System](filesystem.ini.html)
+ [Portability](portability.ini.html)
+ [PHP Constants](php-constant.ini.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.ini.html)
