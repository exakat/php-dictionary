---
type: "PHP Feature"
title: "file_get_contents()"
description: "``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call."
resource: "https://www.php.net/manual/en/function.file-get-contents.php"
tags: ["native function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.file-get-contents.php](https://www.php.net/manual/en/function.file-get-contents.php)

## See Also
- [How to post data using file_get_contents in PHP ?](https://www.geeksforgeeks.org/php/how-to-post-data-using-file_get_contents-in-php/)

## Related
- [Universal Resource Identifier (URI)](/features/uri.md)
- [False](/features/false.md)
- [String](/features/string.md)
- [Stream](/features/stream.md)
- [Wrapper](/features/wrapper.md)
- [$http_response_header](/features/$http_response_header.md)
- [file_put_contents()](/features/file_put_contents.md)
- [php://input](/features/php-input.md)
- [php://memory](/features/php-memory.md)
- [File Mode](/features/file-mode.md)
- [php://tmp](/features/php-tmp.md)
- [Universal Resource Locator (URL)](/features/url.md)

