# RecursiveDirectoryIterator
``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree. Combined with ``RecursiveIteratorIterator``, it visits every file and sub-directory under a root path.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html","name":"RecursiveDirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:44:57 +0000","dateModified":"Mon, 13 Jul 2026 18:44:57 +0000","description":"``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RecursiveDirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"RecursiveDirectoryIterator"}]}]}</script>
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

+ [Standard PHP Library (SPL)](spl.html)
+ [Iterator](iterator.html)
+ [DirectoryIterator](directoryiterator.html)
+ [File System](filesystem.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [SplSubject](splsubject.html)
