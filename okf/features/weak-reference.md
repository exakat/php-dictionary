---
type: "PHP Feature"
title: "Weak References"
description: "Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed."
resource: "https://www.php.net/manual/en/class.weakreference.php"
tags: ["memory"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Weak References

Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures.

```php
<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);

var_dump($weakref->get());
unset($obj);

var_dump($weakref->get());
// NULL

?>
```

## Documentation
- [https://www.php.net/manual/en/class.weakreference.php](https://www.php.net/manual/en/class.weakreference.php)

## See Also
- [PHP 8.0 feature focus: Weak maps](https://platform.sh/blog/php-80-feature-focus-weak-maps/)
- [WeakReferences](https://www.cmuir.co.nz/post/weakreferences/)

## Related
- [References](/features/reference.md)
- [Circular Reference](/features/circular-reference.md)

## Details
- PHP since: 7.4

