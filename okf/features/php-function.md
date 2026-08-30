---
type: "PHP Feature"
title: "PHP Native Function"
description: "PHP defines its own native functions."
resource: "https://www.php.net/manual/en/language.functions.php"
tags: ["structure", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Native Function

PHP defines its own native functions. They are part of the core extensions, which are always compiled, or extensions. 

PHP native functions do not have a definition available, unlike component or custom functions. They are handled by the PHP engine, and documented.

For example, ``strlen`` is a PHP native function, which measures the length of a string, in bytes. There are a lot of PHP functions available.

PHP native functions may be disabled at startup, with the ``disabled_functions`` directive.

It is possible to reach PHP native function definitions on the php.net website by adding their name in the URL. For example: ``https://www.php.net/strlen``.

```php
<?php

    print_r(get_defined_functions());

?>
```

## Documentation
- [https://www.php.net/manual/en/language.functions.php](https://www.php.net/manual/en/language.functions.php)

## See Also
- [PHP Safari: see how they are used in the wild](https://php-safari.com/)
- [php.net/strlen](https://www.php.net/strlen)

## Related
- [Functions](/features/function.md)
- [Custom Function](/features/custom-function.md)
- [Canonical](/features/canonical.md)
- [PHP Manual](/features/php-manual.md)

