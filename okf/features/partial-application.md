---
type: "concept"
title: "Partial Application"
description: "Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments."
resource: "https://en.wikipedia.org/wiki/Partial_application"
tags: ["concept", "functional programming"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Partial Application

Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments. It is the operation itself, distinct from its result, which is called a ``partial function``.

Partial application differs from currying: currying always transforms a function into a chain of one-argument functions, while partial application may fix any number of arguments at once and leaves the rest to be supplied together, in a single further call.

PHP has no dedicated syntax for partial application. It is emulated by wrapping the original call inside a closure or an arrow function that captures the already-known arguments, or with ``Closure::fromCallable()`` combined with a manual wrapper. First-class callable syntax makes referencing the underlying function easier, but does not perform the application itself.

```php
<?php

    function request(string $method, string $url, array $options = []) {
        // ...
    }

    // fixing the first argument ahead of time
    $get = fn(string $url, array $options = []) => request('GET', $url, $options);

    $get('https://example.com'); // only the remaining arguments are needed

    // fixing two arguments at once, unlike currying which would take them one by one
    $getExample = fn(array $options = []) => request('GET', 'https://example.com', $options);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Partial_application](https://en.wikipedia.org/wiki/Partial_application)

## See Also
- [Curry or Partial Application?](https://medium.com/javascript-scene/curry-or-partial-application-8150044c78b8)
- [Currying vs partial function application](https://codeblog.jonskeet.uk/2012/01/30/currying-vs-partial-function-application/)

## Related
- [Partial Function](/features/partial-function.md)
- [Currying](/features/currying.md)
- [Closure](/features/closure.md)
- [Arrow Functions](/features/arrow-function.md)
- [Functional Programming](/features/functional-programming.md)
- [First Class Callable](/features/first-class-callable.md)

