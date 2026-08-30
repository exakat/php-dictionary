---
type: "PHP Feature"
title: "File Mode"
description: "The file mode is the configuration of the pointer when accessing to the file."
resource: "https://www.php.net/manual/fr/function.fopen.php"
tags: ["file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# File Mode

The file mode is the configuration of the pointer when accessing to the file. 

In the example above, ``w+`` indicates that the file is open for writing and reading, and place the pointer at the beginning of the file.

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.

```php
<?php

    $fp = fopen($file, 'w+');

?>
```

## Documentation
- [https://www.php.net/manual/fr/function.fopen.php](https://www.php.net/manual/fr/function.fopen.php)

## See Also
- [fopen](https://www.php.net/manual/en/function.fopen.php)

## Related
- [fopen()](/features/fopen.md)
- [file_put_contents()](/features/file_put_contents.md)
- [file_get_contents()](/features/file_get_contents.md)
- [Lock](/features/lock.md)

## Details
- Extension: ext-file

