# __FILE__
``__FILE__`` holds the current file name.

The file name includes it absolute path, e.g. ``/tmp/path/to/file.txt``. It also uses the file actual case.

When used without a file, aka in command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number. 

``__FILE__`` is also often used with ``__DIR__``, which holds the directory of the file. It is akin to use ``dirname()`` on ``__FILE__``.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.
```php
<?php

    function foo() {
        echo __FILE__; // /tmp/test.php
    }

    foo();

?>
```

Related : [Magic Constants](Magic Constants), [__DIR__](__DIR__), [__LINE__](__LINE__), [__METHOD__](__METHOD__), [dirname](dirname), [Special Constant](Special Constant)
