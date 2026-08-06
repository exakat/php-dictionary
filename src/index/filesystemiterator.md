# FileSystemIterator
The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/filesystemiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/filesystemiterator.html","name":"FileSystemIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/FileSystemIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
    foreach ($it as $fileinfo) {
        echo $fileinfo->getFilename() . \n;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.filesystemiterator.php)**
## Related

+ [DirectoryIterator](directoryiterator.ini.html)
