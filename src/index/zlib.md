# zlib extension
The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

There is also a PHP wrapper for zlib, when the ``zlib`` extension is compiled: ``zlib://``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib.html","name":"zlib extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"zlib extension"}]}]}</script>
```php
<?php

    $lines = gzfile('somefile.gz');
    foreach ($lines as $line) {
        echo $line . PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.zlib.php)**
## See Also

+ [Using zlib for Page Compression](https://www.pair.com/support/kb/using-zlib-for-page-compression/)
+ [Introducing streaming zlib compression and decompression with ReactPHP](https://clue.engineering/2020/introducing-reactphp-zlib)

## Related

+ [zip Extension](zip.html)
+ [bzip2 Extension](bzip2.html)
+ [File](file.html)
+ [PHP Wrappers](php-wrapper.html)
