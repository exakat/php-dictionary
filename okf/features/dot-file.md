---
type: "PHP Feature"
title: ". File"
description: "The ``.`` files are files whose name start with a dot."
resource: "https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory"
tags: ["filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# . File

The ``.`` files are files whose name start with a dot. By convention, they are considered hidden files, and are not listed when scanning a directory. Otherwise, they may be files or directories: ``.env``, ``.ssh``, ``.git``, etc.

```php
<?php

    // files
    $files = glob('./*');

    // hidden files
    $files = glob('./.*');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory](https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory)

## See Also
- [phpdotenv (vlucas/phpdotenv)](https://github.com/vlucas/phpdotenv)
- [Git: gitignore](https://git-scm.com/docs/gitignore)

## Related
- [Path](/features/path.md)
- [. Directory](/features/dot-directory.md)
- [Dot-dot Directory ..](/features/dot-dot-directory.md)

