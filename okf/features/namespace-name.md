---
type: "PHP Feature"
title: "Namespace Name"
description: "Namespaces names are strings of characters that can be used as namespaces names."
resource: "https://www.php.net/manual/en/language.namespaces.rationale.php"
tags: ["naming"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Namespace Name

Namespaces names are strings of characters that can be used as namespaces names. Such names may be validated with the following regex: ``/^(?:[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff0-9]*)(?:\\[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff]*)*$/``.

In particular, namespaces names accept ``\`` character, and allows vast ranges of Unicode characters.

```php
<?php

namespace A\B {}

namespace 我\是\PHP {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.rationale.php](https://www.php.net/manual/en/language.namespaces.rationale.php)

## See Also
- [Understanding PHP Namespaces](https://www.w3docs.com/learn-php/php-namespaces.html)
- [PHP: Name resolution rules - Manual](https://www.php.net/manual/en/language.namespaces.rules.php)

## Related
- [Namespaces](/features/namespace.md)
- [Name](/features/name.md)
- [Name Conventions](/features/name-convention.md)

