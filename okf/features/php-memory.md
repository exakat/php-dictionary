---
type: "PHP Feature"
title: "php://memory"
description: "``php://memory`` is a special read-write stream that gives access a space in memory."
resource: "https://www.php.net/manual/en/wrappers.php.php"
tags: ["php stream"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# php://memory

``php://memory`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://memory`` always stays in memory, so it may reach the memory limit of PHP.  On the other hand, ``php://tmp`` does the same, but overflows to disk when needed.

```php
<?php

    file_put_contents('php://memory', $data);
    
    $data = file_get_contents('php://memory');

?>
```

## Documentation
- [https://www.php.net/manual/en/wrappers.php.php](https://www.php.net/manual/en/wrappers.php.php)

## See Also
- [Speed Up CSV Write To Disk](https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html)

## Related
- [php://tmp](/features/php-tmp.md)
- [Stream](/features/stream.md)
- [memory_limit](/features/memory_limit.md)
- [file_get_contents()](/features/file_get_contents.md)
- [file_put_contents()](/features/file_put_contents.md)
- [$HTTP_RAW_POST_DATA](/features/$HTTP_RAW_POST_DATA.md)

