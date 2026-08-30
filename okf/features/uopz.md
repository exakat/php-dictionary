---
type: "acronym"
title: "User Operations For Zend (UOPZ)"
description: "The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM."
resource: "https://www.php.net/manual/en/book.uopz.php"
tags: ["debug", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# User Operations For Zend (UOPZ)

The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.

```php
<?php

    // Dynamically adds an interface to a class with UOPZ
    
    interface myInterface {}
    
    class myClass {}
    
    uopz_implement(myClass::class, myInterface::class);
    
    var_dump(class_implements(myClass::class));

?>
```

## Documentation
- [https://www.php.net/manual/en/book.uopz.php](https://www.php.net/manual/en/book.uopz.php)

## See Also
- [UOPZ repository](https://github.com/krakjoe/uopz)

## Related
- [Internals](/features/internals.md)
- [PHP Engine](/features/engine.md)

