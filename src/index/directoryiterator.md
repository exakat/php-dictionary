# DirectoryIterator
The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html","name":"DirectoryIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 11:37:54 +0000","dateModified":"Tue, 01 Sep 2026 11:37:54 +0000","description":"The DirectoryIterator class provides a simple interface for viewing the contents of filesystem directories and files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html"]}],"keywords":["iterator","php class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystemiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.directoryiterator.php"},{"@type":"CreativeWork","name":"PHP DirectoryIterator: How to Iterate Over a Directory","url":"https:\/\/salivity.github.io\/php\/article\/php-directoryiterator-how-to-iterate-over-a-directory"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"directoryiterator"}]}]}</script>
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
## See Also

+ [PHP DirectoryIterator: How to Iterate Over a Directory](https://salivity.github.io/php/article/php-directoryiterator-how-to-iterate-over-a-directory)

## Related

+ [Iterator](iterator.html)
+ [Recursion](recursion.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [RecursiveTreeIterator](recursivetreeiterator.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [FileSystemIterator](filesystemiterator.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
+ [SplFileInfo](splfileinfo.html)
