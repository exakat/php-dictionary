---
type: "keyword"
title: "extends"
description: "``extends`` is an operator of the class inheritance."
resource: "https://www.php.net/manual/en/language.oop5.inheritance.php"
tags: ["keyword", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# extends

``extends`` is an operator of the class inheritance. It indicates that a class is built from another one, or an interface is built from another interface. As such, the properties, constants and methods of the parent class or interface are available to the newly created class, unless when they are marked with ``private`` visibility. 

``extends`` is optional. 

``extends`` is unique with a class: it is not possible to extend several classes at the same time. 

``extends`` may be multiple with interfaces.

``extends`` has a different mechanism than ``implements``: ``implements`` provide method signature but no implementation; ``extends`` provides both.

```php
<?php

    class X {
        function foo() { echo 'X'; }
    }
    
    class y extends x { }
    
    // Both methods are possible 
    (new x)->foo();
    (new y)->foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.inheritance.php](https://www.php.net/manual/en/language.oop5.inheritance.php)

## See Also
- [Stop using “extends” in PHP](https://blog.devgenius.io/stop-using-extends-in-php-37c9da1cce83)
- [Extend or implement](https://stitcher.io/blog/extends-vs-implements)

## Related
- [implements](/features/implements.md)
- [Base Class](/features/base-class.md)

