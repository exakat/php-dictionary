---
type: "PHP Feature"
title: "Reference Count"
description: "Reference counting is the way PHP keeps track of the usage of a value."
resource: "https://www.php.net/manual/en/features.gc.refcounting-basics.php"
tags: ["memory", "engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Reference Count

Reference counting is the way PHP keeps track of the usage of a value.

The count starts at 1 when the value is created, and it is increased when the value is passed around. It is decreased when the value is deleted or modified. When the reference count is zero, the value may be removed from the memory safely. 

Reference counting is a feature of the PHP engine: code usually uses it transparently. The only possible interaction is when using the garbage collector.

## Documentation
- [https://www.php.net/manual/en/features.gc.refcounting-basics.php](https://www.php.net/manual/en/features.gc.refcounting-basics.php)

## See Also
- [Garbage Collection](https://www.php.net/manual/en/features.gc.php)
- [gc_collect_cycles](https://www.php.net/manual/en/function.gc-collect-cycles.php)

## Related
- [Garbage Collection](/features/garbage-collection.md)
- [Zval](/features/zval.md)

