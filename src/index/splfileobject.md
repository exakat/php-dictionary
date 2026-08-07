# SplFileObject
``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files. It extends ``SplFileInfo`` and implements ``SeekableIterator``, allowing line-by-line iteration over a file with a ``foreach`` loop.

``SplFileObject`` supports reading modes ``r`` and ``r+``, writing modes ``w`` and ``a``, and CSV parsing via the ``setFlags()`` method combined with the ``READ_CSV`` flag.

It is a convenient alternative to the procedural ``fopen()``/``fgets()``/``fclose()`` trio when an object-oriented approach is preferred.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileobject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileobject.html","name":"SplFileObject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:58:35 +0000","dateModified":"Thu, 18 Jun 2026 13:58:35 +0000","description":"``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SplFileObject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"SplFileObject"}]}]}</script>
```php
<?php

    $file = new SplFileObject('data.txt', 'r');
    $file->setFlags(SplFileObject::DROP_NEW_LINE);

    foreach ($file as $line) {
        echo $line . PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splfileobject.php)**
## See Also

+ [Reading large files in PHP with SplFileObject](https://write.corbpie.com/reading-large-files-in-php-with-splfileobject/)
+ [php native SplFileObject class in CTF](https://medium.com/@lyltvip/php-native-splfileobject-class-in-ctf-b5c1355c0340)

## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [SplFileInfo](splfileinfo.html)
+ [Iterator](iterator.html)
+ [fopen()](fopen.html)
+ [File](file.html)
