# Dir
A directory, or dir, is a named collection of files on the file system.

A dir may also be called a folder. 

There is a magic constant called ``__DIR__``, which holds the current directory of the current file.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dir.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dir.html","name":"Dir","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A directory, or dir, is a named collection of files on the file system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dir.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [File](file.ini.html)
+ [dirname](dirname.ini.html)
+ [File System](filesystem.ini.html)
+ [Path](path.ini.html)
