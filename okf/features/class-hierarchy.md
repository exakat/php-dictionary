---
type: "PHP Feature"
title: "Class Hierarchy"
description: "The class hierarchy is a list of classes, which are extending one from another."
resource: "https://en.wikipedia.org/wiki/Class_hierarchy"
tags: ["class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Hierarchy

The class hierarchy is a list of classes, which are extending one from another. The extended classes are parents, and the extending classes are children. Classes extending the same class are also called siblings. 

The depth of the class hierarchy is a measure of the complexity.

```php
<?php

    class A {}
    
    class B extends A {}
    
    class C extends B {}
    
    class D1 extends C {}
    class D2 extends C {}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Class_hierarchy](https://en.wikipedia.org/wiki/Class_hierarchy)

## See Also
- [PHP classes](https://phplang.org/spec/14-classes)

## Related
- [parent](/features/parent.md)
- [Inheritance](/features/inheritance.md)

