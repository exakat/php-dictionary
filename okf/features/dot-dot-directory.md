---
type: "PHP Feature"
title: "Dot-dot Directory .."
description: "The ``..`` directory represents the parent directory of the current one."
resource: "https://en.wikipedia.org/wiki/Directory_(computing)"
tags: ["filesystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dot-dot Directory ..

The ``..`` directory represents the parent directory of the current one. This directory always exists, at the root directory, aka ``/``, which is also its own parent.

```php
<?php

    // lists of the files in the parent directory
    $files = glob('../*.php');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Directory_(computing)](https://en.wikipedia.org/wiki/Directory_(computing))

## See Also
- [Dot and dot-dot directories](https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html)

## Related
- [Path](/features/path.md)
- [. Directory](/features/dot-directory.md)
- [. File](/features/dot-file.md)

