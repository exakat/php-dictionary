---
type: "PHP Feature"
title: "Fully Qualified Name"
description: "A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name."
resource: "https://www.php.net/manual/en/language.namespaces.rules.php"
tags: ["namespace"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fully Qualified Name

A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.

```php
<?php

namespace A {
    const B = 1;
    
    function foo() {
        // This is a local name: the namespace A is optional. 
        // The fully qualified name is \A\B;
        echo B;
        
        // This is a fully qualified name
        echo \A\B;
    }
}
?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.rules.php](https://www.php.net/manual/en/language.namespaces.rules.php)

## See Also
- [Namespaces](https://www.php.net/manual/en/language.namespaces.php)
- [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

## Related
- [Use](/features/use.md)
- [Namespaces](/features/namespace.md)
- [Relative Types](/features/relative-types.md)
- [Absolute Value](/features/absolute-value.md)
- [Absolute](/features/absolute.md)
- [Identifier](/features/identifier.md)
- [Relative](/features/relative.md)

## Details
- PHP since: 5.3

