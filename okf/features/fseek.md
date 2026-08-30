---
type: "PHP Feature"
title: "fseek()"
description: "``fseek()`` is a native PHP function that sets the file position indicator for a file pointer."
resource: "https://www.php.net/manual/en/function.fseek.php"
tags: ["native function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# fseek()

``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.

It moves the file pointer to a specified position, allowing random access to file content. This is useful for reading or writing specific parts of a file without processing the entire file.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Skip first 10 bytes
    fseek($fp, 10);
    
    // Move to end of file
    fseek($fp, 0, SEEK_END);
    
    // Move back 5 bytes from current position
    fseek($fp, -5, SEEK_CUR);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.fseek.php](https://www.php.net/manual/en/function.fseek.php)

## See Also
- [fopen](https://www.php.net/manual/en/function.fopen.php)
- [ftell](https://www.php.net/manual/en/function.ftell.php;
seeAlso[rewind] = https://www.php.net/manual/en/function.rewind.php)

## Related
- [File](/features/file.md)
- [fopen()](/features/fopen.md)
- [ftell()](/features/ftell.md)
- [rewind()](/features/rewind.md)
- [File Mode](/features/file-mode.md)

