---
type: "directive"
title: "open_basedir"
description: "The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories."
resource: "https://www.php.net/manual/en/ini.core.php#ini.open-basedir"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# open_basedir

The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories. That directive can only be set in the ``php.ini``.

Functions such as ``fopen()``, ``file_get_contents``, ``file_put_contents``, ``curl_get()`` when working on local files, ``zip_open()``, etc. are affected.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.open-basedir](https://www.php.net/manual/en/ini.core.php#ini.open-basedir)

## See Also
- [What is open_basedir in PHP and How to Configure It Securely](https://serveravatar.com/configure-open-basedir/)

## Related
- [include_path](/features/include_path.md)
- [php.ini](/features/php.ini.md)
- [.htaccess](/features/htaccess.md)

