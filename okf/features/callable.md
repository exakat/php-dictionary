---
type: "keyword"
title: "Callables"
description: "A callable is an object that can pass the ``callable`` type."
resource: "https://www.php.net/manual/en/language.types.callable.php"
tags: ["feature", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Callables

A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, represented as a string, a closure or an arrow function. 

Objects may also be callable, when their class implement the magic method ``__invoke()``.

```php
<?php

function foo() { echo __METHOD__; }

call_user_func('foo');

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.callable.php](https://www.php.net/manual/en/language.types.callable.php)

## See Also
- [What Is the callable Type in PHP?](https://www.designcise.com/web/tutorial/what-is-the-callable-type-in-php)

## Related
- [Callbacks](/features/callback.md)
- [Closure](/features/closure.md)
- [__invoke() Method](/features/__invoke.md)
- [Arrow Functions](/features/arrow-function.md)
- [Callable Arrays](/features/array-callable.md)
- [Call](/features/call.md)
- [Pseudo-type](/features/pseudo-type.md)
- [Special Types](/features/special-typehint.md)
- [Identity](/features/identity.md)
- [PHP Natives](/features/native-type.md)

