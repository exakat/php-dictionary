# __DIR__
``__DIR__`` holds the directory of the current file.

It is equivalent to ``dirname(__FILE__)``. The directory name does not have a trailing slash unless it is the root directory.

When used inside an include, the directory of the included file is returned.

This constant is case insensitive, and may be used with any combination of uppercase and lowercase.
```php
<?php

    // Assume file is at /var/www/html/index.php
    echo __DIR__; // /var/www/html

    // Useful for requiring files relative to current script
    require __DIR__ . '/config.php';

?>
```

Related : [Magic Constants](Magic Constants), [__FILE__](__FILE__), [__LINE__](__LINE__), [dirname](dirname), [Special Constant](Special Constant)
