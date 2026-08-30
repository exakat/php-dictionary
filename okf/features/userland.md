---
type: "PHP Feature"
title: "Userland"
description: "A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developers."
resource: "https://www.php.net/manual/en/userlandnaming.php"
tags: ["term"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Userland

A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developers. ``userland`` features are opposed to ``native`` features, which are available within PHP itself.

Functions, classes, enums, traits, constants, etc. may be userland. Loaded components with composer from packagist are also userland structures. 

The main difference between userland and native features is tenuous. Though, some very specific feature may be reserved to native features. For example, magic methods are case-insensitive and magic, while userland constant cannot be case-insensitive. This is never critical.

There are some specific guidelines for userland naming.

```php
<?php

// foo is a userland function
function foo() {}

?>
```

## Documentation
- [https://www.php.net/manual/en/userlandnaming.php](https://www.php.net/manual/en/userlandnaming.php)

## See Also
- [User space](https://en.wikipedia.org/wiki/User_space)

## Related
- [Custom](/features/custom.md)
- [Native](/features/native.md)

