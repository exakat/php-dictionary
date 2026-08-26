# Dir
A directory, or dir, is a named collection of files on the file system.

A dir may also be called a folder. 

There is a magic constant called ``__DIR__``, which holds the current directory of the current file.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dir.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dir.html","name":"Dir","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A directory, or dir, is a named collection of files on the file system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dir.html"]}],"alternateName":["directory","folder"],"keywords":["filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dirname.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Computer_file"},{"@type":"CreativeWork","name":"File system","url":"https:\/\/www.php.net\/manual\/en\/book.filesystem.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dir"}]}]}</script>
```php
<?php

    $d = dir('/path/to/folder');
    while (false !== ($fileOrDir = $d->read())) {
       echo $fileOrDir.PHP_EOL;
    }
    $d->close();
    
    print_r(scanddir('/path/to/folder'));

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Computer_file)**
## See Also

+ [File system](https://www.php.net/manual/en/book.filesystem.php)

## Related

+ [File](file.html)
+ [dirname](dirname.html)
+ [File System](filesystem.html)
+ [Path](path.html)
