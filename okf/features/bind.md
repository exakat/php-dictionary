---
type: "PHP Feature"
title: "Bind"
description: "A closure, when build on a method, is bound to an object."
resource: "https://www.php.net/manual/en/closure.bindto.php"
tags: ["syntax", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bind

A closure, when build on a method, is bound to an object. When the closure is executed, it will be with that object. Unless the closure is rebound with another object: in that case, the new object will be used as context for the closure execution.

```php
<?php

class A {
        public function __construct(private int $a) {    }

    public function method() {  echo $this->a;  }
}

$fn = Closure::fromCallable([new A(10), 'method']);
$fn();

$fn2 = $fn->bindTo(new A(99), A::class);
$fn2();

// $fn is called with another object
$fn->call(new A (100));

?>
```

## Documentation
- [https://www.php.net/manual/en/closure.bindto.php](https://www.php.net/manual/en/closure.bindto.php)

## See Also
- [PHP: Closure::bind - Manual](https://www.php.net/manual/en/closure.bind.php)
- [PHP Tutorial => Closure binding and scope](https://riptutorial.com/php/example/8746/closure-binding-and-scope)

## Related
- [Closure](/features/closure.md)

