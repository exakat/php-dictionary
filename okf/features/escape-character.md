---
type: "concept"
title: "Escape Character"
description: "Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence."
resource: "https://www.php.net/manual/en/regexp.reference.escape.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Escape Character

Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.

Escape characters are often generating a special sequence to escape themselves and allow their literal meaning to be expressed.

In strings and HEREDOC, the escape character is the backslash: ``\``.

```php
<?php

    echo '<a href="https://www.exakat.io/" />';
    
    // This prevents the variable $x to be interpolated
    echo <<<HEREDOC
    echo $x;
HEREDOC;

?>
```

## Documentation
- [https://www.php.net/manual/en/regexp.reference.escape.php](https://www.php.net/manual/en/regexp.reference.escape.php)

## See Also
- [String literals (MySQL)](https://dev.mysql.com/doc/refman/8.0/en/string-literals.html)

## Related
- [Heredocs](/features/heredoc.md)
- [Injection](/features/injection.md)
- [Regular Expression](/features/regex.md)
- [Security](/features/security.md)
- [Structured Query Language (SQL)](/features/sql.md)
- [String](/features/string.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Backslash \](/features/back-slash.md)
- [Escape Data](/features/escape-data.md)
- [Slash /](/features/slash.md)

