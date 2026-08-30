---
type: "PHP Feature"
title: "Marker Interface"
description: "A marker interface is an interface with no methods or constants."
resource: "https://en.wikipedia.org/wiki/Marker_interface_pattern"
tags: ["pattern", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Marker Interface

A marker interface is an interface with no methods or constants. It is used only to 'mark' or 'tag' a class as having a certain property, so that property can be checked at runtime with ``instanceof``, without imposing any method to implement.

Marker interfaces rely on type-checking rather than polymorphism: the mere presence of the interface carries the information, not any method call on it. This is different from a regular interface, which enforces a contract of methods.

Attributes are often a more expressive, modern replacement for marker interfaces, since they may also carry data alongside the tag.

```php
<?php

// An empty interface, used only to tag a class
interface Cacheable {}

class Report implements Cacheable {}
class Invoice {}

function persist(object $object) {
    if ($object instanceof Cacheable) {
        // store the object in a cache layer
    }
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Marker_interface_pattern](https://en.wikipedia.org/wiki/Marker_interface_pattern)

## See Also
- [What is a marker interface?](https://stackoverflow.com/questions/619922/what-is-a-marker-interface-in-java)

## Related
- [Interface](/features/interface.md)
- [Attribute](/features/attribute.md)
- [instanceof](/features/instanceof.md)
- [Polymorphism](/features/polymorphism.md)
- [Pattern](/features/pattern.md)
- [Stringable](/features/stringable.md)
- [Serializable](/features/serializable.md)

