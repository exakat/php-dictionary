---
type: "classic bug"
title: "instanceof"
description: "``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class."
resource: "https://www.php.net/manual/en/language.operators.type.php#language.operators.type"
tags: ["object", "confusion", "classic bug", "silent behavior"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# instanceof

``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function ``is_a()``.

``instanceof`` has a higher precedence than ``!`` operator, so it is applied before the latter. In case of confusion, use parenthesis.

``instanceof`` does not check that the checked class exists: it just checks that the provided object match the class name. If a typo happens in the class name or the class does not exists, the operator fails every time.

```php
<?php

    if ($user instanceof Administrator) {
        $user->admin();
    }
    
    // If The user is not of class User...
    if ( !$user instanceof User ) {
    //if ( !($user instanceof User) ) {
        $user->admin();
    }
    
    var_dump($user instanceof UndefinedClass); // false

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.type.php#language.operators.type](https://www.php.net/manual/en/language.operators.type.php#language.operators.type)

## See Also
- [is_a](https://www.php.net/manual/en/function.is-a.php)
- [Polymorphism (computer science)](https://en.wikipedia.org/wiki/Polymorphism_(computer_science))

## Related
- [Operators](/features/operator.md)
- [is_a()](/features/is_a.md)
- [Type Checking](/features/type-checking.md)
- [Object](/features/object.md)
- [Polymorphism](/features/polymorphism.md)
- [is_object()](/features/is_object.md)
- [Object Type](/features/object-type.md)
- [Multiple Dispatch](/features/multiple-dispatch.md)
- [Smart Cast](/features/smart-cast.md)
- [Sum Type](/features/sum-type.md)
- [Type Narrowing](/features/type-narrowing.md)

