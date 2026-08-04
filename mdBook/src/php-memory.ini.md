# php://memory
``php://memory`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://memory`` always stays in memory, so it may reach the memory limit of PHP.  On the other hand, ``php://tmp`` does the same, but overflows to disk when needed.
```php
<?php

    file_put_contents('php://memory', $data);
    
    $data = file_get_contents('php://memory');

?>
```

## See Also

+ [Speed Up CSV Write To Disk](https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html)

Related : [php://tmp](php://tmp), [Stream](Stream), [memory_limit](memory_limit), [file_get_contents()](file_get_contents()), [file_put_contents()](file_put_contents()), [$HTTP_RAW_POST_DATA]($HTTP_RAW_POST_DATA)
