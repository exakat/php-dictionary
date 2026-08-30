---
type: "PHP Feature"
title: "File Extension"
description: "File extensions are the suffixes at the end of file names that indicate the type or format of the file."
resource: "https://en.wikipedia.org/wiki/Filename_extension"
tags: ["file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# File Extension

File extensions are the suffixes at the end of file names that indicate the type or format of the file. They typically come after a period ``.`` in the file name. 

File extensions help PHP recognize the file type and determine which program should be used to open it. They should not be used as a security feature, but rather as a hint of the content.

```php
<?php

$files = glob("directory/*.ini");

foreach($files as $file) {
    // displays the file name, without the file extension
    print basename($file, '.ini').PHP_EOL;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Filename_extension](https://en.wikipedia.org/wiki/Filename_extension)

## See Also
- [pathinfo](https://www.php.net/manual/en/function.pathinfo.php)
- [basename](https://www.php.net/manual/en/function.basename.php)

## Related
- [File](/features/file.md)

