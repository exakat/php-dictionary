---
type: "PHP Feature"
title: "Circular Reference"
description: "A circular reference is a situation where an object has a reference to another object, and vice versa."
resource: "https://en.wikipedia.org/wiki/Circular_reference"
tags: ["memory", "self-reference"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Circular Reference

A circular reference is a situation where an object has a reference to another object, and vice versa. The circle of reference may have two or more objects.

Circular references create limitations with the garbage collector, which requires more refined checks before removing elements from memory. Usually, the garbage collector removes objects which are not referenced by another object. And, in the case of circular references, the whole circle seems to be in use. This leads to memory leaks.

```php
<?php

$a = new A();
$b = new B($a);
$a->setB($b);

class A {
    private B $b;
    
    function setB(B $b) {
        $this->b = $b;
    }
}

class B {
    private A $a;
    
    function __construct(A $a) {
        $this->a = $a;
    }
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Circular_reference](https://en.wikipedia.org/wiki/Circular_reference)

## See Also
- [PHP Closures and Generators can hold circular references](https://dev.to/gromnan/php-closures-and-generators-can-hold-circular-references-45ge)

## Related
- [Garbage Collection](/features/garbage-collection.md)
- [References](/features/reference.md)
- [Memory Leak](/features/memory-leak.md)
- [Memory](/features/memory.md)
- [Weak References](/features/weak-reference.md)

