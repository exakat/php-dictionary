---
type: "type"
title: "Relative Types"
description: "Relative types are types that are not explicit, but relative to the current class."
resource: "https://www.php.net/manual/en/language.types.relative-class-types.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Relative Types

Relative types are types that are not explicit, but relative to the current class. There are three relative types: 

+ ``static``: this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ ``self``: this represents the current class, at compilation time. 
+ ``parent``: this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls.

```php
<?php

    class X extends Y {
        function foo() : self {}
        function hoo() : static {}
        function ioo() : parent {}    
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.relative-class-types.php](https://www.php.net/manual/en/language.types.relative-class-types.php)

## See Also
- [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
- [Basic Class Definitions](https://www.php.net/manual/en/language.oop5.basic.php)

## Related
- [Scalar Types](/features/scalar-type.md)
- [Union Type](/features/union-type.md)
- [Literal Types](/features/literal-types.md)
- [Intersection Type](/features/intersection-type.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Self](/features/self.md)
- [static](/features/static.md)
- [parent](/features/parent.md)
- [Type System](/features/type.md)
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Relative](/features/relative.md)

