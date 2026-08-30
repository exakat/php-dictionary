---
type: "keyword"
title: "Clone"
description: "Clone creates a duplicate of an object."
resource: "https://www.php.net/manual/en/language.oop5.cloning.php"
tags: ["keyword", "concept", "oop", "native function", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Clone

Clone creates a duplicate of an object.

By default, PHP creates a shallow clone: it only makes a copy of the scalar properties, and it keeps the references and any objects untouched. This means that object properties are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method ``__clone()``.

Until PHP 8.5, ``clone`` was only an operator. Ever since, it is also a native PHP function, which accepts a second argument to update the public properties. That argument prevents using the magic method ``__clone``, although both may happen at the same time. When ``__clone`` and ``clone()`` update the same property, the ``clone()`` is applied last, and stays.

Cloning had a conflict with the ``readonly`` properties, until updating readonly during the cloning operation was allowed, in version 8.5.

```php
<?php

    class X {
        protected $property = 1;
        
        function __clone() {
            $this->property = 2;
        }
    }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;
    
    $z2 = clone($x);  // parenthesis are now useful
    echo $z2->property;  // 2
    $z3 = clone($x, ['property' => 3]);
    echo $z3->property;
    
?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.cloning.php](https://www.php.net/manual/en/language.oop5.cloning.php)

## See Also
- [What happens when we clone?](https://doeken.org/blog/what-happens-when-we-clone)
- [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
- [PHP Clone All The Things](https://jolicode.com/blog/php-clone-all-the-things)
- [Clone version 2](https://wiki.php.net/rfc/clone_with_v2)

## Related
- [Shallow Clone](/features/shallow-clone.md)
- [Deep Clone](/features/deep-clone.md)
- [Readonly](/features/readonly.md)
- [References](/features/reference.md)
- [Object](/features/object.md)
- [Identity](/features/identity.md)
- [Object Type](/features/object-type.md)

## Details
- PHP since: 4.0+

