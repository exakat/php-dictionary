---
type: "PHP Feature"
title: "preg_replace()"
description: "``preg_replace()`` searches a string for matches of a regular expression, and replaces them with a replacement string."
resource: "https://www.php.net/manual/en/function.preg-replace.php"
tags: ["php function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# preg_replace()

``preg_replace()`` searches a string for matches of a regular expression, and replaces them with a replacement string. It is the regex-powered counterpart of ``str_replace()``, which only handles literal substrings.

The first argument is the pattern, or an array of patterns, the second is the replacement, or an array of replacements, and the third is the subject string, or an array of subjects. Captured groups from the pattern may be reused in the replacement with ``$1``, ``$2``, etc.

An optional ``limit`` argument caps the number of replacements per subject, and an optional ``count`` reference receives the total number of replacements performed. ``preg_replace()`` returns ``null`` on error, so its result should not be used without checking, especially when the pattern comes from a variable.

When the replacement needs to run arbitrary code rather than a static string, ``preg_replace_callback()`` should be used instead; the historic ``/e`` modifier that allowed code execution directly inside ``preg_replace()`` was removed in version 7.0+.

```php
<?php

    $result = preg_replace('/\s+/', ' ', 'too    many    spaces');
    // 'too many spaces'

    $result = preg_replace('/(\w+)@(\w+)/', '$2@$1', 'user@host');
    // 'host@user'

?>
```

## Documentation
- [https://www.php.net/manual/en/function.preg-replace.php](https://www.php.net/manual/en/function.preg-replace.php)

## See Also
- [preg_replace_callback()](https://www.php.net/manual/en/function.preg-replace-callback.php)

## Related
- [Regular Expression](/features/regex.md)
- [Preg_match](/features/preg_match.md)
- [preg_split()](/features/preg_split.md)
- [str_replace()](/features/str_replace.md)

## Details
- Extension: ext-pcre

