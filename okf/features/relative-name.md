---
type: "PHP Feature"
title: "Relative Name"
description: "A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure."
resource: "https://www.php.net/manual/en/language.namespaces.basics.php"
tags: ["namespace"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Relative Name

A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.

Relative names usually start without the leading ``\``. In the case of names with a single name, it is either a relative name, or a local import.

The opposite of relative name is absolute name.

```php
<?php

namespace B\A {
    function B() {}
    
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
- [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)
- [Namespaces and dynamic language features](https://www.php.net/manual/en/language.namespaces.dynamic.php)

## Related
- [Import](/features/import.md)
- [Absolute Name](/features/absolute-name.md)
- [Identifier](/features/identifier.md)
- [Namespaced Name](/features/namespaced-name.md)

