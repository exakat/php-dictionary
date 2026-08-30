---
type: "concept"
title: "Preprocessing"
description: "Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script."
resource: "https://www.php.net/manual/en/class.locale.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Preprocessing

Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script. This is only possible with constants values, which are known before execution.

Preprocessing may save execution time, and memory. 

In terms of maintenance, it hides some implementation details in the result: one has to guess where this value is coming from.

```php
<?php

$seconds = 60;
$minutes = 60;

$hours = $seconds * $minutes;

// this variable may be preprocessed, saving the calculation at execution time.
$hours = 3600;

?>
```

## Documentation
- [https://www.php.net/manual/en/class.locale.php](https://www.php.net/manual/en/class.locale.php)

## See Also
- [PP: php-preprocessor](https://github.com/gizmore/php-preprocessor)

## Related
- [PHP, Hypertext Preprocessor (PHP)](/features/php.md)
- [Performance](/features/performance.md)

