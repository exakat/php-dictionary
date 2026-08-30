---
type: "PHP Feature"
title: "DIRECTORY_SEPARATOR"
description: "The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path."
resource: "https://www.php.net/manual/en/dir.constants.php#constant.directory-separator"
tags: ["native constant", "portability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DIRECTORY_SEPARATOR

The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path. 

``DIRECTORY_SEPARATOR`` is ``/`` most of the time. On Windows, it may be ``\``, although ``/`` is also valid at the same time, for compatibility reasons.

Using ``DIRECTORY_SEPARATOR`` to build paths or split a string into its components, means that the resulting data is valid on every underlying system.

```php
<?php

    $path = 'folder' . DIRECTORY_SEPARATOR . 'subfolder' . DIRECTORY_SEPARATOR . 'file.txt';
    echo $path;

?>
```

## Documentation
- [https://www.php.net/manual/en/dir.constants.php#constant.directory-separator](https://www.php.net/manual/en/dir.constants.php#constant.directory-separator)

## See Also
- [Portable PHP code: DIRECTORY_SEPARATOR is not necessary](https://alanhogan.com/tips/php/directory-separator-not-necessary)
- [Cross-platform code 3: Path and line separators](http://www.hackingwithphp.com/19/7/5/cross-platform-code-3-path-and-line-separators)

## Related
- [Constants](/features/constant.md)
- [Path](/features/path.md)
- [File System](/features/filesystem.md)
- [Portability](/features/portability.md)
- [PHP Constants](/features/php-constant.md)
- [RecursiveDirectoryIterator](/features/recursivedirectoryiterator.md)

