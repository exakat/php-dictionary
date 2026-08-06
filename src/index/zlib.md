# zlib extension
The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

There is also a PHP wrapper for zlib, when the ``zlib`` extension is compiled: ``zlib://``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zlib.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zlib.html","name":"zlib extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zlib extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [zip Extension](zip.ini.html)
+ [bzip2 Extension](bzip2.ini.html)
+ [File](file.ini.html)
+ [PHP Wrappers](php-wrapper.ini.html)
