---
type: "PHP Feature"
title: "Fluent Interface"
description: "A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining."
resource: "https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html"
tags: ["code practice", "pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fluent Interface

A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface: it may be implemented without them.

```php
<?php

class script {
    function hello() {
        print 'Hello ';
        return $this;
    }

    function word() {
        print 'word.';
        return $this;
    }
}

$script = new Script();

$script->hello()->world();
// 

?>
```

## Documentation
- [https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html](https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html)

## See Also
- [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)
- [Fluent Interfaces Are Bad for Maintainability](https://news.ycombinator.com/item?id=16619171)
- [Fluent Interfaces are Evil](https://ocramius.github.io/blog/fluent-interfaces-are-evil/)

## Related
- [Final Keyword](/features/final.md)
- [Interface](/features/interface.md)
- [Chaining](/features/chaining.md)
- [Expressive Interface](/features/expressive-interface.md)

