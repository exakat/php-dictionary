---
type: "static analysis"
title: "Propagation"
description: "Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency."
resource: "https://en.wikipedia.org/wiki/Type_inference"
tags: ["quality", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Propagation

Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency. 

In the example code, ``foo()`` and ``goo()`` are not typed, with arguments nor with return. Yet, the final call to ``strlen()`` means that both parameters must be ``string`` and both their return type will be ``int``. The types propagated from ``strlen()`` to the other functions.

Propagation is visible with types, as illustrated; it also applies to functions that die or use the ``never`` return type; and to unused piece of code, where not using a piece of code renders any called code unused, and, also useless.

Propagation is often silent, and does not yield error. Yet, it implies structure in the code, that makes it difficult to update.

```php
<?php

// type propagation via calls
function foo($x) {
    goo($x);
}

function goo($x) {
    hoo($x);
}

function hoo($x) {
    strlen($x);
}

// useless function, via lack of usage
function boo($x) {
    // doSomething
}

// $result is not used, 
// so boo() is not used
$result = boo(1);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Type_inference](https://en.wikipedia.org/wiki/Type_inference)

## See Also
- [Detecting Unused Private Properties, Methods, and Constants](https://phpstan.org/blog/detecting-unused-private-properties-methods-constants)

## Related
- [Useless](/features/useless.md)
- [Type System](/features/type.md)
- [Exit](/features/exit.md)
- [Cascading](/features/cascading.md)

