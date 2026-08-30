---
type: "concept"
title: "Subnamespaces"
description: "In PHP, there is no such notion as subnamespaces."
resource: "https://www.php.net/manual/en/language.namespaces.rationale.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Subnamespaces

In PHP, there is no such notion as subnamespaces. There are namespaces, which may share the same prefix than other namespaces: yet, any collaboration stops at the similarity level. 

In particular, the fallback mechanisms for functions applies to the current namespace, and then, the global, rather than any intermediate namespace.

The analogy between PHP namespaces and a file system does not applies to subnamespaces.

```php
<?php

    // also known at the global namespace
    namespace {
        function foo() {}
    }
    
    namespace A {
        function foo() {}
    }
    
    // sometimes refered to as subnamespace
    namespace A\B {
    
        // This calls the global namespace definition,
        // not the one in A 
        foo();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.rationale.php](https://www.php.net/manual/en/language.namespaces.rationale.php)

## See Also
- [Namespaces](https://www.php.net/manual/en/language.namespaces.php)
- [PHP: Using Namespaces: Basics](https://www.php.net/manual/en/language.namespaces.basics.php)

## Related
- [Namespaces](/features/namespace.md)
- [Sub (prefix)](/features/sub.md)

