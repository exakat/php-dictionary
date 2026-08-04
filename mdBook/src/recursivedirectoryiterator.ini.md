# RecursiveDirectoryIterator
``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree. Combined with ``RecursiveIteratorIterator``, it visits every file and sub-directory under a root path.
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

## See Also

+ [RecursiveIteratorIterator Class](https://www.php.net/manual/en/class.recursiveiteratoriterator.php)

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Iterator](Iterator), [DirectoryIterator](DirectoryIterator), [File System](File System), [DIRECTORY_SEPARATOR](DIRECTORY_SEPARATOR), [RecursiveIterator](RecursiveIterator), [SplSubject](SplSubject)
