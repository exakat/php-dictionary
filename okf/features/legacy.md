---
type: "PHP Feature"
title: "Legacy"
description: "Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current."
resource: "https://en.wikipedia.org/wiki/Legacy_code"
tags: ["code quality"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Legacy

Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current. It typically predates modern PHP features such as namespaces, type declarations, object-oriented design, or PSR standards.

Common PHP legacy patterns include procedural scripts, the use of ``mysql_*`` functions, which was removed in version 7.0, the ``var`` keyword for properties, global variables, ``register_globals``, the absence of autoloading, and short open tags.

Maintaining and evolving legacy code requires careful refactoring to avoid regressions, since test coverage is often absent or incomplete. Static analysis tools can help identify outdated constructs.

```php
<?php

    // Legacy PHP 4/5 style
    global $db;
    var $property;
    mysql_connect('localhost', 'root', '');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Legacy_code](https://en.wikipedia.org/wiki/Legacy_code)

## See Also
- [Working Effectively with Legacy Code (book)](https://www.goodreads.com/book/show/44919.Working_Effectively_with_Legacy_Code)

## Related
- [Var](/features/var.md)
- [Deprecated](/features/deprecated.md)
- [Backward Compatible](/features/backward-compatible.md)
- [Backward Incompatible](/features/backward-incompatible.md)
- [Refactoring](/features/refactoring.md)
- [Dead Code](/features/dead-code.md)
- [Technical Debt](/features/debt.md)
- [Upgrade](/features/upgrade.md)
- [Global Variables](/features/global-variable.md)
- [Register Globals](/features/register-globals.md)
- [Maintenance](/features/maintenance.md)
- [Total Cost Of Ownership (TCO)](/features/tco.md)

