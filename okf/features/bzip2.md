---
type: "extension"
title: "bzip2 Extension"
description: "The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files."
resource: "https://www.php.net/manual/en/book.bzip2.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# bzip2 Extension

The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

```php
<?php
// open file for reading
$bz = bzopen($filename, r);

// output until end of the file
echo bzread($bz);

bzclose($bz);
?>
```

## Documentation
- [https://www.php.net/manual/en/book.bzip2.php](https://www.php.net/manual/en/book.bzip2.php)

## See Also
- [Compress Files with bzip2 in PHP](https://ssojet.com/compression/compress-files-with-bzip2-in-php/)

## Related
- [zlib extension](/features/zlib.md)
- [zip Extension](/features/zip.md)

## Details
- Extension: ext-bzip2

