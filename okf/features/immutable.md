---
type: "concept"
title: "Immutable"
description: "An immutable object is an object that can't be changed."
resource: "https://en.wikipedia.org/wiki/Immutable_object"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Immutable

An immutable object is an object that can't be changed. It may be created, read and cloned. On the other hand, a mutable object may change when one of its method is called, even if this is not visible from the outside.

Immutable objects are thread-safe. 

Immutable objects often return a clone version of themselves, after modification.

```php
<?php

    class X {
        private $x = 0;
        
        function inc() : self {
            $return = clone $this;
            $return->x +=1;
            
            return $return;
        }
    }
    
    $a = new x();
    $b = $a->inc();
    
    // $a and $b are two distinct objects

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Immutable_object](https://en.wikipedia.org/wiki/Immutable_object)

## See Also
- [The case for immutability](https://dev.to/timoschinkel/the-case-for-immutability-1gfa)
- [Elegant immutable object pattern in PHP](https://dev.to/hbgl/elegant-immutable-object-pattern-in-php-1dg3)
- [Immutable Objects in PHP: Your Secret Weapon for Safer Applications](https://medium.com/@mohamadshahkhajeh/immutable-objects-in-php-your-secret-weapon-for-safer-applications-04eb88c49150)

## Related
- [Clock](/features/clock.md)
- [Determinism](/features/determinism.md)
- [Snapshot](/features/snapshot.md)
- [State](/features/state.md)
- [Class Wither Method](/features/wither.md)
- [Actor Model](/features/actor-model.md)
- [Ownership](/features/borrow-checking.md)
- [Linear Type](/features/linear-type.md)
- [Phantom Type](/features/phantom-type.md)
- [Record Type](/features/record-type.md)
- [Value Type](/features/value-type.md)

