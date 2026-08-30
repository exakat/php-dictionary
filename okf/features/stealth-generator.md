---
type: "classic bug"
title: "Stealth Generator"
description: "A function becomes a generator as soon as the ``yield`` keyword is added to the block of code."
resource: "https://www.php.net/manual/en/language.generators.syntax.php"
tags: ["classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stealth Generator

A function becomes a generator as soon as the ``yield`` keyword is added to the block of code. At that point, the function may be called, but it won't do anything until the ``yield`` is executed. The code continues its execution, though.

```php
<?php

function foo() {
    print a;
    yield 2;
    print b;
}

foo();
print c;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.generators.syntax.php](https://www.php.net/manual/en/language.generators.syntax.php)

## See Also
- [Stealth generator in action](https://3v4l.org/p6niX)

## Related
- [Generator](/features/generator.md)
- [Yield](/features/yield.md)
- [yield from Keyword](/features/yield-from.md)
- [Coroutine](/features/coroutine.md)
- [Async](/features/async.md)
- [Lazy Loading](/features/lazy-loading.md)

