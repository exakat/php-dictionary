---
type: "PHP Feature"
title: "Child Class"
description: "A child class is a class that extends another class."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Child Class

A child class is a class that extends another class. There is no specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child. A class may have several children.

A child class may be the direct child of a class, or any of the own child.

```php
<?php

// parent class
class V { }

// child class
class W extends V {}

// child class of V
// child class of W
class X extends W {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [PHP: Object Inheritance](https://www.php.net/manual/en/language.oop5.inheritance.php)
- [Inheritance (object-oriented programming)](https://en.wikipedia.org/wiki/Inheritance_(object-oriented_programming))

## Related
- [Overwrite](/features/overwrite.md)
- [static](/features/static.md)
- [Self](/features/self.md)
- [Late Static Binding](/features/late-static-binding.md)
- [Base Class](/features/base-class.md)
- [Method Resolution Order (MRO)](/features/mro.md)
- [parent](/features/parent.md)
- [Subclass](/features/subclass.md)

