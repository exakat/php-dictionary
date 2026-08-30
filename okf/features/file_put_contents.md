---
type: "PHP Feature"
title: "file_put_contents()"
description: "``file_put_contents()`` is a PHP native function, which stores data in a file, in one call."
resource: "https://www.php.net/manual/en/function.file-put-contents.php"
tags: ["native function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# file_put_contents()

``file_put_contents()`` is a PHP native function, which stores data in a file, in one call. The function requires only the file name, with its path of storage in the file system, and the actual data to store.

The function also include options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_put_contents()`` accepts about any type of data, to store them on a file, yet strings are the best fitted for that. Scalar types are converted to a string; arrays are imploded, with the empty string as separator, and no recursive processing, and objects are converted to string, when the magic method ``__toString()`` is available, otherwise, they are ignored.

```php
<?php

    file_put_contents('/tmp/path/to/file.txt', 'Hello file');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.file-put-contents.php](https://www.php.net/manual/en/function.file-put-contents.php)

## See Also
- [A Practical Guide to PHP's `file_put_contents()` Function](https://reintech.io/blog/practical-guide-php-file-put-contents-function)
- [file_put_contents() With Array Argument](https://php-tips.readthedocs.io/en/latest/tips/file_put_array.html)

## Related
- [include_path](/features/include_path.md)
- [Lock](/features/lock.md)
- [file_get_contents()](/features/file_get_contents.md)
- [Empty String](/features/empty-string.md)
- [Array, []](/features/array.md)
- [File Mode](/features/file-mode.md)
- [php://memory](/features/php-memory.md)
- [php://output](/features/php-output.md)
- [php://tmp](/features/php-tmp.md)

