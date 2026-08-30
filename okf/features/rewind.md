---
type: "PHP Feature"
title: "rewind()"
description: "``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file."
resource: "https://www.php.net/manual/en/function.rewind.php"
tags: ["native function", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# rewind()

``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.

It is equivalent to ``fseek($fp, 0)`` and is useful when re-reading a file from the start without closing and reopening it. The ``rewind()`` function returns ``true`` on success, or ``false`` on failure. A ``E_WARNING`` error is emitted if the file pointer is not valid.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Read some content
    $content = fread($fp, 100);
    
    // Rewind to the beginning to re-read
    rewind($fp);
    $contentAgain = fread($fp, 100);
    
    fclose($fp);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.rewind.php](https://www.php.net/manual/en/function.rewind.php)

## See Also
- [rewind() function](https://www.w3docs.com/learn-php/rewind-in-php)

## Related
- [fseek()](/features/fseek.md)
- [ftell()](/features/ftell.md)
- [fopen()](/features/fopen.md)
- [fread()](/features/fread.md)
- [File](/features/file.md)

