# File Mode
The file mode is the configuration of the pointer when accessing to the file. 

In the example above, ``w+`` indicates that the file is open for writing and reading, and place the pointer at the beginning of the file.

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.
```php
<?php

    $fp = fopen($file, 'w+');

?>
```

## See Also

+ [fopen](https://www.php.net/manual/en/function.fopen.php)

Related : [fopen()](fopen()), [file_put_contents()](file_put_contents()), [file_get_contents()](file_get_contents()), [Lock](Lock)
