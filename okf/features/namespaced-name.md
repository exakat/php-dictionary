---
type: "PHP Feature"
title: "Namespaced Name"
description: "A namespaced name is a name that includes a ``\\`` character."
resource: "https://www.php.net/manual/en/language.namespaces.basics.php"
tags: ["namespace"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Namespaced Name

A namespaced name is a name that includes a ``\`` character.

A namespaced name may be relative or absolute. 

Namespaced names are sometimes reported in errors.

```php
<?php

namespace B\A {
    class C {}
}

namespace B {
    use A\B as C;
    //import 
    new C();

    // relative name
    new A\C(); // actually calls B \ A\C
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.basics.php](https://www.php.net/manual/en/language.namespaces.basics.php)

## See Also
- [PHP: Name resolution rules - Manual](https://www.php.net/manual/en/language.namespaces.rules.php)
- [Fully qualified name - Wikipedia](https://en.wikipedia.org/wiki/Fully_qualified_name)

## Related
- [Import](/features/import.md)
- [Absolute Name](/features/absolute-name.md)
- [Relative Name](/features/relative-name.md)

