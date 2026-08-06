# SplFileInfo
``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.

It is the base class for ``SplFileObject``, which also reads and writes the file, and ``DirectoryIterator``. When iterating with ``FilesystemIterator`` or ``RecursiveDirectoryIterator``, each entry is an ``SplFileInfo`` instance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splfileinfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splfileinfo.html","name":"SplFileInfo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:18:31 +0000","dateModified":"Mon, 06 Jul 2026 10:18:31 +0000","description":"``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SplFileInfo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [File](file.ini.html)
+ [File System](filesystem.ini.html)
+ [SplFileObject](splfileobject.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [SplSubject](splsubject.ini.html)
