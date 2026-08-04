# __LINE__
``__LINE__`` holds the current line number in the current file.

The line numbers starts at 1. It is always available.

``__LINE__`` is often used with ``__FILE__``, which holds the file name.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.
```php
<?php

    function foo() {
        echo __FILE__.':'.__LINE__; // /tmp/test.php:4
    }

foo();

?>
```

Related : [Magic Constants](Magic Constants), [__FILE__](__FILE__)
