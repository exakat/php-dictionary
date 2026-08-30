---
type: "directive"
title: "include_path"
description: "The ``include_path`` directive sets the directories where the file functions look for files to read or write files."
resource: "https://www.php.net/manual/en/ini.core.php#ini.include-path"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# include_path

The ``include_path`` directive sets the directories where the file functions look for files to read or write files. 

File functions may be ``require()``, ``include()``, ``fopen()``, ``file()``, ``readfile()``, ``file_get_contents()``.

``include_path`` default to ``.``, the current directory. It may list several directories, using ``::`` as a separator.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.include-path](https://www.php.net/manual/en/ini.core.php#ini.include-path)

## See Also
- [include](https://www.php.net/manual/en/function.include.php)
- [set_include_path](https://www.php.net/manual/en/function.set-include-path.php)

## Related
- [open_basedir](/features/open_basedir.md)
- [file_put_contents()](/features/file_put_contents.md)

