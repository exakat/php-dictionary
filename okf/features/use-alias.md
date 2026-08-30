---
type: "PHP Feature"
title: "Use Alias"
description: "The ``use`` operator can create aliases for a class, function or constant."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["use"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Use Alias

The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.

```php
<?php

use A as B;
use const C as D;
use function foo as strtlower; // very confusing


class A {}

new A;
new B;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [class_alias](https://www.php.net/manual/en/function.class-alias.php)

## Related
- [Alias](/features/alias.md)
- [As](/features/as.md)
- [Namespace Alias](/features/namespace-alias.md)
- [Namespaces](/features/namespace.md)
- [Use](/features/use.md)
- [Mock](/features/mock.md)
- [Collision](/features/collision.md)
- [Global Space](/features/global-space.md)

