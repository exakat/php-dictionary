# zlib extension
The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

There is also a PHP wrapper for zlib, when the ``zlib`` extension is compiled: ``zlib://``.
```php
<?php

    $lines = gzfile('somefile.gz');
    foreach ($lines as $line) {
        echo $line . PHP_EOL;
    }

?>
```

## See Also

+ [Using zlib for Page Compression](https://www.pair.com/support/kb/using-zlib-for-page-compression/)
+ [Introducing streaming zlib compression and decompression with ReactPHP](https://clue.engineering/2020/introducing-reactphp-zlib)

Related : [zip Extension](zip Extension), [bzip2 Extension](bzip2 Extension), [File](File), [PHP Wrappers](PHP Wrappers)
