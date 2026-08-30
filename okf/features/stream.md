---
type: "PHP Feature"
title: "Stream"
description: "Streams are a generalisation of the notion of files."
resource: "https://www.php.net/manual/en/book.stream.php"
tags: ["feature", "filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stream

Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things: archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.

```php
<?php

    if ($stream = fopen('https://www.php.net', 'r')) {
        // print the first 100 chars of the HTML page.
        echo stream_get_contents($stream, -1, 100);
    
        fclose($stream);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.stream.php](https://www.php.net/manual/en/book.stream.php)

## See Also
- [Streams in PHP: What you really need to know](https://dev.to/gabrieloliverio/streams-in-php-55kb)

## Related
- [Abstraction Layer](/features/abstraction-layer.md)
- [Stream Wrapper](/features/wrapper-stream.md)
- [File](/features/file.md)
- [php://input](/features/php-input.md)
- [php://output](/features/php-output.md)
- [php://memory](/features/php-memory.md)
- [php://tmp](/features/php-tmp.md)
- [php://filter](/features/php-filter.md)
- [file_get_contents()](/features/file_get_contents.md)
- [Path](/features/path.md)
- [Polling](/features/polling.md)
- [Web Hypertext Application Technology Working Group (WHATWG)](/features/whatwg.md)
- [STDOUT](/features/stdout.md)
- [fclose()](/features/fclose.md)
- [fgetc()](/features/fgetc.md)
- [fgets()](/features/fgets.md)
- [fread()](/features/fread.md)
- [ftell()](/features/ftell.md)
- [fwrite()](/features/fwrite.md)
- [Non-blocking](/features/non-blocking.md)

## Details
- PHP since: 5.0

