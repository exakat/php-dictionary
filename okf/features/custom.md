---
type: "concept"
title: "Custom"
description: "A feature is called ``custom`` when it is not part of the standard installation of PHP, any PHP extension or a publish library."
resource: "https://en.wikipedia.org/wiki/User-defined_function"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Custom

A feature is called ``custom`` when it is not part of the standard installation of PHP, any PHP extension or a publish library. For example, the function ``foo()`` is generally a custom function.

Any declaration object may be custom: constants, variables, classes, interfaces, enums, traits. 

A custom asset is usually the last to be defined, and, as such, has to use a distinct name. For example, declaring a function called ``wp_header`` is possible as long as the code is not part of Wordpress, which does declare it as a common set of features.

```php
<?php

// This is a custom function
function foo() {}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/User-defined_function](https://en.wikipedia.org/wiki/User-defined_function)

## See Also
- [PHP: User-defined Functions](https://www.php.net/manual/en/functions.user-defined.php)
- [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

## Related
- [Userland](/features/userland.md)

