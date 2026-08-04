# rewind()
``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.

It is equivalent to ``fseek($fp, 0)`` and is useful when re-reading a file from the start without closing and reopening it. The ``rewind()`` function returns ``true`` on success, or ``false`` on failure. A ``E_WARNING`` error is emitted if the file pointer is not valid.
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Read some content
    $content = fread($fp, 100);
    
    // Rewind to the beginning to re-read
    rewind($fp);
    $contentAgain = fread($fp, 100);
    
    fclose($fp);

?>
```

## See Also

+ [rewind() function](https://www.w3docs.com/learn-php/rewind-in-php)

Related : [fseek()](fseek()), [ftell()](ftell()), [fopen()](fopen()), [fread()](fread()), [File](File)
