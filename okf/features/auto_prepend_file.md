---
type: "directive"
title: "Preappend File Directive"
description: "The ``auto_prepend_file`` PHP directive adds a ``require`` call before the main file."
resource: "https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Preappend File Directive

The ``auto_prepend_file`` PHP directive adds a ``require`` call before the main file. The file is then automatically executed, and all its definitions are added. They are then available later in the execution.

Only one file is prepended: if several files need to be, they should be included in a centralized file.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file](https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file)

## See Also
- [How to Use auto_prepend_file in PHP Effectively](https://medium.com/serveravatar/how-to-use-auto-prepend-file-in-php-effectively-ee3917b668f6)

## Related
- [Disable Functions](/features/disable-functions.md)
- [Disable Classes](/features/disable-classes.md)

