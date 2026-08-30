---
type: "PHP Feature"
title: "Chaining New Without Parenthesis"
description: "Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation."
resource: "https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.new-chaining"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Chaining New Without Parenthesis

Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.

```php
<?php

class X {
    public $property = 1;
    
    public function foo() { echo __METHOD__; }
    
    public function __invoke() { echo __METHOD__; }
}

new x()->property;  // 1
new x()->foo();     // X::foo
new x()();          // X::__invoke

?>
```

## Documentation
- [https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.new-chaining](https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.new-chaining)

## See Also
- [PHP RFC: new MyClass()->method() without parentheses](https://wiki.php.net/rfc/new_without_parentheses)
- [New without parentheses in PHP 8.4](https://stitcher.io/blog/new-with-parentheses-php-84)

## Related
- [new](/features/new.md)
- [New Without Parenthesis](/features/new-without-parenthesis.md)
- [Chaining](/features/chaining.md)

## Details
- PHP since: 8.4

