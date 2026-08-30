---
type: "disambiguation"
title: "Relative"
description: "A ``relative`` value is dependent on the context in which it operates."
resource: "https://www.php.net/manual/en/language.namespaces.basics.php"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Relative

A ``relative`` value is dependent on the context in which it operates. 

The notion of ``relative`` has several usages:

+ There are relative names, which depends on the local namespace
+ There are relative path, which are path that starts at the current working directory
+ There are relative type, which are types that depends on the current class context, such as ``self``, ``static`` and ``parent``

The notion of relative is the opposite of the notion of absolute, which does not depend on a local context.

```php
<?php

    class X extends Y {
        // relative type, that may be copy-pasted without a change
        function foo() : self {} 
    
        // absolute type, that represents the current class
        function goo() : x {} 
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.basics.php](https://www.php.net/manual/en/language.namespaces.basics.php)

## See Also
- [Path (computing)](https://en.wikipedia.org/wiki/Path_(computing))
- [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)

## Related
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Relative Types](/features/relative-types.md)
- [Path](/features/path.md)
- [Absolute](/features/absolute.md)

