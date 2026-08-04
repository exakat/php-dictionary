# php://tmp
``php://tmp`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://tmp`` stays in memory, and, when reaching a certain level, it overflows to disk. This allows this space to go beyond the maximum memory limit of PHP, without stopping the script.
```php
<?php

    file_put_contents('php://tmp', $data);
    
    $data = file_get_contents('php://tmp');

?>
```

## See Also

+ [Speed Up CSV Write To Disk](https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html)

Related : [php://memory](php://memory), [Stream](Stream), [memory_limit](memory_limit), [file_get_contents()](file_get_contents()), [file_put_contents()](file_put_contents())
