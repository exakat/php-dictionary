# DirectoryIterator
The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html","name":"DirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"DirectoryIterator"}]}]}</script>
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

+ [Iterator](iterator.html)
+ [Recursion](recursion.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [RecursiveTreeIterator](recursivetreeiterator.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [FileSystemIterator](filesystemiterator.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
+ [SplFileInfo](splfileinfo.html)
