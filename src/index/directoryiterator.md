# DirectoryIterator
The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directoryiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directoryiterator.html","name":"DirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $iterator = new DirectoryIterator(__DIR__);
    while($iterator->valid()) {
        $file = $iterator->current();
        echo $iterator->key() . " => " . $file->getFilename() . "\n";
        $iterator->next();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.directoryiterator.php)**
## Related

+ [Iterator](iterator.ini.html)
+ [Recursion](recursion.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [RecursiveTreeIterator](recursivetreeiterator.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [FileSystemIterator](filesystemiterator.ini.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.ini.html)
+ [SplFileInfo](splfileinfo.ini.html)
