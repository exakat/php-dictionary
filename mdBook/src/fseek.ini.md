# fseek()
``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.

It moves the file pointer to a specified position, allowing random access to file content. This is useful for reading or writing specific parts of a file without processing the entire file.
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Skip first 10 bytes
    fseek($fp, 10);
    
    // Move to end of file
    fseek($fp, 0, SEEK_END);
    
    // Move back 5 bytes from current position
    fseek($fp, -5, SEEK_CUR);

?>
```

Related : [File](File), [fopen()](fopen()), [ftell()](ftell()), [rewind()](rewind()), [File Mode](File Mode)
