---
type: "PHP Feature"
title: ". Directory"
description: "The ``.`` directory represents the current directory."
resource: "https://en.wikipedia.org/wiki/Directory_(computing)"
tags: ["filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# . Directory

The ``.`` directory represents the current directory. It is useful to designate the current directory, and apply an operation on all the files in that directory. It is also used in ``php.ini`` directives, to indicate a path relative to the current directory.

```php
<?php

    // lists of the files in the current directory
    $files = glob('./*.php');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Directory_(computing)](https://en.wikipedia.org/wiki/Directory_(computing))

## See Also
- [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

## Related
- [Path](/features/path.md)
- [Dot-dot Directory ..](/features/dot-dot-directory.md)
- [. File](/features/dot-file.md)

