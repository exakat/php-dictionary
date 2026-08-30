---
type: "PHP Feature"
title: "Fallback Function"
description: "A fallback function is a function that replaces a function if its definition is not available in the current namespace."
resource: "https://www.php.net/manual/en/language.namespaces.fallback.php"
tags: ["compatibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fallback Function

A fallback function is a function that replaces a function if its definition is not available in the current namespace. 

PHP has implemented a mechanism so that functions that are undefined in the current namespace, have a fallback in the global space. This is important for backward compatibility, and the native PHP versions.

```php
<?php

    namespace A {
        // A\strtolower doesn't exist, 
        // it falls back on \strtolower(), in the global space
        echo strtolower('A');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.fallback.php](https://www.php.net/manual/en/language.namespaces.fallback.php)

## See Also
- [Function Arguments in PHP: Optional Parameters and Default Values](https://oatllo.com/course/php/function/php-function-arguments-guide)

## Related
- [Functions](/features/function.md)
- [Fallback](/features/fallback.md)

