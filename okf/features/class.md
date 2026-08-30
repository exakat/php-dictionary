---
type: "keyword"
title: "Class"
description: "Basic class definitions, plural classes, begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["keyword", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class

Basic class definitions, plural classes, begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

A class name may be validated with the following regex: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``; and by avoiding a list of PHP keywords, such as ``namespace``, ``class``, ``interface``, etc.

```php
<?php

class X {
    const CONSTANT = 1;
    
    private $property = 2;
    
    function method() {
        /// and more
    }

}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [How to use PHP classes for object-oriented pro­gram­ming](https://www.ionos.com/digitalguide/websites/web-development/php-classes/)
- [Classes](https://phplang.org/spec/14-classes.html)

## Related
- [Readonly](/features/readonly.md)
- [Class Invasion](/features/class-invasion.md)
- [Const](/features/const.md)
- [Class Getter Method](/features/getter.md)
- [implements](/features/implements.md)
- [Inheritance](/features/inheritance.md)
- [Method](/features/method.md)
- [Class Setter Method](/features/setter.md)
- [Trait](/features/trait.md)
- [Class Wither Method](/features/wither.md)
- [Structure](/features/structure.md)
- [Class Interface Trait Enumeration (CITE)](/features/cite.md)
- [$this](/features/$this.md)
- [Lazy Objects](/features/lazy-objects.md)
- [Polymorphism](/features/polymorphism.md)
- [Promoted Properties](/features/promoted-property.md)
- [Existence](/features/existence.md)
- [Phptoken](/features/phptoken.md)
- [Reflection](/features/reflection.md)
- [Undefined](/features/undefined.md)
- [Base Class](/features/base-class.md)
- [instance](/features/instance.md)
- [is_a()](/features/is_a.md)
- [Naming Conflict](/features/naming-conflict.md)
- [Non-static](/features/non-static.md)

## Details
- PHP since: 4.0+

