# DirectoryIterator
The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.

```php
<?php

    $iterator = new DirectoryIterator(__DIR__);
    while($iterator->valid()) {
        $file = $iterator->current();
        echo $iterator->key() . " => " . $file->getFilename() . "\n";
        $iterator->next();
    }

?>
```

Related : [Iterator](Iterator), [Recursion](Recursion), [RecursiveIterator](RecursiveIterator), [RecursiveTreeIterator](RecursiveTreeIterator), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [FileSystemIterator](FileSystemIterator), [RecursiveDirectoryIterator](RecursiveDirectoryIterator), [SplFileInfo](SplFileInfo)
