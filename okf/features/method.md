---
type: "PHP Feature"
title: "Method"
description: "Methods are functions, dedicated to a class."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods"
tags: ["method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Method

Methods are functions, dedicated to a class. They are defined inside the body of a class, and may only be accessed in relation to that class: via an object, the class name or another method.

Methods are defined in traits, and then imported in a class for usage.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.

```php
<?php

    class X {
        public function foo() {
            echo "I am foo!\n";
        }
    }
    
    $x = new Y();
    $y->foo(); // calling the foo method, defined in x,

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)

## See Also
- [PHP 8 – Functions and Methods](https://www.infoq.com/articles/php8-functions-methods/)

## Related
- [Class](/features/class.md)
- [__call() Method](/features/__call.md)
- [Default Parameter](/features/default-parameter.md)
- [Fossilized Methods](/features/fossilized-method.md)
- [Functions](/features/function.md)
- [Properties](/features/property.md)
- [Return](/features/return.md)
- [Static Method](/features/static-method.md)
- [Visibility](/features/visibility.md)
- [Call Graph](/features/call-graph.md)
- [Callbacks](/features/callback.md)
- [Impure Function](/features/impure-function.md)
- [Method Compatibility](/features/method-compatibility.md)
- [Pure Function](/features/pure-function.md)
- [Trait](/features/trait.md)
- [Method Collision](/features/method-collision.md)
- [Non-static](/features/non-static.md)
- [Relay Function](/features/relay-function.md)

