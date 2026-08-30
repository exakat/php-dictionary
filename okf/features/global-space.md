---
type: "PHP Feature"
title: "Global Space"
description: "The term ``global space`` refers to the global namespace ``\\\\\\\\`` or the top-level scope in the PHP language."
resource: "https://www.php.net/manual/en/language.namespaces.global.php"
tags: ["namespace"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Global Space

The term ``global space`` refers to the global namespace ``\\\\`` or the top-level scope in the PHP language. The global space is where global variables, functions, and global constants reside. When a variable, function, or constant is defined without specifying a namespace, it is stored in the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace. Then, they may be imported in other namespaces, with the ``use`` expression.

```php
<?php

// This is the global space
namespace {
    // this function is defined in the global space
    function foo() {} 
} 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.global.php](https://www.php.net/manual/en/language.namespaces.global.php)

## See Also
- [PHP Namespace: An Essential Guide By Examples](https://www.phptutorial.net/php-oop/php-namespace/)
- [Global Namespaces and Fallback rules in PHP](https://blog.eduonix.com/2014/12/global-namespace-and-fallback-rules-in-php/)

## Related
- [Use Alias](/features/use-alias.md)
- [Import](/features/import.md)

