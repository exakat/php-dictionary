# FileSystemIterator
The ``FilesystemIterator`` class is part of the SPL Library and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.
```php
<?php

    $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
    foreach ($it as $fileinfo) {
        echo $fileinfo->getFilename() . \n;
    }

?>
```

Related : [DirectoryIterator](DirectoryIterator)
