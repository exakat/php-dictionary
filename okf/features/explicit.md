---
type: "concept"
title: "Explicit"
description: "A feature is explicit when its presence is represented in the source code."
resource: "https://skoop.dev/blog/2025/08/08/explicit-code/"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Explicit

A feature is explicit when its presence is represented in the source code.

For example, a default value for an argument is not explicit: it may be omitted, and still be used. It is called implicit. 

If that same value is written in the calling code, even if the passed value is the same as the default value, it is now explicit, and may be read in the calling code.

```php
<?php

    function foo($a = 1) {}
    
    // implicit call
    foo();
    
    // explicit calls
    foo(1);  
    foo(3);

?>
```

## Documentation
- [https://skoop.dev/blog/2025/08/08/explicit-code/](https://skoop.dev/blog/2025/08/08/explicit-code/)

## See Also
- [Default parameter values](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)
- [Named arguments](https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments)

## Related
- [Implicit](/features/implicit.md)

