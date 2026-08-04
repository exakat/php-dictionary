# file_get_contents()
``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call. The function requires the file name, or a valid URI, with its path of storage in the file system.

The function also includes options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_get_contents()`` returns a string, or ``false`` in case of error. The maximum size of the returned string may be limited by configuration.

``file_get_contents()`` works with streams to reach network files. It also supports wrappers, to use various predefined and custom protocols, such as ``https``, ``file``, ``zip``, etc.

```php
<?php

    $json = file_get_contents('/path/to/config.json');

?>
```

## See Also

+ [How to post data using file_get_contents in PHP ?](https://www.geeksforgeeks.org/php/how-to-post-data-using-file_get_contents-in-php/)

Related : [Universal Resource Identifier (URI)](Universal Resource Identifier (URI)), [False](False), [String](String), [Stream](Stream), [Wrapper](Wrapper), [$http_response_header]($http_response_header), [file_put_contents()](file_put_contents()), [php://input](php://input), [php://memory](php://memory), [File Mode](File Mode), [php://tmp](php://tmp), [Universal Resource Locator (URL)](Universal Resource Locator (URL))
