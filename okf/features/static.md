---
type: "disambiguation"
title: "static"
description: "The ``static`` keyword has several distinct usages."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# static

The ``static`` keyword has several distinct usages.

Static is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current called class.

Static is a keyword for methods and properties: they are turned into class elements, and should be reached with the ``::`` syntax, instead of ``->`` or ``?->``.

Static is a keyword for closures and arrow functions: it prevents the current scope from being included in the closure, thus limiting the number of accessible values.

Static is a keyword for variables: those variables aren't removed at the end of the method execution and are available at the beginning of the next call.

```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            return static::X;
    
            // same as \X::C; when the object is of class X
            // same as \Y::C; when the object is of class W
        }
    }
    
    class Y extends X {
        private const X = 2;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [Stop using “static” in PHP](https://blog.devgenius.io/stop-using-static-in-php-b150527819b2)
- [5 usages of static keyword in PHP](https://www.exakat.io/en/5-usages-of-static-keyword-in-php/)
- [Scope of Variables](https://jobtensor.com/Tutorial/PHP/en/Variables)

## Related
- [parent](/features/parent.md)
- [Closure](/features/closure.md)
- [Arrow Functions](/features/arrow-function.md)
- [Variables](/features/variable.md)
- [Late Static Binding](/features/late-static-binding.md)
- [Child Class](/features/child-class.md)
- [Language Construct](/features/language-construct.md)
- [Properties](/features/property.md)
- [Self](/features/self.md)
- [Dynamic](/features/dynamic.md)
- [Special Types](/features/special-typehint.md)
- [PHP Natives](/features/native-type.md)
- [Relative Types](/features/relative-types.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Var](/features/var.md)

