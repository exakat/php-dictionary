---
type: "PHP Feature"
title: "Anonymous Class"
description: "A class may be instantiated, without defining a class name."
resource: "https://www.php.net/manual/en/language.oop5.anonymous.php"
tags: ["structure", "anonymous", "cite"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anonymous Class

A class may be instantiated, without defining a class name. The class is identical to a named-class, except for the name attribute. This also means that it cannot be used for typing, though it may be typed itself, using its parent class or implemented interfaces.

Also, arguments may be passed at instantiation time, unlike with named-class definition, where those arguments are passed when calling ``new``, not when defining the class.

```php
<?php

    interface I {}

    function foo(I $a) {}

    $a = new class () implements I {};

    foo($a);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.anonymous.php](https://www.php.net/manual/en/language.oop5.anonymous.php)

## See Also
- [PHP Anonymous Class](https://www.phptutorial.net/php-oop/php-anonymous-class/)
- [PHP 7.0 - Anonymous Classes](https://blog.programster.org/php7-0-anonymous-classes)

## Related
- [Closure](/features/closure.md)
- [Anonymous](/features/anonymous.md)

