---
type: "character"
title: "Null Byte"
description: "The null character, also called null byte, is a control character with the ASCII value ``0``."
resource: "https://en.wikipedia.org/wiki/Null_character"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Null Byte

The null character, also called null byte, is a control character with the ASCII value ``0``. It is represented in strings as ``\0`` or ``chr(0)``.

Unlike in the C programming language, where a null byte marks the end of a string, PHP strings are binary-safe: they can contain null bytes anywhere, and the string's length is stored separately. This means PHP itself will not truncate a string when it encounters a ``\0``.

However, problems arise when PHP passes such strings to underlying C libraries, i.e. for file system operations, network functions, and certain extensions such as LDAP. Those C functions treat the null byte as a terminator, causing them to ignore everything after it. This discrepancy can lead to security vulnerabilities, like path truncation, bypassing file extension checks or directory traversal filters; hostname truncation, like circumventing SSRF protections.

```php
<?php

    echo chr(0);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Null_character](https://en.wikipedia.org/wiki/Null_character)

## See Also
- [Null bytes related issues](https://www.php.net/manual/en/security.filesystem.nullbytes.php)
- [CVE-2025-1220: Null byte trickery bypasses hostname allowlists in PHP](https://hadrian.io/blog/cve-2025-1220-null-byte-trickery-bypasses-hostname-allowlists-in-php)

## Related
- [Null](/features/null.md)
- [Character](/features/character.md)

