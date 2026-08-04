# php://
The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.
```php
<?php

// display the raw incoming data
print_r(file_get_content('php://stdin'));

?>
```

Related : [Wrapper](Wrapper), [PHP Wrappers](PHP Wrappers), [php://filter](php://filter), [Protocol](Protocol)
