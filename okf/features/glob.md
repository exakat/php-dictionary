---
type: "PHP Feature"
title: "glob()"
description: "``glob()`` is a function that finds pathnames matching a pattern."
resource: "https://www.php.net/manual/en/function.glob.php"
tags: ["system call", "file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# glob()

``glob()`` is a function that finds pathnames matching a pattern.

The ``glob()`` function is not related to the global keyword.

The pattern syntax follows the rules used by the shell, not regular expressions: ``*`` matches any number of characters, ``?`` matches a single character, and bracket expressions such as ``[a-z]`` match a range or set of characters. Optional flags let the caller include hidden files, sort results, or return only directories.

Because ``glob()`` reads the filesystem directly, its result depends on what is actually present on disk at the moment it is called, and it can be comparatively slow on directories with a very large number of entries. It also returns ``false`` on failure rather than throwing an exception, so callers should check the return value before iterating over it.

```php
<?php

    foreach (glob("*.txt") as $filename) {
        echo "$filename size " . filesize($filename) . "\n";
    }   

?>
```

## Documentation
- [https://www.php.net/manual/en/function.glob.php](https://www.php.net/manual/en/function.glob.php)

## See Also
- [PHP glob - Pattern Matching Files in PHP](https://zetcode.com/php-filesystem/glob/)
- [Glob (programming)](https://en.wikipedia.org/wiki/Glob_(programming))

## Related
- [global Scope](/features/global.md)
- [Star *](/features/star.md)
- [Wildcard](/features/wildcard.md)

## Details
- Extension: ext-filesystem

