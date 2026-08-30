---
type: "PHP Feature"
title: "Backward Incompatible"
description: "A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent."
resource: "https://en.wikipedia.org/wiki/Backward_compatibility"
tags: ["compatibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backward Incompatible

A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in version 8.0, and is not available in previous versions.

The keyword ``throw`` can be used within expressions since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible.

```php
<?php

    check() or throw new Exception('Check failed!');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Backward_compatibility](https://en.wikipedia.org/wiki/Backward_compatibility)

## See Also
- [PHP Breaks Backwards Compatibility](https://thephp.cc/articles/php-breaks-backwards-compatibility)
- [PHP: Backward incompatible changes](https://www.php.net/manual/en/migration70.incompatible.php)

## Related
- [Forward Compatible](/features/forward-compatible.md)
- [Backward Compatible](/features/backward-compatible.md)
- [Legacy](/features/legacy.md)

## Details
- PHP since: 8.0

