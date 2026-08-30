---
type: "keyword"
title: "Use"
description: "The use operator has three distinct usages."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["keyword", "disambiguation", "multiple meanings"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Use

The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names, such as classes, interfaces, constants, etc. in the current namespace. 

When ``use`` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When ``use`` is used with a closure, it imports the listed variables in the closure, from the defining environment.

```php
<?php

namespace My\Space {
    // class importation with use
    use \Some\Other\Space\aClass as A;
    
    class B {
        // trait importation of use
        use MyTrait; 
    
        function foo() {
            $a = 1;
            // use imports the variable $a in the closure. Its value is accessible at execution time.
            $closure = function ($b) use ($a) { return $a + $b;};
        }
    }

    // class importation with use
    use \Some\Other\Space\aClass as A2;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

## Related
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Use Alias](/features/use-alias.md)
- [Closure](/features/closure.md)
- [Trait](/features/trait.md)
- [Use In Traits](/features/use-trait.md)
- [Class Aliases](/features/class-alias.md)
- [Class Operator](/features/class-operator.md)
- [class_alias()](/features/class_alias.md)
- [Insteadof](/features/insteadof.md)

