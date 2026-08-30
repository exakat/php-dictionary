---
type: "PHP Feature"
title: "finfo"
description: "``finfo`` is a native PHP class, part of the Fileinfo extension, that detects the MIME type and encoding of a file or a string buffer by inspecting its content, using the ``libmagic`` library, rather than trusting its filename or extension."
resource: "https://www.php.net/manual/en/class.finfo.php"
tags: ["native class", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# finfo

``finfo`` is a native PHP class, part of the Fileinfo extension, that detects the MIME type and encoding of a file or a string buffer by inspecting its content, using the ``libmagic`` library, rather than trusting its filename or extension.

``finfo`` is instantiated with a mode constant, such as ``FILEINFO_MIME_TYPE``, and then queried with ``$finfo->file($path)`` or ``$finfo->buffer($content)``.

Since the value provided by ``$_FILES[...]['type']`` is supplied by the client and cannot be trusted, ``finfo`` is the recommended way to validate the real type of an uploaded file before storing or processing it. It replaces the deprecated ``mime_content_type()`` function.

```php
<?php

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->file($_FILES['userfile']['tmp_name']);

    if ($mimeType !== 'image/png') {
        throw new RuntimeException('Only PNG files are allowed.');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.finfo.php](https://www.php.net/manual/en/class.finfo.php)

## See Also
- [PHP - FileInfo finfo class](https://www.tutorialspoint.com/php/php_fileinfo_class_function.htm)
- [MIME type detection for PHP file uploads](https://www.web-development-blog.com/php-mime-type-detection/)

## Related
- [File Upload](/features/upload.md)
- [$_FILES](/features/$_FILES.md)
- [Magic Bytes](/features/magic-byte.md)
- [File System](/features/filesystem.md)

## Details
- PHP since: 5.3
- Extension: ext-fileinfo

