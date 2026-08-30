---
type: "PHP Feature"
title: "move_uploaded_file()"
description: "``move_uploaded_file()`` is a native PHP function that moves a file that was uploaded via an HTTP POST request to a new destination."
resource: "https://www.php.net/manual/en/function.move-uploaded-file.php"
tags: ["native function", "file", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# move_uploaded_file()

``move_uploaded_file()`` is a native PHP function that moves a file that was uploaded via an HTTP POST request to a new destination.

Unlike a generic filesystem move, ``move_uploaded_file()`` first checks, using the same mechanism as ``is_uploaded_file()``, that the source file was genuinely uploaded through PHP's upload mechanism during the current request. This prevents an attacker from tricking a script into moving or overwriting an arbitrary file on the server by forging the ``tmp_name`` value.

``move_uploaded_file()`` doesn't validate the file's content, type, or size: it must be combined with checks such as ``finfo``, an extension allowlist, and a destination outside the web root to build a secure upload feature.

```php
<?php

    $uploaddir = '/var/www/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo 'File is valid, and was successfully uploaded.';
    } else {
        echo 'Possible file upload attack!';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.move-uploaded-file.php](https://www.php.net/manual/en/function.move-uploaded-file.php)

## See Also
- [PHP move_uploaded_file - Handling File Uploads in PHP](https://zetcode.com/php-filesystem/move-uploaded-file/)
- [How to securely upload files with PHP?](https://docs.php.earth/security/uploading/)

## Related
- [File Upload](/features/upload.md)
- [$_FILES](/features/$_FILES.md)
- [finfo](/features/finfo.md)

