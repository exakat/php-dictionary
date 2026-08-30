---
type: "keyword"
title: "include"
description: "Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution."
resource: "https://www.php.net/manual/en/function.include.php"
tags: ["feature", "keyword", "language construct"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# include

Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures: include, require, include_once, require_once. 

Inclusion is often hidden in ``autoload()`` functions: the code is included class per class, upon request.

```php
vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

## Documentation
- [https://www.php.net/manual/en/function.include.php](https://www.php.net/manual/en/function.include.php)

## See Also
- [How to Use PHP Include and Require Statements](https://www.scoutapm.com/blog/how-to-use-php-include-and-require-statements/)

## Related
- [Inclusions](/features/inclusion.md)
- [Class Autoloading](/features/autoload.md)
- [File](/features/file.md)
- [Namespaces](/features/namespace.md)
- [Local File Inclusion](/features/local-file-inclusion.md)
- [Const](/features/const.md)
- [Order Of Execution](/features/order-of-execution.md)

