# SplFileInfo
``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.

It is the base class for ``SplFileObject``, which also reads and writes the file, and ``DirectoryIterator``. When iterating with ``FilesystemIterator`` or ``RecursiveDirectoryIterator``, each entry is an ``SplFileInfo`` instance.
```php
<?php

    $file = new SplFileInfo('/var/www/html/index.php');
    echo $file->getBasename();   // index.php
    echo $file->getExtension();  // php
    echo $file->getSize();       // size in bytes
    echo $file->getMTime();      // last modification timestamp
    
    if ($file->isReadable()) {
        $obj = $file->openFile('r');
    }

?>
```

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [File](File), [File System](File System), [SplFileObject](SplFileObject), [DirectoryIterator](DirectoryIterator), [SplSubject](SplSubject)
