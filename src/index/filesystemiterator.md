# FileSystemIterator
The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystemiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystemiterator.html","name":"FileSystemIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:27:29 +0000","dateModified":"Sun, 09 Aug 2026 13:27:29 +0000","description":"The FilesystemIterator class is part of the SPL Library and is used for iterating over the contents of a directory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystemiterator.html"]}],"keywords":["iterator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.filesystemiterator.php"},{"@type":"CreativeWork","name":"DirectoryIterator","url":"https:\/\/www.php.net\/manual\/en\/class.directoryiterator.php"},{"@type":"CreativeWork","name":"RecursiveDirectoryIterator","url":"https:\/\/www.php.net\/manual\/en\/class.recursivedirectoryiterator.php"},{"@type":"CreativeWork","name":"SPL","url":"https:\/\/www.php.net\/manual\/en\/book.spl.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"filesystemiterator"}]}]}</script>
```php
<?php

    $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
    foreach ($it as $fileinfo) {
        echo $fileinfo->getFilename() . \n;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.filesystemiterator.php)**
## See Also

+ [DirectoryIterator](https://www.php.net/manual/en/class.directoryiterator.php)
+ [RecursiveDirectoryIterator](https://www.php.net/manual/en/class.recursivedirectoryiterator.php)
+ [SPL](https://www.php.net/manual/en/book.spl.php)

## Related

+ [DirectoryIterator](directoryiterator.html)
