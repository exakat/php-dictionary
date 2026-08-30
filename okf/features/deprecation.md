---
type: "concept"
title: "Deprecation"
description: "Deprecation, or making a feature obsolete, is the state of a feature which is still available, but not recommended anymore."
resource: "https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Deprecation

Deprecation, or making a feature obsolete, is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.

```php
<?php

1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
(1 ? 2 : 3) ? 4 : 5; // ok

?>
```

## Documentation
- [https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary](https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary)

## See Also
- [Deprecated Code: The Warning You Keep Ignoring Will Eventually Break Everything](https://www.in-com.com/blog/managing-deprecated-code-in-software-development/)
- [Software Engineering at Google - Deprecation](https://abseil.io/resources/swe-book/html/ch15.html)

## Related
- [Deprecated](/features/deprecated.md)
- [Fatal Error](/features/fatal-error.md)
- [String Increment](/features/string-increment.md)
- [Sunsetting](/features/sunsetting.md)

