---
type: "PHP Feature"
title: "Dynamic Class"
description: "A dynamic class is a class whose fully qualified name is defined at execution time."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["dynamic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic Class

A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.

The name of the class is a string. It may be also accessed with the ``::class`` operator. 

For a dynamic call, the name of the class may or may not start with a ``\`` char: both cases work.

Dynamic class may be used with static calls, class constants, enum cases, static method or static property. Here, the call is static, as it actually does not depends on the object, but on the class of the object. 

It may also be used with the instantiation operator ``new``.

It is also possible to use an object of the same class for all these calls.

```php
<?php

    class AB {}
    
    class AC {}
    
    $name = '\A'.(rand(0, 1) ? 'B' : 'C');
    
    $object = new $name;    // creates a class of AB or AC
    $object2 = new $object; // creates another object of AB or AC, same as $object

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [How to Dynamically Generate Classes at Runtime in PHP: A Guide to Using __autoload and Avoiding eval() Issues](https://www.codestudy.net/blog/dynamically-generate-classes-at-runtime-in-php/#google_vignette)

## Related
- [new](/features/new.md)
- [Static Call](/features/static-call.md)
- [Early Binding](/features/early-binding.md)

