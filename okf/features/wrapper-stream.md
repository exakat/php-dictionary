---
type: "PHP Feature"
title: "Stream Wrapper"
description: "A stream wrapper is additional code which tells the stream how to handle specific protocols and encodings."
resource: "https://www.php.net/manual/en/book.stream.php"
tags: ["feature", "wrapper"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stream Wrapper

A stream wrapper is additional code which tells the stream how to handle specific protocols and encodings. 

PHP supports several wrappers natively, in particular ``file://``, ``http://``, ``ftp://``, ``php://``, ``zlib://``, ``data://``, ``glob://``, ``phar://``, ``ssh2://``, ``rar://``, ``ogg://`` and ``expect://``.

Custom wrappers may be registered with ``stream_wrapper_register()``. A wrapper may write in any kind of format.

```php
<?php

    // opening a file with the file wrapper
    $fp = fopen('file://tmp/myfile.txt', 'r+');
    
    // opening a file with the ftp wrapper
    $fp = fopen('ftp://user:password@example.com/pub/file.txt', 'r+');
    
    // opening a file with the phar wrapper
    $fp = fopen('phar://someFile.txt', 'r+');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.stream.php](https://www.php.net/manual/en/book.stream.php)

## See Also
- [A Guide to Streams in PHP: In-Depth Tutorial With Examples](https://stackify.com/a-guide-to-streams-in-php-in-depth-tutorial-with-examples/)
- [Supported Protocols and Wrappers](https://www.php.net/manual/en/wrappers.php)
- [stream_wrapper_register()](https://www.php.net/manual/en/function.stream-wrapper-register.php)
- [Example class registered as stream wrapper](https://www.php.net/manual/en/stream.streamwrapper.example-1.php)

## Related
- [Protocol](/features/protocol.md)
- [Stream](/features/stream.md)

