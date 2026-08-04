# $HTTP_RAW_POST_DATA
``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

``$HTTP_RAW_POST_DATA`` was removed in version 7.0: it is replaced by ``php://input``.
```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

Related : [php://input](php://input), [php://output](php://output), [php://memory](php://memory)
