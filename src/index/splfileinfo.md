# SplFileInfo
``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.

It is the base class for ``SplFileObject``, which also reads and writes the file, and ``DirectoryIterator``. When iterating with ``FilesystemIterator`` or ``RecursiveDirectoryIterator``, each entry is an ``SplFileInfo`` instance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html","name":"SplFileInfo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:18:31 +0000","dateModified":"Mon, 06 Jul 2026 10:18:31 +0000","description":"SplFileInfo provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SplFileInfo.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splfileinfo"}]}]}</script>
```php
<?php

    $file = new SplFileInfo('/var/www/html/index.php');
    echo $file->getBasename();   // index.php
    echo $file->getExtension();  // php
    echo $file->getSize();       // size in bytes
    echo $file->getMTime();      // last modification timestamp
    
    if ($file->isReadable()) {
        $obj = $file->openFile('r');
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splfileinfo.php)**
## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [File](file.html)
+ [File System](filesystem.html)
+ [SplFileObject](splfileobject.html)
+ [DirectoryIterator](directoryiterator.html)
+ [SplSubject](splsubject.html)
