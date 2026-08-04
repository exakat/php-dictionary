# Dir
A directory, or dir, is a named collection of files on the file system.

A dir may also be called a folder. 

There is a magic constant called ``__DIR__``, which holds the current directory of the current file.
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

## See Also

+ [File system](https://www.php.net/manual/en/book.filesystem.php)

Related : [File](File), [dirname](dirname), [File System](File System), [Path](Path)
