---
type: "PHP Feature"
title: "Absolute Name"
description: "An absolute name is a name that is independent from the current namespace."
resource: "https://www.php.net/manual/en/language.namespaces.basics.php"
tags: ["namespace"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Absolute Name

An absolute name is a name that is independent from the current namespace. It is usually identified by the leading ``\`` sign. 

An absolute name does not require a ``use`` expression, and is faster to process, as there is no resolution involved. It may also be less readable, as it makes names longer. 

The opposite of relative name is relative name.

Absolute names are similar to absolute path, in a file system, though applied to functions, constants and classes names.

```php
<?php

    namespace A {
        function B() {}
        
        class C {}
    
    }
    
    namespace B {
        //absolute name to call a function
        \A\B();
        
        //absolute name to create an object
        new \A\C();

        //absolute name from the global space: no need to import it
        strtolower(...) instanceof \Closure;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.basics.php](https://www.php.net/manual/en/language.namespaces.basics.php)

## See Also
- [A Complete Guide to PHP Namespaces](https://www.thoughtfulcode.com/a-complete-guide-to-php-namespaces/)

## Related
- [Namespaces](/features/namespace.md)
- [Path](/features/path.md)
- [Import](/features/import.md)
- [Use Alias](/features/use-alias.md)
- [Readability](/features/readability.md)
- [Relative Name](/features/relative-name.md)
- [Namespaced Name](/features/namespaced-name.md)

