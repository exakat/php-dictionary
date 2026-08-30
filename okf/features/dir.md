---
type: "PHP Feature"
title: "Dir"
description: "A directory, or dir, is a named collection of files on the file system."
resource: "https://en.wikipedia.org/wiki/Computer_file"
tags: ["filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dir

A directory, or dir, is a named collection of files on the file system.

A dir may also be called a folder. 

There is a magic constant called ``__DIR__``, which holds the current directory of the current file.

```php
<?php

    $d = dir('/path/to/folder');
    while (false !== ($fileOrDir = $d->read())) {
       echo $fileOrDir.PHP_EOL;
    }
    $d->close();
    
    print_r(scanddir('/path/to/folder'));

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Computer_file](https://en.wikipedia.org/wiki/Computer_file)

## See Also
- [File system](https://www.php.net/manual/en/book.filesystem.php)

## Related
- [File](/features/file.md)
- [dirname](/features/dirname.md)
- [File System](/features/filesystem.md)
- [Path](/features/path.md)

