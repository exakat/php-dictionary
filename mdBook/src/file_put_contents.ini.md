# file_put_contents()
``file_put_contents()`` is a PHP native function, which stores data in a file, in one call. The function requires only the file name, with its path of storage in the file system, and the actual data to store.

The function also include options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_put_contents()`` accepts about any type of data, to store them on a file, yet strings are the best fitted for that. Scalar types are converted to a string; arrays are imploded, with the empty string as separator, and no recursive processing, and objects are converted to string, when the magic method ``__toString()`` is available, otherwise, they are ignored.
```php
<?php

    file_put_contents('/tmp/path/to/file.txt', 'Hello file');

?>
```

## See Also

+ [A Practical Guide to PHP's `file_put_contents()` Function](https://reintech.io/blog/practical-guide-php-file-put-contents-function)
+ [file_put_contents() With Array Argument](https://php-tips.readthedocs.io/en/latest/tips/file_put_array.html)

Related : [include_path](include_path), [Lock](Lock), [Concurrency](Concurrency), [file_get_contents()](file_get_contents()), [Empty String](Empty String), [Array, []](Array, []), [File Mode](File Mode), [php://memory](php://memory), [php://output](php://output), [php://tmp](php://tmp)
