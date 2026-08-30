---
type: "keyword"
title: "parent"
description: "``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["keyword", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# parent

``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the first parent class, or any or their own parents. In particular, when searching for methods or properties, it may skip the direct parent, and land on one of the parent above.

``parent`` represents the first parent of the class, and then, recursively, all parents of that class. 

``parent`` is the supertype of the current class. 

In a trait, ``parent`` represents the host class's parent, not the trait own parent. In fact, the trait itself has no parent.

```php
<?php

    class W {
        protected const X = 1;
    }
    
    class X extends W {
        function foo() {
            // could also be written as \W::C; here
            return parent::C;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [PHP type hints: self and parent](https://madewithlove.com/blog/self-and-parent-type-hints/)

## Related
- [Overwrite](/features/overwrite.md)
- [static](/features/static.md)
- [Self](/features/self.md)
- [Child Class](/features/child-class.md)
- [Late Static Binding](/features/late-static-binding.md)
- [Language Construct](/features/language-construct.md)
- [PHP Natives](/features/native-type.md)
- [Relative Types](/features/relative-types.md)
- [Special Types](/features/special-typehint.md)
- [Base Class](/features/base-class.md)
- [Class Hierarchy](/features/class-hierarchy.md)
- [Method Resolution Order (MRO)](/features/mro.md)

