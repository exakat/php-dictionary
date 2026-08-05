# RecursiveDirectoryIterator
``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree. Combined with ``RecursiveIteratorIterator``, it visits every file and sub-directory under a root path.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivedirectoryiterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivedirectoryiterator.ini.html","name":"RecursiveDirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:44:57 +0000","dateModified":"Mon, 13 Jul 2026 18:44:57 +0000","description":"``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RecursiveDirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('/path/to/dir', FilesystemIterator::SKIP_DOTS)
    );
    
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            echo $file->getPathname() . PHP_EOL;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.recursivedirectoryiterator.php)**
## See Also

+ [RecursiveIteratorIterator Class](https://www.php.net/manual/en/class.recursiveiteratoriterator.php)

## Related

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Iterator](iterator.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [File System](filesystem.ini.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [SplSubject](splsubject.ini.html)
