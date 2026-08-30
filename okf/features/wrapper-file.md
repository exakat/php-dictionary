---
type: "PHP Feature"
title: "file://"
description: "The ``file://`` wrapper is a native PHP wrapper, to access files on a local filesystem, on the host system."
resource: "https://www.php.net/manual/en/wrappers.file.php"
tags: ["wrapper"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# file://

The ``file://`` wrapper is a native PHP wrapper, to access files on a local filesystem, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.

```php
<?php

    // display the content of a file
    // 3 / : two for protocol, one for path
    print_r(file_get_content('file:///tmp/file.txt'));
    
    // also possible
    print_r(file_get_content('/tmp/file.txt'));

?>
```

## Documentation
- [https://www.php.net/manual/en/wrappers.file.php](https://www.php.net/manual/en/wrappers.file.php)

## See Also
- [Testing for File Inclusion](https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_File_Inclusion)

## Related
- [Wrapper](/features/wrapper.md)
- [PHP Wrappers](/features/php-wrapper.md)
- [File](/features/file.md)
- [Security](/features/security.md)
- [Thin Method](/features/thin-method.md)
- [Wrapper Pattern](/features/wrapper-pattern.md)

